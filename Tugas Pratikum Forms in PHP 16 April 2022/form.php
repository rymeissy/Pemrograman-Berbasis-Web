<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2>Formulir Mahasiswa</h2>
<form method="post" action="proses.php">
	Nama: <input type="text" name="nama">
	<br><br>
	E-mail: <input type="text" name="email">
	<br><Br>
	Website: <input type="text" name="website">
	<br><br>
	Komen: <textarea name="komen" rows="4" cols ="35"></textarea>
	<br><br>
	Gender:
	<input type="radio" name="gender" value="perempuan">Perempuan
	<input type="radio" name="gender" value="laki-laki">Laki-laki
	<input type="radio" name="gender" value="Lainnya">Lainnya
	<br><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>	
