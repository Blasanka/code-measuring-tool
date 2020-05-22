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
                
                $totalFactorsFile = "total_factors.xml";
                $totalFactorsXml= simplexml_load_file($totalFactorsFile);

                $wr = $xml->wr; 
                $wmcms = $xml->wmcms;
                $wmcmd = $xml->wmcmd;
                $wmcrms = $xml->wmcrms;
                $wmcrmd = $xml->wmcrmd;
                $wrmcrms = $xml->wrmcrms;
                $ccp = 0;
                
                for ($i=0; $i<count($codeLine); $i++) {
                    
                    $cs = $wr*0;
                    $cv= $wmcms*$i; // $i to check basic structure working, need to change when real calc.
                    $cm = $wmcmd*0;
                    $ci= $wmcrms*0;
                    $ccp = $wmcrmd*0;
                    $ccs = $totalFactorsXml->coupling->ccs;
                    $tcps = $cs + $cv + $cm + $ci + $ccp + $ccs;
                    echo "<tr>
                        <td>". ($i+1) ."</td>
                        <td><pre>".$codeLine[$i]."</pre></td>
                        <td>". ($cs) ."</td>
                        <td>". ($cv) ."</td>
                        <td>". ($cm) ."</td>
                        <td>". ($ci) ."</td>
                        <td>". ($ccp) ."</td>
                        <td>". ($ccs) ."</td>
                        <td>". ($tcps) ."</td>
                    </tr>";
                }
            
            ?>
        </tbody>
    </table>
</div>