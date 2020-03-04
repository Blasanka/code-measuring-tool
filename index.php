<!DOCTYPE html>
<html>
	<head>
		<title>CDE IT Code complexity measuring tool</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/styles.css" />
	</head>
	<body>
		<div class="container">
			<h4>Copy / Paste or Upload your program statement for measuring code complexity.</h4>
			<form action="index.php" method="post" enctype="multipart/form-data">
  				<div class="form-group">
					<label for="file">Pick your program</label>
					<input type="file" class="form-control-file" id="file" name="file" onchange="form.submit()" />
  				</div>
			</form>
			<textarea rows="14" class="form-control" id="codeArea">
				<?php
					if (isset($_FILES['file'])) {
						$fp = fopen($_FILES['file']['tmp_name'], 'rb');
						while ( ($line = fgets($fp, 4096)) !== false) {
							echo "$line";
						}
					} else {
						echo "Your program code snippet will be displayed here...";
					}
				?>
			</textarea>
			
			<button id="analyze" name="analyze" class="btn btn-success" onClick="analyzeProgram()">Analyze</button>
			<div class="" id="output"></div>
			<script type="text/javascript">
				function analyzeProgram() {
					var codeArea = document.getElementById("codeArea").value;
					document.getElementById("output").innerHTML = "Analyzed code lines length is: " + codeArea.length;
				}
			</script>
		</div>
	</body>
</html>