<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try04_if-else.php</title>
</head>

<body>
    <h1>今日の運勢（if文を使用して表示してみましょう）</h1>
    <?php
	//変数「$num」を「乱数」で初期化する
    $num = rand(1, 10);
	//乱数の値を表示する
    echo '<h2>乱数で発生した値は「 ' . $num . ' 」です。</h2>';

	// もし「$num」が5以上だったら
    if ($num >= 5) { 
        //「今日はいいことがあるかも♪」と表示する
        echo '<p>今日はいいことがあるかも♪</p>';     
    }else{
    //「今日はビックリすることが起こるかも？」と表示する
        echo '<p>今日はビックリすることが起こるかも？</p>'; 
    }
	
    echo '<p>素敵な1日を！</p>';

    ?>
</body>

</html>