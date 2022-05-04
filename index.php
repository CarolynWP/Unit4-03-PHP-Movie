<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" />

		<!-- Madrone Tree Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./favicon/site.webmanifest" />
		
		<!-- title -->
    <title>Movies and your Age</title>
	</head>
	
	<!-- Body -->
	<body>
		<div class="margin">
<?php echo "<h1>What Movies Can You Watch?</h1>" ?>

		<!-- input box for your age -->
		<h3>
			<?php echo '<h2>What maturity levels of movies (R, PG-13, PG, and G) are you allowed to watch alone?</h2>' ?>
			<form method = "post">
				<?php echo '<p>Input your age:</p>' ?><input type="number" name="age" min="0" step="1" max="120">  
				<br>
				<br>
	
				<!-- button to sumbit your answer -->
				<input type = "submit" name = "submit" value="Enter">  

				<!-- calculation -->
				<?php   
if(isset($_POST["submit"]))  
{   
	// variable
	$age= $_POST["age"]; 
	
	// if statement for if you are 18 or over
	if ($age >= 18) {
		echo '<h4>You can watch an R-rated movie alone!</h4>'; 

}
	
	// if statement for if you are 13 or over
	else if ($age >= 13){
		echo '<h4>You can watch a PG-13 movie alone!</h4';
	}

	// if statement for if you are 7 or older
	else if ($age >= 7){
		echo '<h4>You can watch a PG or G-rated movie alone!</h4>';
	}
		// else statement
	else {
	echo '<h4>You are too young to see a movie alone.</h4>';
}
}   
	?>
	<br>
		</div>
	</body>
</html>