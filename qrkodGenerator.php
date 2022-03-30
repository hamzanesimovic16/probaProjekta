<?php 
include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>QRkodGenerator</title>
</head>
<body class="pozadina">
    <ul>

        
        <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
        <li style="float:right"><a href=""><?php echo $_SESSION['username'] ?></a></li>

    </ul>    



    <center>    
    <br><br>    
    <h1>Tvoj QR kod</h1>
        <br>
	
		<div class="col-sm-3">
			<?php
				
					$code=$_SESSION['jmbg'];
					echo "
						<img  src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$code&choe=UTF-8'>
					";
				
			?>
		</div>
    

        <form method="POST">
                    
            <button type="submit" name="vratiNazad" class="dugme">Vrati se na početnu stranicu</button>
                    
        </form>
                    
        <div>
            <?php
                if(isset($_POST['vratiNazad'])){
                    header("Location: welcome.php");
                }
            ?>
        </div>
    
    </center>

</body>
</html>






