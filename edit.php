<?php include("includes/header.php"); ?>
<div class="container">
    <form action="edit.php" method="post">
        <div class="row">
            <div class="col-11">
                <a href="/code-measuring-tool/" class="btn btn-primary">Go Back</a>
            </div>
            <div class="col-1">
                <input type="submit" value="Save" name="submit" class="btn btn-success" />
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Coupling Type</th>
                    <th scope="col">Weight</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        // $wr = 2;
                        // $wmcmd= 3;
                        // $wmcrms= 3;
                        // $wmcrmd= 4;
                        // $wrmcrms= 4;
                        // $wrmcrmd= 5;
                        // $wrmcms= 3;
                        // $wrmcmd= 4;
                        // $wmrgvs= 1;
                        // $wmrgvd= 2;
                        // $wrmrgvs= 1;
                        // $wrmrgvd= 2;

                        $file = "config.xml";
                        $xml= simplexml_load_file($file);
                        if(isset($_POST)) {
                            // unset($xml->config);
                            if(isset($_POST['wr'])) {
                                // setcookie("wr", $_POST['wr']);
                                $xml->wr = $_POST['wr'];
                            } 
                            if(isset($_POST['wmcms'])) {
                                // setcookie("wmcms", $_POST['wmcms']);
                                $xml->wmcms = $_POST['wmcms'];
                            } 
                            if(isset($_POST['wmcmd'])) {
                                // setcookie("wmcmd", $_POST['wmcmd']);
                                $xml->wmcmd = $_POST['wmcmd'];
                            } 
                            if(isset($_POST['wmcrms'])) {
                                // setcookie("wmcrms", $_POST['wmcrms']);
                                $xml->wmcrms = $_POST['wmcrms'];
                            } 
                            if(isset($_POST['wmcrmd'])) {
                                // setcookie("wmcrmd", $_POST['wmcrmd']);
                                $xml->wmcrmd = $_POST['wmcrmd'];
                            } 
                            if(isset($_POST['wrmcrms'])) {
                                // setcookie("wrmcrms", $_POST['wrmcrms']);
                                $xml->wrmcrms = $_POST['wrmcrms'];
                            } 
                            if(isset($_POST['wrmcrmd'])) {
                                // setcookie("wrmcrmd", $_POST['wrmcrmd']);
                                $xml->wrmcrmd = $_POST['wrmcrmd'];
                            } 
                            if(isset($_POST['wrmcms'])) {
                                // setcookie("wrmcms", $_POST['wrmcms']);
                                $xml->wrmcms = $_POST['wrmcms'];
                            } 
                            if(isset($_POST['wrmcmd'])) {
                                // setcookie("wrmcmd", $_POST['wrmcmd']);
                                $xml->wrmcmd = $_POST['wrmcmd'];
                            } 
                            if(isset($_POST['wmrgvs'])) {
                                // setcookie("wmrgvs", $_POST['wmrgvs']);
                                $xml->wmrgvs = $_POST['wmrgvs'];
                            } 
                            if(isset($_POST['wmrgvd'])) {
                                // setcookie("wmrgvd", $_POST['wmrgvd']);
                                $xml->wmrgvd = $_POST['wmrgvd'];
                            } 
                            if(isset($_POST['wrmrgvs'])) {
                                // setcookie("wrmrgvs", $_POST['wrmrgvs']);
                                $xml->wrmrgvs = $_POST['wrmrgvs'];
                            } 
                            if(isset($_POST['wrmrgvd'])) {
                                // setcookie("wrmrgvd", $_POST['wrmrgvd']);
                                $xml->wrmrgvd = $_POST['wrmrgvd'];
                            }
                            file_put_contents($file, $xml->asXML());
                        }

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

                        echo "<tr>
                            <td>A recursivecall (Refer to Ex1in fig. 1)</td>
                            <td><input type='text' value=". $wr ."  name='wr' /></td>
                        </tr>
                        <tr>
                            <td>A regular method calling another regular method in the same file</td>
                            <td><input type='text' value=". $wmcms ."  name='wmcms' /></td>
                        </tr>
                        <tr>
                            <td>A regular method calling another regular method in a different file</td>
                            <td><input type='text' value=". $wmcmd ."  name='wmcmd' /></td>
                        </tr>
                        <tr>
                            <td>A regular method calling another regular method in a different file</td>
                            <td><input type='text' value=". $wmcrms ." name='wmcrms' /></td>
                        </tr>
                        <tr>
                            <td>A regular method calling a recursive method in the same file (Refer to Ex4 in fig. 1)</td>
                            <td><input type='text' value=". $wmcrmd ." name='wmcrmd' /></td>
                        </tr>
                        <tr>
                            <td>A regular method calling a recursive method in a different file</td>
                            <td><input type='text' value=". $wrmcrms ." name='wrmcrms' /></td>
                        </tr>
                        <tr>
                            <td>A regular method calling a recursive method in the same file (Refer to Ex4 in fig. 1)</td>
                            <td><input type='text' value=". $wrmcrmd ." name='wrmcrmd' /></td>
                        </tr>
                        <tr>
                            <td>A recursive method calling another recursive method in the same file (Refer to Ex2 in fig. 1)</td>
                            <td><input type='text' value=". $wrmcms ." name='wrmcms' /></td>
                        </tr>
                        <tr>
                            <td>A recursive method calling another recursive method in a different file</td>
                            <td><input type='text' value=". $wrmcmd ." name='wrmcmd' /></td>
                        </tr>
                        <tr>
                            <td>A recursive method calling a  regular method in the same file</td>
                            <td><input type='text' value=". $wmrgvs ." name='wmrgvs' /></td>
                        </tr>
                        <tr>
                            <td>A recursive method calling a  regular method in a different file</td>
                            <td><input type='text' value=". $wmrgvd ." name='wmrgvd' /></td>
                        </tr>
                        <tr>
                            <td>A regular method referencing a global variable in the same file (Refer to Ex3 in fig. 1)</td>
                            <td><input type='text' value=". $wrmrgvs ." name='wrmrgvs' /></td>
                        </tr>
                        <tr>
                            <td>A regular method referencing a global variable in a different file</td>
                            <td><input type='text' value=". $wrmrgvd ." name='wrmrgvd' /></td>
                        </tr>";
                ?>
            </tbody>
        </table>
    </form>
</div>
<?php include("includes/footer.php"); ?>

<!-- <tr>
    <td>A recursive method referencing a global variable in the same file</td>
    <td><input type='text' value='wr' name='wr' /></td>
</tr>
<tr>
    <td>A recursive method referencing a global variable in a different file</td>
    <td><input type='text' value='wr' name='wr' /></td>
</tr> -->