<?php
$str = "初心者からちゃんとしたプロになるPHP基礎入門";
echo '「'.$str.'」は、<br>';
if (str_contains($str, 'プロ')){
    echo '「プロ」が含まれています。<br>';
}
if (str_starts_with($str, '初')){
    echo '「初」から始まります。<br>';
}
if (str_ends_with($str, '門')){
    echo '「門」で終わります。<br>';
}