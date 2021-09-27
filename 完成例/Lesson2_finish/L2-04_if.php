<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>if文</title>
</head>

<body>
	<h1>if文による条件分岐</h1>
	<h2>trueの場合だけ実行する</h2>
	<?php
	if (true) {
		echo '条件はtrueです<br>';
	}

	$condition = true;
	if ($condition) {
		echo '条件はtrueです<br>';
	}
	?>

	<h2>$numAが10以上の場合だけ表示する</h2>
	<?php
	$numA = 11;
	if ($numA >= 10) {
		echo '$numAは「' . $numA . '」で、10以上です。<br>';
	}
	?>
	<h2>型と値を比較する</h2>
	<?php
	$numA = 1;
	$numB='1';
	var_dump($numA);
	echo '<br>';
	var_dump($numB);

	// 型まで一致しているか比較
	if ($numA === $numB) {
		echo '$numAは1です。<br>';
	}
	// 一致しているか比較（型は不問）
	if ($numA == $numB) {
		echo '<p>$numAは1です。（型は不問）</p>';
	}
	?>
</body>

</html>