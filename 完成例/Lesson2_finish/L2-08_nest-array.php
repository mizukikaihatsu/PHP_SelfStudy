<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>２次元配列</title>
</head>

<body>
	<h1>配列の中に配列を格納する2次元配列</h1>
	<?php
	$people[] = ['name' => '佐藤健', 'blood' => 'B'];
	$people[] = ['name' => '田中麗奈', 'blood' => 'A'];
	$people[] = ['name' => '加藤茶', 'blood' => 'O'];

	foreach ($people as $key => $person) {
		echo '配列$peopleのキーは「' . $key . '」、<br>';
		foreach ($person as $person_key => $value) {
			echo '　個人のキーは「'.$person_key.'」、値は「'.$value.'」です<br>';
		}
		echo '<br>';
	}
	?>

	<h2>キーを指定して値を取り出す</h2>
	<?php
	foreach ($people as $key => $person) {
		echo '　個人名は「'.$person['name'].'」です<br>';
	}
	?>

</body>

</html>