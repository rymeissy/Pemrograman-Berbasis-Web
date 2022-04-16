<!DOCTYPE html>
<html>
<body>

<?php
	echo "Terima kasih, <b>". $_POST["nama"]."</b><br>";
	echo "Email anda adalah: ". $_POST["email"]."<br>";
	echo "Situs web anda adalah ".$_POST["website"]."<br>";
	echo "Komen ".$_POST["komen"]."<br>";
	echo "Anda ".$_POST["gender"];
?>

</body>
</html>	