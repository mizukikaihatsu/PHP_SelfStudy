<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try13_function2.php</title>
</head>

<body>
    <h1>ランダムな結果を返す関数「omikuji()」を定義して結果を呼び出し元に返してから表示する </h1>
    <?php
    /* 関数を定義する */
    function omikuji(): string
    {
        /* 変数「$num」を「乱数（0～4）」で初期化する */
        $num = rand(0, 4);

        /* 配列「$luky」を宣言して「大吉」「中吉」「小吉」「凶」「ぴょん吉」で初期化 */
        $lucky = ['大吉', '中吉', '小吉', '凶', 'ぴょん吉'];

        /* 配列「$luky[$num]」を返す */
        return $lucky[$num];
    }

    /* 関数を呼び出して結果を変数「$fortune」に格納する */
    $fortune = omikuji();

    /* 関数の処理結果を表示する */
    echo '今日のおみくじは「' . $fortune . '」です。';

    echo '<p>またきてね！</p>';
    ?>
</body>

</html>