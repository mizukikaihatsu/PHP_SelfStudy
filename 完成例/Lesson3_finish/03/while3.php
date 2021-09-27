<?php
$fp = fopen('bookdata.csv','r');
if ($fp === false) {
    echo "ファイルのオープンに失敗しました。";
    exit;
}
// 書籍名と著者名を出力する
while($row = fgetcsv($fp)) {
    echo "書籍名:" . $row[0] . "<br>";
    echo "著者名:" . $row[4] . "<br><br>";
}