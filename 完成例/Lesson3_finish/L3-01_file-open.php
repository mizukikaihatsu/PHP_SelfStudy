<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CSVファイルの読み込み</title>
</head>

<body>
	<h1>CSVファイルから読み込んで出力する</h1>
	<h2>1.CSVファイルからデータを読み込む</h2>
	<?php
	$fp = fopen('03/bookdata.csv', 'r');
	if ($fp === false) {
		echo 'ファイルのオープンに失敗しました';
		exit;
	}
	?>
	<h2>2.データを1件ずつ取り出す</h2>
	<h2>3.読み込んだデータから書籍名と著者名を抜き出す</h2>
	<h2>4.抜き出した書籍名と著者名を表示する</h2>
	<h2>5.データがなくなるまで繰り返す</h2>
	<?php
	while($row = fgetcsv($fp)){
		echo '書籍名：'.$row[0].'<br>';
		echo '著者名：'.$row[4].'<br><br>';
	}
	?>


</body>

</html>