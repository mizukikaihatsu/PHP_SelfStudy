<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ch05_Try04.php</title>
</head>

<body>
    <h1>ランダムな数値2つを引数にして結果を返す関数「omikuji(num1,num2)」を定義し、関数を呼び出して表示する </h1>

<?php
/* 結果を返す関数を定義する */
function omikuji(int $num1,int $num2): string {
    // 配列「$luky」を宣言して「大吉」「中吉」「小吉」「凶」「ぴょん吉」で初期化 */
    $lucky = ['大吉', '中吉', '小吉', '凶', 'ぴょん吉'];
    // 配列「color」を宣言して「赤」「青」「緑」「ベージュ」「黄色」「ピンク」「ゴールド」で初期化
    $color = ['赤', '青', '緑', 'ベージュ', '黄色', 'ピンク', 'ゴールド'];
    // 結果文字列「$fortune」を返す
    return '今日のおみくじは「' . $lucky[$num1] . '！ラッキーカラーは'.$color[$num2].'」です。';

}
// 変数「$number1」を「乱数（0～4）」で初期化する 
$number1 = rand(0, 4);
// 変数「$number2」を「乱数（0～6）」で初期化する 
$number2 = rand(0, 6);
// 変数「$fortuneScore」を宣言して関数「omikuji()」の戻り値を代入
$fortuneScore = omikuji($number1,$number2);
// 変数「$fortuneScore」を利用して結果を表示する 
echo $fortuneScore;
echo '<p>またきてね！</p>';
?>
</body>

</html>