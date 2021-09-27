<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>レスポンスページ</title>
</head>

<body>
	<h1>タグを無効化する関数</h1>
	<?php
	echo htmlspecialchars($_POST['txt'], ENT_QUOTES, 'UTF-8');
	?>

</body>

</html>