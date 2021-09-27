<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHPの組み込み関数</title>
</head>

<body>
	<h1>組み込み関数</h1>
	<h2>返り値のある関数</h2>
	<?php
	$textA = '1234565555';
	// $lengthA = strlen($textA);
	echo strlen($textA) + 100000;
	?>

	<h2>乱数を発生させる関数</h2>
	<?php
	$numA = rand();
	echo $numA;
	?>

	<h2>範囲を指定して乱数を発生させる関数</h2>
	<?php
	$numA = rand(1, 10);
	echo $numA;
	?>

	<h2>配列の値を昇順に並べ替える</h2>
	<?php
	$numB = [58, 5, 9, 44, 21, 999, 58];
	rsort($numB);

	foreach($numB as $value){
		echo $value.' ';
	}

	?>

</body>

</html>