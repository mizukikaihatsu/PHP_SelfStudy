<!-- HTMLのヘッダーについては後述します -->
<!doctype html>
<html lang='ja'>
<head>
    <meta charset='UTF-8'>
    <title> サンプルコード</title>
    <link rel='stylesheet' type='text/css' href='./style.css'>
</head>
<body>

<?php
require_once 'functions.php';
if(empty($_GET['id'])) {
    echo "idを指定してください";
    exit;
}
if(!preg_match('/\A\d{1,11}+\z/u', $_GET['id'])) {
    echo "idが正しくありません。";
    exit;
}
$id = (int) $_GET['id'];

$dbh = db_open();
$sql = "SELECT id, title, isbn, price, publish, author FROM books WHERE id = :id";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$result) {
    echo "指定したデータはありません。";
    exit;
}
var_dump($result); //確認用のコードなのであとで削除
?>
</body>
</html>