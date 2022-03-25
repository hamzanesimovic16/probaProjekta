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
    <title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>


    <form method="POST">
				
	    <button type="submit" name="qrkod">Tvoj QR kod</button>

	</form>
		
		<div class="col-sm-3">
			<?php
				if(isset($_POST['qrkod'])){
					header("Location: qrkodGenerator.php");
				}
			?>
		</div>
	
</body>
</html>