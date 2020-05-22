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

                $cs = 0;
                $cv= 0;
                $cm = 0;
                $ci= 0;
                $ccs = 0;
                $ccp = $totalFactorsXml->ccp;
                $tcps = $cs + $cv + $cm + $ci + $ccp + $ccs;

                for ($i=0; $i<count($codeLine); $i++) {
                    
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
                
                echo "<tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><b>Total</b></td>
                    <td><b>". ($tcps) ."</b></td>
                </tr>";
            
            ?>
        </tbody>
    </table>
</div>