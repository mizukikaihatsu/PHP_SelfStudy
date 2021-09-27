<?php
require_once 'functions.php'; //作成した関数の読み込み
try {
    $dbh = db_open();
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