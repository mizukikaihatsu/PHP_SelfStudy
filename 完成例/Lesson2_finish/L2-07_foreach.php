<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>foreach文で配列の要素を表示する</title>
</head>

<body>
	<h1>foreach文の利用</h1>
	<h2>配列$nameの要素を表示する</h2>
	<?php
	$name = [
		'sato' => '佐藤',
		'suzuki' => '鈴木',
		'takahashi' => '高橋'
	];
	foreach ($name as $value) {
		echo $value . ' ';
	}
	?>
	<h2>配列$nameのキーと要素を表示する</h2>
	<?php
foreach($name as $key => $value){
	echo 'キーは、「'.$key.'」名前は、「'.$value.'」です。<br>';
}

	?>

</body>

</html>