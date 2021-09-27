<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>適正体重を判定</title>
</head>

<body>
	<h1>適正体重を判定しました</h1>
	<?php
	$height = (float)$_POST['height'];
	if (0 < $height && $height < 3) {
		echo '適正体重は「' . $height ** 2 * 22 . 'kg」です。<br>';
	} else {
		echo '身長を正しく入力してください。';
	}

	// 条件：0より大きい数字の場合はtrue
	if (0 < $height) {
		// 条件：3未満の数値の場合はtrueで「適正体重を表示」
		if ($height < 3) {
			echo '■適正体重は「' . $height ** 2 * 22 . 'kg」です。<br>';
			// 3以上の場合はfalse：「身長は3より小さい値を入力してください」と表示
		} else {
			echo '<p>身長は3より小さい値を入力してください</p>';
		}
		// 0以下の場合はfalse：「身長は0より大きい値を入力してください」と表示
	} else {
		echo '<p>身長は0より大きい値を入力してください</p>';
	}

	?>

</body>

</html>