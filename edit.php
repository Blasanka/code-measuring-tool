<?php include("includes/header.php"); ?>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Coupling Type</th>
                <th scope="col">Weight</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    $wr = 2;
                    $wmcmd= 3;
                    $wmcrms= 3;
                    $wmcrmd= 4;
                    $wrmcrms= 4;
                    $wrmcrmd= 5;
                    $wrmcms= 3;
                    $wrmcmd= 4;
                    $wmrgvs= 1;
                    $wmrgvd= 2;
                    $wrmrgvs= 1;
                    $wrmrgvd= 2;
                    echo "<tr>
                        <td>A recursivecall (Refer to Ex1in fig. 1)</td>
                        <td>". $wr ."</td>
                    </tr>
                    <tr>
                        <td>A regular method calling another regularmethod in the same file</td>
                        <td>". $wmcmd ."</td>
                    </tr>
                    <tr>
                        <td>A regular method calling another regular method in a different file</td>
                        <td>". $wmcrms ."</td>
                    </tr>
                    <tr>
                        <td>A regular method calling a recursive method in the same file (Refer to Ex4 in fig. 1)</td>
                        <td>". $wmcrmd ."</td>
                    </tr>
                    <tr>
                        <td>A regular method calling a recursive method in a different file</td>
                        <td>". $wrmcrms ."</td>
                    </tr>
                    <tr>
                        <td>A regular method calling a recursive method in the same file (Refer to Ex4 in fig. 1)</td>
                        <td>". $wrmcrmd ."</td>
                    </tr>
                    <tr>
                        <td>A recursive method calling another recursive method in the same file (Refer to Ex2 in fig. 1)</td>
                        <td>". $wrmcms ."</td>
                    </tr>
                    <tr>
                        <td>A recursive method calling another recursive method in a different file</td>
                        <td>". $wrmcmd ."</td>
                    </tr>
                    <tr>
                        <td>A recursive method calling a  regular method in the same file</td>
                        <td>". $wmrgvs ."</td>
                    </tr>
                    <tr>
                        <td>A recursive method calling a  regular method in a different file</td>
                        <td>". $wmrgvd ."</td>
                    </tr>
                    <tr>
                        <td>A regular method referencing a global variable in the same file (Refer to Ex3 in fig. 1)</td>
                        <td>". $wrmrgvs ."</td>
                    </tr>
                    <tr>
                        <td>A regular method referencing a global variable in a different file</td>
                        <td>". $wrmrgvd ."</td>
                    </tr>
                    <tr>
                        <td>A recursive method referencing a global variable in the same file</td>
                        <td>". $wr ."</td>
                    </tr>
                    <tr>
                        <td>A recursive method referencing a global variable in a different file</td>
                        <td>". $wr ."</td>
                    </tr>";
            ?>
        </tbody>
    </table>
</div>
<?php include("includes/footer.php"); ?>