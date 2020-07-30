<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skor Terbesar</title>
</head>

<body>
	<h1>Skor Terbesar</h1>
	<?php

	function skor_terbesar($arr){
//kode di sini
	}

// TEST CASES
	$skor = [
	  [
	    "nama" => "Bobby",
	    "kelas" => "Laravel",
	    "nilai" => 78
	  ],
	  [
	    "nama" => "Regi",
	    "kelas" => "React Native",
	    "nilai" => 86
	  ],
	  [
	    "nama" => "Aghnat",
	    "kelas" => "Laravel",
	    "nilai" => 90
	  ],
	  [
	    "nama" => "Indra",
	    "kelas" => "React JS",
	    "nilai" => 85
	  ],
	  [
	    "nama" => "Yoga",
	    "kelas" => "React Native",
	    "nilai" => 77
	  ],
	];

	print_r(skor_terbesar($skor));

	?>

</body>
</html>