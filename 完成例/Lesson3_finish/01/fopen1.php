<?php
// データを読み込む・「bookdata.csv」の部分を書き換えるとエラーになります
$fp = fopen('bookdata.csv','r');
var_dump($fp);