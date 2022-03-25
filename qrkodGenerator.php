<?php 
include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRkodGenerator</title>
</head>
<body>
    
    <center>    
        <h1>Tvoj QR kod</h1>
        <br>
	
		<div class="col-sm-3">
			<?php
				
                    $sql="SELECT jmbg FROM users;";
                    $result=mysqli_query($conn, $sql);
                    $resultCheck=mysqli_num_rows($result);
                    $row=mysqli_fetch_assoc($result);

					$code=$row['jmbg'];
					echo "
						<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$code&choe=UTF-8'>
					";
				
			?>
		</div>
    

        <form method="POST">
                    
            <button type="submit" name="vratiNazad">Vrati se na početnu stranicu</button>
                    
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






