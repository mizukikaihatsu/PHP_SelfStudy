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
// var_dump($result); //確認用のコードなのであとで削除

$title = str2html($result['title']);
$isbn = str2html($result['isbn']);
$price = str2html($result['price']);
$publish = str2html($result['publish']);
$author = str2html($result['author']);
$id = str2html($result['id']);

$html_form = <<<EOD
<form action='update.php' method='post' class='editform'>
    <p>
    <label for='title'>タイトル:</label>
    <input type='text' name='title' value='$title'>
    </p>
    <p>
    <label for='isbn'>ISBN:</label>
    <input type='text' name='isbn' value='$isbn'>
    </p>
    <p>
    <label for='price'>価格:</label>
    <input type='text' name='price' value='$price'>
    </p>
    <p>
    <label for='published'>出版日:</label>
    <input type='text' name='publish' value='$publish'>
    </p>
    <p>
    <label for='author'>著者:</label>
    <input type='text' name='author' value='$author'>
    </p>
    <p class='button'>
    <input type='hidden' name='id' value='$id'>
    <input type='submit' value='送信する'>
    </p>
</form>
EOD;
echo $html_form;

?>
<!-- HTMLのフッターについては後述します -->
</body>
</html>