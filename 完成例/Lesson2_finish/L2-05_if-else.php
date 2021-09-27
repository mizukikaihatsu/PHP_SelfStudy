<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>input.htmlから呼び出されたPHP</title>
</head>

<body>
	<h1>テキストボックスの内容を利用する</h1>
	<h2>if文による判断</h2>
	<?php
	$txt = $_POST['txt'];
	if ($txt === '1') {
		echo '「1」が入力されました';
	}
	?>

	<h2>if-else文による判断</h2>
	<?php
	if ($txt === '1') {
		echo '「1」が入力されました';
	} else {
		echo '「1以外」が入力されました';
	}
	?>

	<h2>elseif文による判断分岐</h2>
	<?php
	if ($txt === '1') {
		echo '「1」が入力されました';
	} elseif ($txt === '2') {
		echo '「2」が入力されました';
	} else {
		echo '「1以外」が入力されました';
	}
	?>

	<h2>elseif文による判断分岐2</h2>
	<?php
	if ($txt >= '20') {
		echo '「20以上」が入力されました';
	} elseif ($txt >= '10') {
		echo '「10以上」が入力されました';
	} else {
		echo '「10未満」が入力されました';
	}
	?>
</body>

</html>