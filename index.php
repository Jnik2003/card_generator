<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.parent{
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-gap: 20px;
		}
		.visit{
			width: 400px;
			height: auto;

		}
		img{
			width: 400px;
			height: auto;
		}
	</style>
</head>
<body>

	<div class="parent">
		<?php
			include "script.php";
		?>
	</div>
	
</body>
</html>



