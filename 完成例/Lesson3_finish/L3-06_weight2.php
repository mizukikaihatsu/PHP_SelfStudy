<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>適正体重を判定2</title>
</head>

<body>
	<h1>適正体重を判定しました2</h1>
	<?php
	require_once 'functions.php';

	$height = (float)$_POST['height'];
	$weight = (float)$_POST['weight'];

	// （0より大きいかつ3未満）でない場合、
	// 「身長を正しく入力してください」と表示して
	// 強制終了
	if (!(0 < $height && $height < 3)) {
		echo '身長を正しく入力してください';
		exit;
	}
	// 体重が30kg未満または200kg以上の場合
	// 「体重を正しく入力してください」と表示
	// 強制終了
	if ($weight < 30 || 200 < $weight) {
		echo '体重を正しく入力してください';
		exit;
	}

	$goal_weight = $height ** 2 * 22;
	$difference = abs($goal_weight - $weight);

	echo '体重' . str2html($weight) . 'kg<br>';
	echo '理想体重' . str2html($goal_weight) . 'kg<br>';
	echo 'あと' . str2html($difference) . 'kgで適正体重です<br>';

	?>

</body>

</html>