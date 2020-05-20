<div class="row">
    <h3>Displaying the complexity of a program due to coupling</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Line no</th>
                <th scope="col">Program statements</th>
                <th scope="col">Nr</th>
                <th scope="col">Nmcms</th>
                <th scope="col">Nmcmd</th>
                <th scope="col">Nmcrms</th>
                <th scope="col">Nmcrmd</th>
                <th scope="col">Nrmcrms</th>
                <th scope="col">Nrmcrmd</th>
                <th scope="col">Nrmcms</th>
                <th scope="col">Nrmcmd</th>
                <th scope="col">Nmrgvs</th>
                <th scope="col">Nmrgvd</th>
                <th scope="col">Nrmrgvs</th>
                <th scope="col">Nrmrgvd</th>
                <th scope="col">Ccp</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $file = "config.xml";
                $xml= simplexml_load_file($file);

                $wr = $xml->wr; 
                $wmcms = $xml->wmcms;
                $wmcmd = $xml->wmcmd;
                $wmcrms = $xml->wmcrms;
                $wmcrmd = $xml->wmcrmd;
                $wrmcrms = $xml->wrmcrms;
                $wrmcrmd = $xml->wrmcrmd;
                $wrmcms = $xml->wrmcms;
                $wrmcmd = $xml->wrmcmd;
                $wmrgvs = $xml->wmrgvs;
                $wmrgvd = $xml->wmrgvd;
                $wrmrgvs = $xml->wrmrgvs;
                $wrmrgvd = $xml->wrmrgvd;
                $ccp = 0;

                require_once('CouplingRules.php');
                $rules = new CouplingRules();

                for ($i=0; $i<count($codeLine); $i++) {
                    $nr = 0;
                    $nmcmd = 0;
                    $nmcms= 0;
                    $nmcrms= 0;
                    $nmcrmd= 0;
                    $nrmcrms= 0;
                    $nrmcrmd= 0;
                    $nrmcms= 0;
                    $nrmcmd= 0;
                    $nmrgvs= 0;
                    $nmrgvd= 0;
                    $nrmrgvs= 0;
                    $nrmrgvd= 0;

                    if (strpos($codeLine[$i], "//") === false && strpos($codeLine[$i], "/*") === false 
                        && strpos($codeLine[$i], "#") === false) {
                    
                        $rules->findRecursiveMethods($codeLine[$i]);
                        // $rules->displayArr();
                        $nr = $wr*$rules->getRecursiveCallCount();

                        $nmcms= $rules->findARegularMethodCall($codeLine[$i]);

                        $nmcmd = $wmcmd*0;
                        $nmcrms= $wmcrms*0;
                        $nmcrmd= $wmcrmd*0;
                        $nrmcrms= $wrmcrms*0;
                        $nrmcrmd= $wrmcrmd*0;
                        $nrmcms= $wrmcms*0;
                        $nrmcmd= $wrmcmd*0;
                        $nmrgvs= $wmrgvs*0;
                        $nmrgvd= $wmrgvd*0;
                        $nrmrgvs= $wrmrgvs*0;
                        $nrmrgvd= $wrmrgvd*0;

                        $ccp= $nr + ($wmcms*$nmcms) + $nmcmd + $nmcrms + $nmcrmd + $nrmcrms + $nrmcrmd 
                            + $nrmcms + $nrmcmd + $nmrgvs + $nmrgvd + $nrmrgvs + $nrmrgvd;

                        echo "<tr>
                            <td>". ($i+1) ."</td>
                            <td><pre>".$codeLine[$i]."</pre></td>
                            <td>". ($nr) ."</td>
                            <td>". ($nmcms) ."</td>
                            <td>". ($nmcmd) ."</td>
                            <td>". ($nmcrms) ."</td>
                            <td>". ($nmcrmd) ."</td>
                            <td>". ($nrmcrms) ."</td>
                            <td>". ($nrmcrmd) ."</td>
                            <td>". ($nrmcms) ."</td>
                            <td>". ($nrmcmd) ."</td>
                            <td>". ($nmrgvs) ."</td>
                            <td>". ($nmrgvd) ."</td>
                            <td>". ($nrmrgvs) ."</td>
                            <td>". ($nrmrgvd) ."</td>
                            <td>". ($ccp) ."</td>
                        </tr>";
                    }
                }
            
            ?>
        </tbody>
    </table>
</div>