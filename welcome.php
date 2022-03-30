<?php 
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style2.css">
    <title>Welcome</title>
	
	
</head>
<body class="pozadina">
	<ul>

		<li class="pametniUlaz">Pametni ulaz</li>
		<li style="float:right"><a class="active" href="logout.php">Logout</a></li>
		<li style="float:right"><a href=""><?php echo $_SESSION['username'] ?></a></li>
  
	</ul>
	
    
   

	<br><br>
	<div id="dugmadiOpcije" class="dugmediv">
		<form method="POST">
					
			<center>  <button type="submit" name="qrkod" class="dugme">Tvoj QR kod</button> </center>

		</form>
		<br>
		<form method="POST">
					
			<center>  <button type="submit" name="raspored" class="dugme">Tvoj raspored</button> </center>

		</form>
	</div>
	
	<div>
		<?php
			if(isset($_POST['qrkod'])){
				header("Location: qrkodGenerator.php");
			}
			
			if(isset($_POST['raspored']))
			{
				switch($_SESSION['odjeljenje'])
				{
					case "IV-4":
						header("Location: IV-4 raspored.php");
					break;

					case "IV-3":
						header("Location: IV-3 raspored.php");
					break;
					
					
				}
			}
		?>
	</div>
	
</body>
</html>