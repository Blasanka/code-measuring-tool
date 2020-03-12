<div class="row">
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
                for ($i=0; $i<count($codeLine); $i++) {
                    
                    $nr = 2*0;
                    $nmcms= 2*$i; // $i to check basic structure working, need to change when real calc.
                    $nmcmd= 3*0;
                    $nmcrms= 3*0;
                    $nmcrmd= 4*0;
                    $nrmcrms= 4*0;
                    $nrmcrmd= 5*0;
                    $nrmcms= 3*0;
                    $nrmcmd= 4*0;
                    $nmrgvs= 1*0;
                    $nmrgvd= 2*0;
                    $nrmrgvs= 1*0;
                    $nrmrgvd= 2*0;
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