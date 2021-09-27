<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ユーザー定義の関数</title>
</head>

<body>
	<h1>関数を定義して呼び出す</h1>
	<h2>戻り値のない関数</h2>
	<?php
	// 関数taxA()の定義
	function taxA($price):void{
		echo $price * 1.1;
	}
	// taxA関数を呼び出す
	taxA(1000);
	?>

	<h2>戻り値のある関数</h2>
	<?php
	// 関数taxB()の定義
	function taxB(int $price):int{
		return $price * 1.1;
	}
	// taxB関数を呼び出す
	$kakaku=1000;
	$price = taxB($kakaku);
	echo $kakaku.'円の税込み価格は'.$price.'円です';
	?>
</body>

</html>