<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try08_array.php</title>
</head>

<body>
    <h1>配列「omikuji」を作成してランダムに結果を表示させる</h1>

    <?php
    /* 配列「$omikuji」を宣言して初期化 */
    $omikuji = ['大吉', '中吉', '小吉', '凶', 'ぴょん吉'];

    // $omikuji2[]='大吉';
    // $omikuji2[]='中吉';
    // $omikuji2[]='小吉';
    // $omikuji2[]='凶';
    // $omikuji2[]='ぴょん吉';

    // $omikuji3=[
    //     0=>'大吉',
    //     1=>'中吉',
    //     2=>'小吉',
    //     3=>'凶',
    //     4=>'ぴょん吉',
    // ];

    //変数「$num」を「乱数（1～4）」で初期化する
    $num = rand(0, 4);

    /* 配列「$omikuji」の「$num」番目の要素を表示 */
    echo '今日のおみくじは「' . $omikuji[$num] . '」です。';

    echo '<p>またきてね！</p>';
    ?>
</body>

</html>