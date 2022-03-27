<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>IV-4 Raspored časova</title>
</head>
<body>
    <center>
        <br>
        <h1>IV-4 raspored časova</h1>
        
        <table>
            <tr>
              <th>Ponedjeljak</th>
              <th>Utorak</th>
              <th>Srijeda</th>
              <th>Četvrtak</th>
              <th>Petak</th>
            </tr>
            
            <tr>
              <td>SI</td>
              <td>DSD</td>
              <td>WEB PROGRAMIRANJE/RMA</td>
              <td></td>
              <td></td>  
            </tr>

            <tr>
                <td>SI</td>
                <td>DSD</td>
                <td>WEB PROGRAMIRANJE/RMA</td>
                <td>FILOZOFIJA</td>
                <td>FILOZOFIJA</td>  
            </tr>

            <tr>
                <td>SI</td>
                <td>ODJELJENSKA</td>
                <td>WEB PROGRAMIRANJE/RMA</td>
                <td>BOSANSKI JEZIK</td>
                <td>MATEMATIKA</td>  
            </tr>

            <tr>
                <td>MATEMATIKA</td>
                <td>ENGLESKI JEZIK</td>
                <td>WEB PROGRAMIRANJE/RMA</td>
                <td>BOSANSKI JEZIK</td>
                <td>ENGLESKI JEZIK</td>  
            </tr>

            <tr>
                <td>MATEMATIKA</td>
                <td>SPORT</td>
                <td>ENGLESKI JEZIK</td>
                <td>SI</td>
                <td>LATINSKI JEZIK</td>  
            </tr>

            <tr>
                <td>SPORT</td>
                <td>NJEMACKI JEZIK</td>
                <td>FILOZOFIJA</td>
                <td>SI</td>
                <td>VJERONAUKA</td>  
            </tr>

            <tr>
                <td>NJEMACKI JEZIK</td>
                <td></td>
                <td></td>
                <td></td>
                <td>BOSANSKI JEZIK</td>  
            </tr>
          </table>    


    
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