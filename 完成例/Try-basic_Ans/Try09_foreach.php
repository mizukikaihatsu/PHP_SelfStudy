<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try09_foreach.php</title>
</head>

<body>
    <h1>配列「$shiritori」を作成して内容を全て表示させる</h1>

    <?php
    //配列「$shiritori」を宣言して初期化 
    $shiritori = ['りんご', 'ゴリラ', 'ラッパ', 'パンダ', 'ダイヤモンド', 'ドリル', 'ルビー', '石焼き芋'];

    //配列「$shiritori」の要素を全て表示(foreach文) 
    foreach ($shiritori as $value) {
        echo '「' . $value . '」';
    }

    ?>
</body>

</html>