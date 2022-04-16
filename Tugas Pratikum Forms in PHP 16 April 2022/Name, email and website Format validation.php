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
		if (!preg_match("/^[a-zA-z \-\.\']*$/",$nama)) {
			echo "Email anda salah!
			Hanya huruf dengan spasi, dot (.), dan dash (-) yang diperbolehkan <br>";
		}
		else {
			$nama = test_input ($nama);
			echo "Terima kasih, <b>". $name."</b><br>";
		}
	}
	else {
		echo("Nama diperlukan <br>");
	}
	if (!empty($email)) {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "Format email salah! <br>";
		}
		else {
			$email = test_input ($email);
			echo "Email anda adalah: ".$email."<br>";
		}
	}
	else {
		echo("email diperlukan <br>");
	}
	if (!empty($website)) {
		if (!preg_match("/\b(?: (?:https?|ftp) :\/\/|www\.) [-a-z0-9+&@#\/%?=~_|!:,.;}*[-a-z0-9+&@#\/%?=~_|]/i",$website)) {
			echo "URL salah<br>";
		}
		else {
			$website = test_input ($website);
			echo "Website anda adalah: ".$website."<br>";
		}
	}
	else {
		echo "Website anda adalah: tidak ada <br>";
	}
	if (!empty($komen)) {
		$komen = test_input ($komen);
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
	//fungsi trim dan strpslashes
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		return $data;
	}
?>

</body>
</html>	