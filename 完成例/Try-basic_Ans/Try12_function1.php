<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try12_function1.php</title>
</head>

<body>
    <h1>ランダムに結果を表示させる関数「omikuji()」を定義して呼び出す</h1>
    <?php
    /* 関数を定義する */
    function omikuji()
    {
        /* 変数「$num」を「乱数（0～4）」で初期化する */
        $num = rand(0, 4);

        /* 配列「$luky」を宣言して「大吉」「中吉」「小吉」「凶」「ぴょん吉」で初期化 */
        $luky = ['大吉', '中吉', '小吉', '凶', 'ぴょん吉'];

        /* 配列「$luky」のランダムに発生させた要番号「num」番目の内容を表示する */
        echo '今日のおみくじは「' . $luky[$num] . '」です。<br>';
    }

    /* 関数を呼び出す */
    omikuji();

    echo '<p>またきてね！</p>';
    ?>
</body>

</html>