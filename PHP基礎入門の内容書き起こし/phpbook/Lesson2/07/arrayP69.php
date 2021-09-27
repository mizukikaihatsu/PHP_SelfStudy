<?php
// P69の配列の各書き方の確認用コードです

$a = ['A', 'B', 'C'];

$b[] = 'A';
$b[] = 'B';
$b[] = 'C';

$c = array('A', 'B', 'C');

var_dump($a);
var_dump($b);
var_dump($c);

$namea = [
    'sato' => '佐藤',
    'suzuki' => '鈴木',
    'takahashi' => '高橋'
];

$nameb['sato'] = '佐藤';
$nameb['suzuki'] = '鈴木';
$nameb['takahashi'] = '高橋';

$namec = array(
    'sato' => '佐藤',
    'suzuki' => '鈴木',
    'takahashi' => '高橋'
);

var_dump($namea);
var_dump($nameb);
var_dump($namec);