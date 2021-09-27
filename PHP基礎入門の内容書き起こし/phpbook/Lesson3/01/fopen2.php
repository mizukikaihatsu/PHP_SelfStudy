<?php
// データを読み込む・「bookdata.csv」の部分を書き換えるとエラーになります
$fp = fopen('bookdata.csv','r');
if($fp === false) {
    echo "ファイルのオープンに失敗しました。";
    exit;
}
var_dump($fp);