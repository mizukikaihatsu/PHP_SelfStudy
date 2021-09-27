<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try02_triangle.php</title>
</head>

<body>
    <h1>計算式と計算結果を表示する 2</h1>
    <?php
    // 底辺を表す変数と、高さを表す変数を定義して、出力結果を元に初期化する
    $width = 5;
    $height = 11;
    // 三角形の面積を代入する変数を定義し、「底辺×高さ÷2」を代入する
    // $triangle = $width * $height / 2;
    // //「底辺5cm、高さ11cmの三角形の面積は27.5平方センチメートルです。」と表示する'
    // echo '<p>底辺' . $width . 'cm、高さ' . $height . 'cmの三角形の面積は、' . $triangle . '平方センチメートルです。</p>';

    /* 「底辺5cm、高さ11cmの三角形の面積は27.5平方センチメートルです。」と表示する' ); */
    echo '<p>底辺' . $width . 'cm、高さ' . $height . 'cmの三角形の面積は、' 
    . ($width * $height) / 2 . '平方センチメートルです。</p>' ;


    ?>
</body>

</html>