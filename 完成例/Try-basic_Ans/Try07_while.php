<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Try07_while.php</title>
</head>

<body>
	<h1>while文で１～1000までの整数を足し算する</h1>
	<h2>whileループを開始します</h2>

	<?php
	//答え「$ans」を0で初期化
	//カウンタ「$i」を1で初期化（1～1000を足すので）
	$ans = 0;
	$i = 1;

	//カウンタが「1000」を超えたら終了
	while ($i <= 1000) {
		// 合計の変数にカウンタの数値を足して代入しなおす
		$ans = $ans + $i;	//$ans += $i 
		// カウントアップする
		$i++;	// 「$i += 1」「$i = $i + 1」と同じ
	}

	//合計を表示する
	echo '答えは' . $ans . 'です。<br>'; 
	//ループ終了時の「$i」の値を表示する
	echo 'ループ終了時の「i」は' . $i . 'です。';


	echo '<p>処理が終了しました！</p>';

	?>
</body>

</html>