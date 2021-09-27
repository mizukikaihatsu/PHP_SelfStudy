<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try14_function3.php</title>
</head>

<body>
    <h1>ランダムな数値を引数にして結果を返す関数「omikuji( num )」を定義し、<br>関数を呼び出して表示する </h1>
    <?php
    /* 関数を定義する */
    function omikuji(int $num): string{
        /* 配列「$luky」を宣言して「大吉」「中吉」「小吉」「凶」「ぴょん吉」で初期化 */
        $lucky = ['大吉', '中吉', '小吉', '凶', 'ぴょん吉'];

        /* 配列「$luky[$num]」の値を返す */
        return $lucky[$num];
    }

    /* 変数「num」を「乱数（0～4）」で初期化する */
    $number = rand(0, 4);

    /* 変数「fortune」を宣言して関数「omikuji($number)」で初期化 */
    $fortune = omikuji($number);

    /* 変数「fortune」を利用して結果を表示する */
    echo '今日のおみくじは「' . $fortune . '」です。';

    echo '<p>またきてね！</p>';
    ?>
</body>

</html>