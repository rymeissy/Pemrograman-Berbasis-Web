<!DOCTYPE html>
<html>
<body>

<?php
	if (isset($_POST["submit"])) {
		$nama= $_POST["nama"];
		$email= $_POST["email"];
		$website= $_POST["website"];
		$komen= $_POST["komen"];
		//$gender= $_POST["gender"];
	}
	else {
		die ("Maaf, Anda tidak dapat mengakses halaman ini!");
	}
	if (!empty($nama)) {
		echo "Terima kasih, <b>". $name."</b><br>";
	}
	else {
		echo("Nama diperlukan <br>");
	}
	if (!empty($email)) {
		echo "Email anda adalah: ".$email."<br>";
	}
	else {
		echo("email diperlukan <br>");
	}
	if (!empty($website)) {
		echo "Website anda adalah: ".$website."<br>";
	}
	else {
		echo "Website anda adalah: tidak ada <br>";
	}
	if (!empty($komen)) {
		echo "Komen anda: ".$komen."<br>";
	}
	else {
		echo "Komen anda: tidak ada <br>";
	}
	if (isset($_POST["gender"])) {
		$gender = $_POST["gender"];
	}
	if (!empty($gender)) {
		echo "Anda: ".$gender."<br>";
	}
	else {
		echo("Jenis kelamin diperlukan");
	}
?>

</body>
</html>	