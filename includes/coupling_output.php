<div class="row">
    <h3>Coupling</h3>
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
                
                for ($i=0; $i<count($codeLine); $i++) {
                    
                    $nr = $wr*0;
                    $nmcms= $wmcms*$i; // $i to check basic structure working, need to change when real calc.
                    $nmcmd= $wmcmd*0;
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
                        <td>". ($nrmcms) ."</td>
                        <td>". ($nrmcmd) ."</td>
                        <td>". ($nmrgvs) ."</td>
                        <td>". ($nmrgvd) ."</td>
                        <td>". ($nrmrgvs) ."</td>
                        <td>". ($nrmrgvd) ."</td>
                        <td>". ($ccp) ."</td>
                    </tr>";
                }
            
            ?>
        </tbody>
    </table>
</div>