<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try01_calcu.php</title>
</head>

<body>
    <h1>計算式と計算結果を表示する １</h1>
    <!-- phpコードの開始 -->
    <?php
    //変数を２つ宣言し、表示結果を参考に値を代入する
    $num1 = 5;
    $num2 = 10;

    //変数を新たに宣言し、2つの変数を合計して代入する
    // $num3 = $num1 + $num2 ;

    //表示結果を参考に、変数を利用した出力文を記述する
    // echo $num1 .'+'.$num2.'='.$num3.'です。';
    echo $num1 . '+' . $num2 . '=' . ($num1 + $num2) . 'です。'; 
    //PHPの終了タグを記述する
    ?>
</body>

</html>