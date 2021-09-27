<?php
try {
    $user = "phpuser";
    $password = "XXXXXXXXXXXX"; // P172で生成したパスワードを入力
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];
    $dbh = new PDO('mysql:host=localhost;dbname=sample_db', $user, $password, $opt);
    var_dump($dbh);
} catch (PDOException $e) {
    echo " エラー!: " . $e->getMessage() . "<br>";
    //echo "エラー!: <br>"; ← 本番では表示しないようにこのように書きましょう
    exit;
}