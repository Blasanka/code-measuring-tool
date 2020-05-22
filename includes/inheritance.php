<div class="row">
    <h3>Displaying the complexity of a program due to inheritance</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Line no</th>
                <th scope="col">Program statements</th>
                <th scope="col">Ndi</th>
                <th scope="col">Nidi</th>
                <th scope="col">Ti</th>
                <th scope="col">Ci</th>
                
            </tr>
        </thead>
        <tbody>
            <?php

                $file = "configinheritance.xml";
                $xml= simplexml_load_file($file);

                $Ndi = $xml->Ndi; 
                $Nidi = $xml->Nidi;
                $Ti = $xml->Ti;
                $Ci = $xml->Ci;
                

                for ($i=0; $i<count($codeLine); $i++) {
                    $Ni = 0;
                    $Nidi = 0;
                    $Ti= 0;
                    $Ci= 0;
                   

                    if (strpos($codeLine[$i], "extends") === false) {

                        $Ndi +=1;
                    
                       
                        
                    }
                    if (strpos($codeLine[$i], "implements") === false) {

                        $Nidi +=2;
                    
                       
                        
                    }
                    $Ti=$Ndi+$Nidi;

                    echo "<tr>
                            <td>". ($i+1) ."</td>
                            <td><pre>".$codeLine[$i]."</pre></td>
                            <td>". ($Ni) ."</td>
                            <td>". ($Nidi) ."</td>
                            <td>". ($Ti) ."</td>
                            <td>". ($Ci) ."</td>
                            
                        </tr>";
                }
            
            ?>
        </tbody>
    </table>
</div>