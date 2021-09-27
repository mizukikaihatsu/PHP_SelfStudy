<?php
// データを読み込む
$fp = fopen('bookdata.csv','r');
if($fp === false) {
    echo "ファイルのオープンに失敗しました。";
exit;
}
//1行を処理する
$row = fgetcsv($fp);
var_dump($row);