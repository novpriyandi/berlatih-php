<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palindrome Angka</title>
</head>

<body>
	<h1>Palindrome Angka</h1>
	<?php

	function palindrome ($str){
		$output =false;
		if (strrev($str)==$str) {
			$output = true;
		}
		return $output;
	}
	function palindrome_angka($angka) {
  // tulis kode di sini
		if ($angka >= 1 && $angka <= 8) {
			return $angka + 1;
		}

		while (palindrome($angka)==false) {
			$angka++;
		}

		return $angka;
	}

		// TEST CASES
		echo palindrome_angka(8); // 9
		echo "<br>" . palindrome_angka(10); // 11
		echo "<br>" . palindrome_angka(117); // 121
		echo "<br>" . palindrome_angka(175); // 181
		echo "<br>" . palindrome_angka(1000); // 1001

	?>

</body>
</html>