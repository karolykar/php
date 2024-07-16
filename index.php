

<!DOCTYPE html>

    <html>

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP 1</title>
		
        <link rel="stylesheet" href="css/norm.css" />
		
		<link rel="stylesheet" href="css/uikit.min.css" />

        <script src="js/uikit.min.js"></script>
        
        <script src="js/uikit-icons.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="css/stiluslap.css">
		
		

    </head>

    <body>
		
		<section class="kk-container">
		
	<?php 

	include "inc/osztaly.inc.php";

	$luca=new Lany("Lili",13,"Dodó");

	//echo var_dump($luca);
	?>
			<p><?php $luca->bemutatkozik(); ?></p>
			
			<p><?php echo Gyerek::ihate($luca);?></p>
			
			<p><?php echo $luca->ihate($luca);?></p>
	
			<p>A korhatár: <?php echo Gyerek::$korhatar; ?> év.</p>
	
			<p>A Pí: <?php echo Gyerek::PI; ?>.</p>
			
	
		<?php var_dump($luca); ?>
		
		<?php echo($luca->getKor()>14?"Nagy":"Kicsi"); ?>
		
		</section>

        
		<script src="js/jquery-3.2.0.min.js"></script>
		<script src="js/lap.js"></script>

    </body>

    </html>

