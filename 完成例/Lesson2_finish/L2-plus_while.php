<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>While文</title>
</head>
<body>
<?php
// 無限ループを作成（条件：true）
while(true){
	// 乱数を発生させる（1～10）
	$random = rand(1,10);
	// 発生した乱数を表示する
	echo '乱数「'.$random.'」です<br>';	
	// 発生した乱数が「1」だったら
	// 「処理を終了します」と表示し、ループを抜ける
	// ループを抜ける文は「break;」
	if($random === 1){
		echo '処理を終了します';
		break;
	}
}
?>
	
</body>
</html>