<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>配列1</title>
</head>

<body>
	<h1>配列を利用して名前を表示する</h1>
	<h2>配列$nameの0～2に名前を格納する</h2>
	<pre>
	<?php
	$name = [
		0 => '佐藤',
		1 => '鈴木',
		2 => '高橋'
	];
	var_dump($name);
	?>
	</pre>

	<h2>配列$nameBにキーを付けて名前を格納する</h2>
	<pre>
	<?php
	$nameB = [
		'sato' => '佐藤',
		'suzuki' => '鈴木',
		'takahashi' => '高橋'
	];
	var_dump($nameB);
	?>
	</pre>
</body>

</html>