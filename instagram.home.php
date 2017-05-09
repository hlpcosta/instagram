<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Instagram</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="ScatteredPolaroidsGallery/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="ScatteredPolaroidsGallery/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="ScatteredPolaroidsGallery/css/component.css" />
		<script src="ScatteredPolaroidsGallery/js/modernizr.min.js"></script>
<style>
</style>
</head>
 
<body>	 
<section id="photostack-3" class="photostack">
				<div>
<?php
	include "instagram.class.php";
	$y = new Instagram;
 	$y->GetImgs('cocacola_br'); ?>
				</div>
			</section>
</div>
<script src="ScatteredPolaroidsGallery/js/classie.js"></script>
		<script src="ScatteredPolaroidsGallery/js/photostack.js"></script>
		<script>
	
			new Photostack( document.getElementById( 'photostack-3' ), {
				callback : function( item ) {
				}
			} );
		</script>
</body>
