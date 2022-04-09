<!DOCTYPE html>
<html>
<body>

	<?php 
		function prima ($bilangan) {
			if ($bilangan == 1) {
				return false;
			}
			if ($bilangan == 2) {
				return true;
			}
			$y = sqrt ($bilangan);
			$y = floor ($y);

			for ($x = 2; $x <= $y; ++$x) {
				if ($bilangan % $x == 0) {
					break;
				}
			}

			if ($y == $x-1) {
				return true;
			}
			else {
				return false;
			}
		}

		function periksaPrima ($f, $g) {
			$jumlah = 0;
			for ($x = $f; $x <= $g; $x++) {
				if (prima($x)) {
					echo $x.', ';
					$jumlah++;
				}
			}
			echo "<br>jumlah bilangan prima adalah ".$jumlah."<br>";
		}
		periksaPrima(0, 100);
	?>

</body>
</html>