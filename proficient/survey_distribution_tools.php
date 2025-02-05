<!DOCTYPE html>
<html>
	<head>
		<?php echo file_get_contents("../head_links_sub.html"); ?>	
		<meta name="keywords" content="REDCap, training, education">
		<meta name=”description” content=”This page educates REDCap users on using the Survey Distribution Tools”>
		<title>Survey Distribution Tools</title>	
	</head>
	<body>
		<!--Navigation bars-->
		<div>
			<?php echo file_get_contents("../main_navigation_bar_sub.html"); ?> 
			<?php echo file_get_contents("../topic_navigation_bar_sub.html"); ?>
		</div>
		<!--Button back to top-->
		<?php echo file_get_contents("../top_button.html"); ?>
		<br>
		<br>
		<br>
		<br>
		<!--Title-->
		<h1 class="title_pdf">Survey Distribution Tools</h1>
		<!--Content-->
		<div class="topic_pdf">
			<div class="embedded_pdf">
				<!--PDF content-->
				<iframe class="pdf_location" src="participant_list.pdf" width="1000px" height="1200px"></iframe>
				<iframe class="pdf_location" src="https://ctsi.wakehealth.edu/-/media/WakeForest/CTSI/Files/Services/Data/REDCap/Survey-Functionality/Obtain-the-general-link-to-a-survey.pdf?la=en" width="1000px" height="1200px"></iframe>				
			</div>
			<!--Last section of content-->
			<div class="remember">
				<a id="thingstoremember">
					<h2>Things to Remember</h2>
				</a>
				<hr>
				<ol>
					<li>
					<li>
					<li>
					<li>
				</ol>
			</div>
			<!--Javascript-->
			<script src="../script.js"></script>
		</div>
	</body>
	<footer></footer>
</html>