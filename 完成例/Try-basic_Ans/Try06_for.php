<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Try06_for.php</title>
</head>

<body>
  <h1>乱数で発生させた数値の回数だけfor文でループしましょう</h1>
  <?php
  //変数「num」を「乱数」で初期化する
  $num = rand(1, 10);
  echo '乱数で発生した値は「 ' . $num . ' 」です。<br>';    //乱数の値を表示する
  echo '<h2>forループを開始します</h2>';    //「forループを開始します」と表示する

//「$i」のループカウンタを1で初期化し、
//「$num」の回数を超えない範囲で「〇回目です」と表示、
//「$i」カウントをインクリメントする 
for($i=1; $i<=$num; $i++){
  echo $i.'回目です。';
}
  echo '<p>処理が終了しました！</p>';
  ?>
</body>

</html>