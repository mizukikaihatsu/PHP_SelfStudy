<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>文字列演算子</title>
</head>

<body>
	<h1>文字列を連結する</h1>
	<h2>基本の文字列連結</h2>
	<?php
	echo '文字列1' . '文字列2';
	?>

	<h2>文字列の入った変数の連結</h2>
	<?php
	$strA = '文字列1';
	$strB = '文字列2';
	echo $strA . $strB;
	?>

	<h2>文字列を代入しながら結合する</h2>
	<?php
	$str = 'こんにちは。';
	$str .= '今日の天気は';
	$str .= '雨が降っています';
	echo $str;
	?>
</body>

</html>