<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>変数と演算子</title>
</head>

<body>
	<h1>変数と演算子</h1>
	<h2>$num1 + $num2を表示</h2>
	<?php
	$num1 = 10;
	$num2 = 3;
	echo $num1 + $num2;
	?>

	<h2>$num1 - $num2を表示</h2>
	<?php
	echo $num1 - $num2;
	?>

	<h2>$num1 * $num2を表示</h2>
	<?php
	echo $num1 * $num2;
	?>

	<h2>$num1 / $num2を表示</h2>
	<?php
	$num3 = $num1 / $num2;
	echo $num3;
	?>

	<h2>$num1 % $num2を表示</h2>
	<?php
	$num3 = $num1 % $num2;
	echo $num3;
	?>

	<h2>$num1 ** $num2を表示</h2>
	<?php
	$num3 = $num1 ** $num2;
	echo $num3;
	?>
	<h2>$num1 + 1 して$num1に代入しなおして表示</h2>
	<?php
	// $num1 = $num1 + 1;
	$num1 += 1;	//複合代入演算子
	echo $num1;
	?>

	<h2>$num1 - 1 して$num1に代入しなおして表示</h2>
	<?php
	// $num1 = $num1 - 1;
	$num1 -= 1;
	echo $num1;
	?>

</body>

</html>