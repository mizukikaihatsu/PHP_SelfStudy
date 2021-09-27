<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>配列2</title>
</head>

<body>
	<h1>いろいろな配列の定義</h1>
	<h2>変数名に続けてキーを指定する</h2>
	<?php
	// $people[0] = '佐藤';
	// $people[1] = '鈴木';
	// $people[2] = '高橋';

	$people=['小林','田中','進藤','林'];

	foreach ($people as $key => $value) {
		echo $key . '==>' . $value . '<br>';
	}
	?>


</body>

</html>