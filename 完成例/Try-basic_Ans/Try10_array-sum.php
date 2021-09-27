<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try10_array-sum.php</title>
</head>

<body>
    <h1>ランダムな数値を発生させfor文で表示、<br>値を合計して表示する。</h1>
    <h2>0～100のランダムな数値を発生させ、<br>要素数１０の配列「math」に代入してfor文で表示する。</h2>

    <?php
    // 配列「math」を宣言する 
    $math = [];

    //配列「$math」を「0～100の乱数」で発生させた値で配列の10の要素数で初期化する
    for ($i = 0; $i < 10; $i++) {
        $math[$i] = rand(0, 100);
    }
    // 配列「$math」の内容を表示する(foreach) */
    foreach ($math as $value) {
        $i = 1;
        echo '配列「$math」の' . $i . 'つ目の値は「' . $value . '」です。<br>';
        $i++;
    }

    ?>

    <h2>合計「$sum」を宣言し、<br>for文で合計して結果を表示する。</h2>
    <?php

    // 合計「$sum」を宣言する
    $sum = 0;

    // 「$sum」に「$math」の各値を加算して代入する（foreach）
    foreach ($math as $value) {
        $sum += $value;     //$sum = $sum + $value
    }

    // 「配列「■■」の要素の値の合計は「〇〇」です。」と表示する
    echo '配列「$math」の要素の値の合計は「'.$sum.'」です。';

    ?>
</body>

</html>