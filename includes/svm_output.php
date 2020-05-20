<!-- Size -->
<div class="row">
    <h3>Size</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Line no</th>
                <th scope="col">Program statements</th>
                <th scope="col">Nkw</th>
                <th scope="col">Nid</th>
                <th scope="col">Nop</th>
                <th scope="col">Nnv</th>
                <th scope="col">Nsl</th>
                <th scope="col">cs</th>
                
            </tr>
        </thead>
        <tbody>
            <?php

                $file = "config1.xml";
                $xml= simplexml_load_file($file);

                $wkw = $xml->wkw; 
                $wid = $xml->wid;
                $wop = $xml->wop;
                $wnv = $xml->wnv;
                $wsl = $xml->wsl;
               
               $ccp = 0;

                require_once('svmRules.php');
                $rules = new svmRules();

                for ($i=0; $i<count($codeLine); $i++) {
                    $Nkw = 0;
                    $Nid = 0;
                    $Nop = 0;
                    $Nnv = 0;
                    $Nsl = 0;
                    
                   // git add .
                // git commit -m "message"
                // git checkout -b svm
                // git push -u origin svm

                    if (strpos($codeLine[$i], "//") === false && strpos($codeLine[$i], "/*") === false 
                        && strpos($codeLine[$i], "#") === false) {

                        if (strpos($codeLine[$i], "class") !== false) {
                            $Nkw += 1;
                        }

                        if (strpos($codeLine[$i], "public") !== false) {
                            $Nkw += 1;
                        }
                        if (strpos($codeLine[$i], "private") !== false) {
                            $Nkw += 1;
                        }
                        if (strpos($codeLine[$i], "void") !== false) {
                            $Nkw += 1;
                        }
                        if (strpos($codeLine[$i], "true") !== false) {
                            $Nkw += 1;
                        }
                        if (strpos($codeLine[$i], "else") !== false) {
                            $Nkw += 1;
                        }
                        if (strpos($codeLine[$i], "default") !== false) {
                            $Nkw += 1;
                        }
                        if (strpos($codeLine[$i], "return") !== false) {
                            $Nkw += 1;
                        }
                        if (strpos($codeLine[$i], "null") !== false) {
                            $Nkw += 1;
                        }
                        if (strpos($codeLine[$i], "break") !== false) {
                            $Nkw += 1;
                        }
                        if (strpos($codeLine[$i], "this") !== false) {
                            $Nkw += 1;
                        }
                        if (strpos($codeLine[$i], "extends") !== false) {
                            $Nkw += 1;
                        }
                        if (strpos($codeLine[$i], "implements") !== false) {
                            $Nkw += 1;
                        }

                        if (strpos($codeLine[$i], '"') !== false) {
                            $Nsl += 1;
                        }
                        if (strpos($codeLine[$i], '+ "') !== false) {
                            $Nsl += 1;
                        }

                        //number of operators
                        $strlen = strlen($codeLine[$i]);
                        for ($y = 0; $y < $strlen; $y++) {
                            $c = $codeLine[$i][$y];

                            if ($c == '+' || $c == '-' || $c == '*' || $c == '/' || $c == '%' || $c == '++' || $c == '--'
                                || $c == '==' || $c == '!=' || $c == '>' || $c == '<' || $c == '>=' || $c == '<='
                                || $c == '&&' || $c == '||' || $c == '!' || $c == '|' || $c == '^' || $c == '~'
                                || $c == '<<' || $c == '>>' || $c == '>>>' || $c == '<<<' || $c == ',' || $c == '->'
                                || $c == '.' || $c == '::' || $c == '+=' || $c == '-=' || $c == '*=' || $c == '/='
                                || $c == '=' || $c == '>>>=' || $c == '|=' || $c == '&=' || $c == '%=' || $c == '<<='
                                || $c == '>>=' || $c == '^=') {
                                $Nop += 1;
                            }
                        }
                           /*
                            $strlen = strlen($codeLine[$i]);
                            for ($x = 0; $x < $strlen; $x++) {
                                $string = $codeLine[$i][$x];

                                if ($string == '"') {
                                    $Nsl = 1;
                                }

                        }
                            */
                        //numercale values
                        $strlen = strlen($codeLine[$i]);
                        for ($z = 0; $z < $strlen; $z++) {
                            $num = $codeLine[$i][$z];

                            if ($num == '1' || $num == '2' || $num == '3' || $num == '4' || $num == '5'
                                || $num == '6' || $num == '7'
                                || $num == '8' || $num == '9' || $num == '0') {
                                $Nnv += 1;
                            }

                        }

                        if($Nnv == 6){

                           $Nnv =  $Nnv / 2 - 1;
                        }
                        // $Nid = $wid*$rules->findARegularMethodCall($codeLine[$i]);

                        $arithmatic = $wop*$Nop;
                        $Numericle = $wnv*$Nnv;
                       // $Nsl = $wsl*0;
                        $Stringl = $wsl*$Nsl;
                        $ccp = $Nkw + ($Nid * $wid) + $Nop + $Nnv + $Nsl;
                        echo "<tr>
                            <td>". ($i+1) ."</td>
                            <td><pre>".$codeLine[$i]."</pre></td>
                            <td>". ($Nkw) ."</td>
                            <td>". ($Nid) ."</td>
                            <td>". ($arithmatic) ."</td>
                            <td>". $Numericle ."</td>
                            <td>". $Stringl ."</td>
                            <td>". ($ccp) ."</td>
                        </tr>";
                    }
                }
            
            ?>
        </tbody>
    </table>
</div>

<!-- Variables -->

<div class="row">
    <h3>Variables</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Line no</th>
                <th scope="col">Program statements</th>
                <th scope="col">Wvs</th>
                <th scope="col">Nspdtv</th>
                <th scope="col">Ncdtv</th>
                <th scope="col">Cv</th>
               
                
            </tr>
        </thead>
        <tbody>
            <?php

                $file = "config2.xml";
                $xml= simplexml_load_file($file);

                $wgv = $xml->wgv; 
                $wlv = $xml->wlv;
                $wpdtv = $xml->wpdtv;
                $wcdtv = $xml->wcdtv;
            
                $ccp = 0;

                require_once('svmRules.php');
                $rules = new svmRules();

                for ($i=0; $i<count($codeLine); $i++) {
                    $Wvs = 0;
                    $Nspdtv = 0;
                    $Ncdtv= 0;
                    $Cv= 0;
                    

                    if (strpos($codeLine[$i], "//") === false && strpos($codeLine[$i], "/*") === false 
                        && strpos($codeLine[$i], "#") === false) {
                    
                        //$rules->findRecursiveMethods($codeLine[$i]);
                        // $rules->displayArr();
                        //$Wvs = $wgv*$rules->getRecursiveCallCount();

                        //$Nspdtv= $wlv*$rules->findARegularMethodCall($codeLine[$i]);
                        $Wvs = $wgv * 0;
                        $Nspdtv = $wlv * 0;
                        $Ncdtv = $wpdtv*0;
                        $Cv= $wcdtv*0;
                       
                        $ccp= $Wvs + $Nspdtv + $Ncdtv + $Cv;
                        echo "<tr>
                            <td>". ($i+1) ."</td>
                            <td><pre>".$codeLine[$i]."</pre></td>
                            <td>". ($Wvs) ."</td>
                            <td>". ($Nspdtv) ."</td>
                            <td>". ($Ncdtv) ."</td>
                            
                           
                            <td>". ($ccp) ."</td>
                        </tr>";
                    }
                }
            
            ?>
        </tbody>
    </table>
</div>


<!-- Methods -->

<div class="row">
    <h3>Methods</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Line no</th>
                <th scope="col">Program statements</th>
                <th scope="col">Wmrt</th>
                <th scope="col">Npdtp</th>
                <th scope="col">Ncdtp</th>
                <th scope="col">Cm</th>
               
                
            </tr>
        </thead>
        <tbody>
            <?php

                $file = "config3.xml";
                $xml= simplexml_load_file($file);

                $wprt = $xml->wprt; 
                $wcrt = $xml->wcrt;
                $wmvrt = $xml->wmvrt;
                $wpdtp = $xml->wpdtp;
                $wcdtp = $xml->wcdtp;
                $ccp = 0;

                require_once('svmRules.php');
                $rules = new svmRules();

                for ($i=0; $i<count($codeLine); $i++) {
                    $Wmrt = 0;
                    $Npdtp = 0;
                    $Ncdtp= 0;
                    $Cm= 0;
                   

                    if (strpos($codeLine[$i], "//") === false && strpos($codeLine[$i], "/*") === false 
                        && strpos($codeLine[$i], "#") === false) {
                    
                        //$rules->findRecursiveMethods($codeLine[$i]);
                        // $rules->displayArr();
                        //$Wmrt = $wprt*$rules->getRecursiveCallCount();

                        //$Npdtp= $wcrt*$rules->findARegularMethodCall($codeLine[$i]);

                        $Wmrt = $wprt * 0;
                        $Npdtp = $wcrt * 0;
                        $Ncdtp = $wmvrt*0;
                       
                       
                        $Cm= $Wmrt + $Npdtp + $Ncdtp ;
                        echo "<tr>
                            <td>". ($i+1) ."</td>
                            <td><pre>".$codeLine[$i]."</pre></td>
                            <td>". ($Wmrt) ."</td>
                            <td>". ($Npdtp) ."</td>
                            <td>". ($Ncdtp) ."</td>
                            
                            <td>". ($Cm) ."</td>
                        </tr>";
                    }
                }
            
            ?>
        </tbody>
    </table>
</div>