<?php
require_once 'functions.php'; //P119で作成したXSS対策用関数の読み込み
try {
    $user = "phpuser";
    $password = "XXXXXXXXXXXX"; //P172で生成したパスワードを入力
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];
    $dbh = new PDO('mysql:host=localhost;dbname=sample_db', $user, $password, $opt);
    $sql = 'SELECT title, author FROM books';
    $statement = $dbh->query($sql);

    while ($row = $statement->fetch()) {
        echo " 書籍名:" . str2html($row[0]) . "<br>";
        echo " 著者名:" . str2html($row[1]) . "<br><br>";
    };
} catch (PDOException $e) {
    echo " エラー!: " . str2html($e->getMessage()) . "<br>";
    exit;
}