<div class="row">
    <h3>Displaying the complexity of a program due to Control Structure</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Line no</th>
                <th scope="col">Program statements</th>
                
                <th scope="col">Wts</th>
                <th scope="col">NC</th>
                <th scope="col">Ccspps</th>
                <th scope="col">Cs</th>
           
            </tr>
        </thead>
        <tbody>
            <?php

                $file = "configcontrol.xml";
                $xml= simplexml_load_file($file);

                 
                $Wts = $xml->Wts;
                $NC = $xml->NC;
                $Ccspps = $xml->Ccspps;
                $Cs = ($Wts* $NC) + $Ccspps;


                for ($i=0; $i<count($codeLine); $i++) {
                    $Cs = 0;
                    $Wts = 0;
                    $NC= 0;
                    $Ccspps= 0;
                   

                    if (strpos($codeLine[$i], "if") === false 
                        && strpos($codeLine[$i], "(") === false) {
                    
                        $Cs += 2;
                    }
                    if (strpos($codeLine[$i], "else if") === false 
                    && strpos($codeLine[$i], "(") === false){
                        
                        $Cs += 2;

                    
                    }
                    if (strpos($codeLine[$i], "for") === false 
                    && strpos($codeLine[$i], "(") === false){
                        
                        $Cs += 3;

                    }if (strpos($codeLine[$i], "while") === false 
                    && strpos($codeLine[$i], "(") === false){
                        
                        $Cs += 3;

                    }
                    if (strpos($codeLine[$i], "do-while") === false 
                    && strpos($codeLine[$i], "(") === false){
                        
                        $Cs += 3;

                    }
                    if (strpos($codeLine[$i], "switch") === false 
                    && strpos($codeLine[$i], "(") === false){
                        
                        $Wts += 2;

                   
                    }
                    if (strpos($codeLine[$i], "case") === false 
                    ){
                        
                        $Ccspps += 1;

                   
                    }
                         echo "<tr>
                    <td>". ($i+1) ."</td>
                    <td><pre>".$codeLine[$i]."</pre></td>
                   
                    <td>". ($Wts) ."</td>
                    <td>". ($NC) ."</td>
                    <td>". ($Ccspps) ."</td>
                    <td>". ($Cs) ."</td>
                    
                </tr>";

                }
            
            ?>
        </tbody>
    </table>
</div>