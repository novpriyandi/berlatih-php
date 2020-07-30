<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Papan Catur</title>
</head>

<body>
	<h1>Papan Catur</h1>
	<?php

	function papan_catur($angka) {
// tulis kode di sini
		if ($i = 1; $i =< $angka; $i++) {
			return $angka + 1;
		}

		while (papan_catur($angka)==false) {
			$angka++;
		}

		return $angka;
}

// TEST CASES
echo papan_catur(4) ."<br>";
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8) ."<br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
 */

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

	?>

</body>
</html>