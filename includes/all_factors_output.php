<div class="row">
    <h3>Displaying the complexity of a program due to all the factors</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Line no</th>
                <th scope="col">Program statements</th>
                <th scope="col">Cs</th>
                <th scope="col">Cv</th>
                <th scope="col">Cm</th>
                <th scope="col">Ci</th>
                <th scope="col">Ccp</th>
                <th scope="col">Ccs</th>
                <th scope="col">TCps</th>
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
                $ccp = 0;
                
                for ($i=0; $i<count($codeLine); $i++) {
                    
                    $nr = $wr*0;
                    $nmcms= $wmcms*$i; // $i to check basic structure working, need to change when real calc.
                    $nmcmd= $wmcmd*0;
                    $nmcrms= $wmcrms*0;
                    $nmcrmd= $wmcrmd*0;
                    $nrmcrms= $wrmcrms*0;
                    $nrmcrmd= $wrmcrmd*0;
                    $ccp= $nr + $nmcms + $nmcmd + $nmcrms + $nmcrmd + $nrmcrms + $nrmcrmd + $nrmcms 
                            + $nrmcmd + $nmrgvs + $nmrgvd + $nrmrgvs + $nrmrgvd;
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
                    </tr>";
                }
            
            ?>
        </tbody>
    </table>
</div>