<?php
$fp = fopen('bookdata.csv','r');
if($fp === false) {
    echo "ファイルのオープンに失敗しました。";
    exit;
}
// 1 行ずつ出力する
while($row = fgetcsv($fp)) {
    var_dump($row);
}