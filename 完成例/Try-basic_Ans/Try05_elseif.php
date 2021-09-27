<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try05_elseif.php</title>
</head>

<body>
    <h1>今日の運勢（if文を使用して表示してみましょう）</h1>
    <?php
    //変数「$num」を「乱数」で初期化する
    $num = rand(1, 10);
    //乱数の値を表示する
    echo '<h2>乱数で発生した値は「 ' . $num . ' 」です。</h2>';
    // もし「$num」が70以上だったら
    if ($num >= 70) {
        // 「今日の運勢は大吉です！」と表示する
        echo '<p>今日の運勢は大吉です！</p>';
        // もし「$num」が50以上だったら
    } elseif ($num >= 50) {
        //「今日の運勢は中吉です★」と表示する
        echo '<p>今日の運勢は中吉です★</p>';
        // もし「$num」が20以上だったら
    } elseif ($num >= 20) {
        //「今日の運勢は小吉です○」と表示する
        echo '<p>今日の運勢は小吉です○</p>';
        // もし「$num」が5以上だったら
    } elseif ($num >= 5) {
        //「今日の運勢は残念です(>_<)」と表示する
        echo '<p>今日の運勢は残念です(>_<)</p>';
        // 「$num」が上記以外だったら
    } else {
        //「今日はありえないことが起こるかも…」と表示する
        echo '<p>今日はありえないことが起こるかも…</p>';
    }
    echo '<p>素敵な1日を！</p>';
    ?>
</body>

</html>