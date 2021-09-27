<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Try03_if.php</title>
</head>

<body>
    <h1>今日の運勢（if文を使用して表示してみましょう）</h1>
    <?php
    // 乱数を発生させて変数に入れる
    $random = rand(1, 10);
    // 「乱数で発生した値は「〇」です。」と表示
    echo '<h2>乱数で発生した値は「 ' . $random . ' 」です。</h2>';
    // 発生した乱数が5以上だったら「今日はいいことがあるかも♪」と表示
    if ($random >= 5){
        echo '<p>今日はいいことがあるかも♪</p>';
    }

        echo '<p>素敵な1日を！</p>';
    ?>
</body>

</html>