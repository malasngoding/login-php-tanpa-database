<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Membuat Form Login Tanpa Database Deng</title>
</head>
<body>

	<h1>Selamat Datang di <a href="https://www.malasngoding.com">MalasNgoding.com</a></h1>
	<h2>Silahkan Login</h2>

	<?php 
	// memeriksa apakah ada parameter pesan pada url
	if(isset($_GET['pesan'])){

		// jika ada,
		// periksa apakah isi parameter pesan adalah "gagal"
		if($_GET['pesan'] == "gagal"){
			echo "<b>Maaf, Username dan password salah! </b> <br><br>";
		
		// periksa apakah isi parameter pesan adalah "logout"
		}else if($_GET['pesan'] == "logout"){
			echo "<b>Terima kasih, Anda telah logout! </b> <br><br>";
		
		// periksa apakah isi parameter pesan adalah "login_dulu"
		}else if($_GET['pesan'] == "login_dulu"){
			echo "<b>Silahkan login untuk masuk ke dashboard! </b> <br><br>";
		}

	}
	?>

	<!-- form login sederhana menggunakan method POST dan form akan diproses pada file periksa_login.php -->
	<form action="periksa_login.php" method="POST">
		<label>Username</label>
		<input type="text" name="username" required="required">

		<br><br>

		<label>Password</label>
		<input type="password" name="password" required="required">

		<br><br>

		<input type="submit" name="submit" value="LOGIN">
	</form>

</body>
</html>