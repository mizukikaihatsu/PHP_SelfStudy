<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>変数</title>
</head>

<body>
	<h1>変数を宣言して代入・表示する</h1>
	<?php
	$greeteing = 'こんにちは';
	echo $greeteing;
	?>
	<h2>変数$greetingに文字列を再度代入</h2>
	<?php
	$greeteing = '<p>こんばんはははははは！</p>';
	echo $greeteing;
	var_dump($greeteing);
	?>

	<h2>変数$greetingに数値を再度代入</h2>
	<?php
	$greeteing = 175.25;
	echo $greeteing;
	var_dump($greeteing);
	?>
</body>

</html>