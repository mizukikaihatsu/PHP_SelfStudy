<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>includeとrequire</title>
</head>

<body>
<?php
	require_once 'data.php';
	// include_once 'data.php';
	?>
<h2>2重ループで表示</h2>
<?php
	foreach ($people as $key => $person) {
		foreach ($person as $person_key => $value) {
			echo '個人のキーは「'.$person_key.'」、値は「'.$value.'」です<br>';
		}
		echo '<br>';
	}

?>
<h2>要素キーを指定して表示</h2>
<?php
	foreach ($people as $person) {
		echo '名前は「'.$person['name'].'」、血液型は「'.$person['blood'].'型」です<br>';
	}
?>
</pre>
</body>

</html>