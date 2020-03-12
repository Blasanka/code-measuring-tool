<?php include("includes/header.php"); ?>
		<?php $codeLine = array(); ?>
		<div class="container">
			<div class="col-12">
				<div class="row row-margin">
					<h4>Copy / Paste or Upload your program statement for measuring code complexity.</h4>
				</div>
				<div class="row"></div>
				<div class="row">
					<form action="index.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<div class="row">
								<div class="col-5"><label for="file">Pick your program:</label></div>
								<div class="col-4">
									<input type="file" class="form-control-file" id="file" name="file" onchange="form.submit()" />
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="row row-margin">
					<textarea rows="14" class="form-control" id="codeArea">
						<?php
							if (isset($_FILES['file'])) {
								$counter = 0;
								$fp = fopen($_FILES['file']['tmp_name'], 'rb');
								while (($line = fgets($fp, 4096)) !== false) {
									global $codeLine;
									$codeLine[$counter] = $line;
									echo "$line";
									$counter++;
								}
							} else {
								echo "Your program code snippet will be displayed here...";
							}
						?>
					</textarea>
				</div>
				<div class="row row-margin">
					<div class="col-11"></div>
					<div class="col-1">
						<button id="analyze" name="analyze" class="btn btn-success" onClick="analyzeProgram()">Analyze</button>
					</div>
				</div>
			</div>
			<div class="col-12" id="output-table">
				<div class="row row-margin">
					<div class="col-10" id="output"></div>
					<div class="col-2">
						<a href="/code-measuring-tool/edit.php" class="btn btn-primary">Change Weights</a>
					</div>
				</div>
				<?php include("includes/coupling_output.php") ?>
			</div>
			<script type="text/javascript">
				document.getElementById("output-table").style.display = "none";
				function analyzeProgram() {
					var codeArea = document.getElementById("codeArea").value;
					document.getElementById("output").innerHTML = "Analyzed code lines length is: " + codeArea.length;
					document.getElementById("output-table").style.display = "block";
				}
			</script>	
		</div>
<?php include("includes/footer.php"); ?>