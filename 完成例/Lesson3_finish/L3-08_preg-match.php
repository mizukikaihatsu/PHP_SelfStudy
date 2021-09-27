<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>正規表現</title>
</head>

<body>
	<h1>preg_match()関数</h1>
	<h2>「〒101-0051 東京都千代田区神田神保町1-105」</h2>
	<?php
	$str = '〒101-0051 東京都千代田区神田神保町1-105';
	preg_match('/\d{3}-\d{4}/u', $str, $match);
	var_dump($match);
	?>
	<h2>「1234567」を調べる</h2>
	<?php
	$str = '1234567';
	$rtn = preg_match('/\d{7}/u', $str, $match);
	echo '結果1:';
	var_dump($rtn);
	?>
	<h2>「あいうえおかき」を調べる</h2>
	<?php
	$str = 'あいうえおかき';
	$rtn = preg_match('/\d{7}/u', $str, $match);
	echo '結果2:';
	var_dump($rtn);
	?>
	<h2>「111-1111」を調べる</h2>
	<?php
	$str = '111-1111';
	$rtn = preg_match('/\d{7}/u', $str, $match);
	echo '結果3:';
	var_dump($rtn);
	?>
	<h2>「12345678」を調べる</h2>
	<?php
	$str = '12345678';
	$rtn = preg_match('/\d{7}/u', $str, $match);
	echo '結果4:';
	var_dump($rtn);
	?>

	<h2>「1234567あ」を調べる</h2>
	<?php
	$str = '1234567あ';
	$rtn = preg_match('/\d{7}/u', $str, $match);
	echo '結果5:';
	var_dump($rtn);
	?>

	<h2>「111-1234567」を調べる</h2>
	<?php
	$str = '111-1234567';
	$rtn = preg_match('/\d{7}/u', $str, $match);
	echo '結果6:';
	var_dump($rtn);
	?>
</body>

</html>