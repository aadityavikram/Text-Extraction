<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Translate</title>
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
	<script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
	<link rel="shortcut icon" href="o.ico" type="image/x-icon">
    <link rel="icon" href="o.ico" type="image/x-icon">
</head>
<body id="top">
	<section id='translate' class="s-translate">
		<div align="center" style="margin-top:20%;">
			<?php
				$myfilename = "ocr/6.txt";
				if(file_exists($myfilename)){
					echo file_get_contents($myfilename);
				}
			?>
			<div id="google_translate_element" style="margin-bottom:150px;"></div>
			<script type="text/javascript">
				function googleTranslateElementInit() {
					new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
				}
			</script>
			<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		</div>
    </section>
</body>
</html>