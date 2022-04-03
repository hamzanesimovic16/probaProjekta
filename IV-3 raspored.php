<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style2.css">
        <title>IV-3 raspored</title>
    </head>
    <body class="pozadina">

    <ul>

        <li><img src="https://i.ibb.co/9ySnS99/Artboard-1.png" id="logo"></li>
        <li class="pametniUlaz">IV-3 raspored</li>
        <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
        <li style="float:right"><a href=""><?php echo $_SESSION['username'] ?></a></li>

    </ul>
    <center>

        <h1 style="color: white;">IV-3 raspored izrada u toku...</h1>


        <br><br>
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