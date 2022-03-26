<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$jmbg=$_POST['jmbg'];
	$odjeljenje=$_POST['odjeljenje'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	
	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password, jmbg, odjeljenje)
					VALUES ('$username', '$email', '$password', '$jmbg', '$odjeljenje')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registracija je uspjesno obavljena!')</script>";
				$username = "";
				$email = "";
				$jmbg="";
				$odjeljenje="";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Oops! Nesto nije uredu!')</script>";
			}
		} else {
			echo "<script>alert('Ooops! Taj Email vec postoji!')</script>";
		}
		
	} else {
		echo "<script>alert('Passwordi se ne podudaraju!')</script>";
	}
	
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Registracija - Pametni Ulaz</title>
</head>
<body style="background-image: url(skola.jpg);">
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Registracija</p>
			<div class="input-group">
				<input type="text" placeholder="Korisničko ime" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="JMBG" name="jmbg" value="<?php echo $jmbg; ?>" required>
			</div>
			<div class="input-group">
				<center>
					<label for="odjeljenje">Izaberi odjeljenje</label>
         	 		<br>
          			<select name="odjeljenje" id="odjeljenjeDropdown" required>
						<option></option>
            			<option value="IV-1">IV-1</option>
            			<option value="IV-2">IV-2</option>
            			<option value="IV-3">IV-3</option>
           				<option value="IV-4">IV-4</option>
						<option value="IV-5">IV-5</option>
						<option value="IV-6">IV-6</option>

          			</select>
				</center>  
			</div>
			<br>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Potvrdite Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Registruj</button>
			</div>
			<p class="login-register-text">Imate već akaunt? <a href="index.php">Prijavite se ovdje</a>.</p>
		</form>
	</div>
</body>
</html>