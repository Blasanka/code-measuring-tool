<?php

class CouplingRules {

    public $identifiedMethods;
    public $identifiedMethodsInvokes;
    public $oneLineParts;

    public $userDefinedTypes;
    public $identifiedRecursions;
    private $notTerminatedLines;

    private $ignoreKeywords = array("if", "else if", "else", "switch",
     "case", "default", "for", "while", "class", "try", "catch", "finaly", "extends", "implements", "abstract", "throw", "import", "package");

    private $primitiveTypes = array("boolean", "byte", "short", "int",
     "float", "double", "long", "char");
    
    private $mustConsiderKeywords = array("new", "class", "print", "println", "return",
     "private", "public", "protected", "default", "static", "void");

    private $specialChars = array("_", "-", ".", "(", ")", "{", "}", "[", "]",
     "<", ">", "=", ":", ";", "?", "+", "/", "*", "\\", "!", "@", "#", "$", "%", "^",
     " ", "&", "~", ",", "'", "\"", "|");

    public function __construct() {
        $this->identifiedMethods = array();
        $this->identifiedMethodsInvokes = array();
        $this->oneLineParts = array();
        $this->userDefinedTypes = array();
        $this->identifiedMethods = array();
        $this->identifiedRecursions = array();
        $this->notTerminatedLines = "";
    }

    function findRecursiveMethods($line) {
        
        if (strlen($line) > 0) {
            if ((strpos($line, '(') !== false) && (strpos($line, ')') !== false)) {
                $this->oneLineParts = explode(' ', $line);
                if (strpos($line, ';') === false) {
                    if( in_array("void", $this->oneLineParts ) ) {
                        $methodName = substr_replace($this->oneLineParts[3], '', strpos($this->oneLineParts[3], '('), strlen($this->oneLineParts[3]));
                        array_push($this->identifiedMethods, $methodName);
                    } else if (count($this->oneLineParts) >= 2 && (strpos($line, '{') !== false)) {
                        $methodName = substr_replace($this->oneLineParts[3], '', strpos($this->oneLineParts[3], '('), strlen($this->oneLineParts[3]));
                        array_push($this->identifiedMethods, $methodName);
                    }
                } else {
                    if (strpos($line, '=') !== false) {
                        $methodName = substr_replace($this->oneLineParts[3], '', strpos($this->oneLineParts[3], '('), strlen($this->oneLineParts[3]));
                        array_push($this->identifiedMethodsInvokes, $methodName);
                    } else {
                        $methodName = substr_replace($this->oneLineParts[0], '', strpos($this->oneLineParts[0], '('), strlen($this->oneLineParts[0]));
                        array_push($this->identifiedMethodsInvokes, $methodName);
                    }
                }
            }
        }
    }

    function getRecursiveCallCount() {
        return 0;//count(array_intersect($this->identifiedMethods, $this->identifiedMethodsInvokes ));
        // foreach ($this->identifiedMethods as $method) {
            
        // }
        // return array_sum(array_intersect($this->identifiedMethods, $this->identifiedMethodsInvokes));
    }

    function findARegularMethodCall($line) {
        
        if (strlen($line) > 0) {
            if (strpos($line, "(") !== false && strpos($line, ");") !== false) {
                return 1;
            }
            
            // if (in_array(".", $this->oneLineParts)) {
            //     return 1;
            // }
            
            if (!$this->checkBraces($line)) {
                $this->notTerminatedLines .= $line;
                if (preg_match("[(|);]", $this->notTerminatedLines) === 1) {
                    // print_r($this->notTerminatedLines);
                    $this->notTerminatedLines = "";
                    return 1;
                }
            }
            return 0;
        }
    }

    function checkBraces($str) {
        $strlen = strlen($str);
        $openbraces = 0;

        for ($i = 0; $i < $strlen; $i++) {
            $c = $str[$i];
            if ($c == "(")
                $openbraces++;
            if ($c == ")")
                $openbraces--;

            if ($openbraces < 0)
                return false;
        }

        return $openbraces == 0;
    }

    function displayArr() {
        print_r($this->identifiedMethods);
        print_r($this->identifiedMethodsInvokes);
        // print_r($this->oneLineParts);
    }
}

?>