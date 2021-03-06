<?php
require_once 'functions.php'; //P119で作成したXSS 対策用関数の読み込み
try {
    $user = "phpuser";
    $password = "XXXXXXXXXXXX"; // P172で生成したパスワードを入力
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];
    $dbh = new PDO('mysql:host=localhost;dbname=sample_db', $user, $password, $opt);
    $sql ="INSERT INTO books (id, title, isbn, price, publish, author) VALUES (NULL, :title, :isbn, :price, :publish, :author)";
    $stmt = $dbh->prepare($sql);
    $price = (int) $_POST['price'];
    $stmt->bindParam(":title", $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(":isbn", $_POST['isbn'], PDO::PARAM_STR);
    $stmt->bindParam(":price", $price, PDO::PARAM_INT);
    $stmt->bindParam(":publish", $_POST['publish'], PDO::PARAM_STR);
    $stmt->bindParam(":author", $_POST['author'], PDO::PARAM_STR);
    $stmt->execute();
    echo "データが追加されました。<br>";
    echo "<a href='list.php'>リストへ戻る</a>";
} catch (PDOException $e) {
    echo "エラー!: " . str2html($e->getMessage()) . "<br>";
    exit;
}