<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasangan Terbesar</title>
</head>

<body>
	<h1>Pasangan Terbesar</h1>
	<?php

	function pasangan_terbesar($angka){
// kode di sini
		$ab = substr($angka, 0, 2);
		for ($i=0; $i <= strlen($angka) ; $i++) { 
			$pa = substr($angka, $i, 2);
			if ($pa > $ab) {
				$ab = $pa;
			}
		}
		return $ab;
	}

// TEST CASES
	echo pasangan_terbesar(641573); // 73
	echo "<br>" . pasangan_terbesar(12783456); // 83
	echo "<br>" . pasangan_terbesar(910233); // 91
	echo "<br>" . pasangan_terbesar(71856421); // 85
	echo "<br>" . pasangan_terbesar(79918293); // 99


	?>

</body>
</html>