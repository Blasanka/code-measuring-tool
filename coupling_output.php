<div class="col-12">
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
                    echo "<tr>
                        <td>".$codeLine[$i]."</td>
                    </tr>";
                }
            
            ?>
        </tbody>
    </table>
</div>