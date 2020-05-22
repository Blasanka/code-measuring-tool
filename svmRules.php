<?php

class svmRules {


    function findARegularMethodCall($line) {
        $appearedCount = 0;

        $strlen = strlen($line);
        if ($strlen > 0) {

            if (preg_match("/[(?]\w[)?,*]^(;$)/", $line,  $element) === 1) {
                $appearedCount += 1;
            }

            if (preg_match('/void.+/', $line) === 0) {
                if (preg_match("/([a-zA-Z_]+)([\(\)])/", $line, $element) === 1) {
                    // $appearedCount += 1;
                    foreach ($element as $key => $val) {
                        if (preg_match("/\w+\(+/", $val) === 1) {
                            $appearedCount += 1;
                            // echo $val;
                            // echo "<br/>";
                        }
                    }
                }

                if (preg_match("/\(\),/", $line, $element) === 1) {
                    $appearedCount += 1;
                }

                if (preg_match("/\(\)\./", $line, $element) === 1) {
                    $appearedCount += 1;
                    // print_r($matches);
                    // echo "<br/>";
                }
            }
            return $appearedCount;
        }
    }
}

?>