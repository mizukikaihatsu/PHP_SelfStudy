<?php
// ファイルの相対パスを記述する際には「__DIR__.」で呼び出し元の絶対パスを追加したうえで「/」を先頭に記述した相対パスを文字列で指定する
require_once __DIR__ . '/inc/functions.php';
include __DIR__ . '/inc/error_check.php';
include __DIR__. '/inc/header.php';

// 更新のリンクからこのページにアクセスしているか
if(empty($_POST['id'])){
	echo 'IDを指定してください。';
	exit;
}
// IDがデータベースの入力規則に沿ったものになっているか
if(!preg_match('/\A\d{1,11}+\z/u', $_POST['id'])) {
    echo 'idが正しくありません。';
    exit;
}
try {
	// データベース接続の関数を呼び出して、返り値（PDOオブジェクト）を$dbhに代入
	$dbh = db_open();

	// SQL文を変数に準備（値はプレースホルダで場所を確保）
	$sql = 'UPDATE books SET title = :title , isbn = :isbn, price = :price , publish = :publish , author = :author WHERE id = :id' ;
	
	// PDOオブジェクトのprepare()メソッドでPDOStatementオブジェクトを生成し、
	// $stmtに代入（SQLの準備完了）
	$stmt = $dbh->prepare($sql);

	// テキストボックスの「price」を整数型に変換して「$price」に代入
	$price = (int) $_POST['price'];
	// テキストボックスの「id」を整数型に変換して「$id」に代入
    $id = (int) $_POST['id'];

	// 各プレースホルダにテキストボックスからの値をbindParam()メソッドを利用して置き換える
    $stmt->bindParam(":title", $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(":isbn", $_POST['isbn'], PDO::PARAM_STR);
    $stmt->bindParam(":price", $price, PDO::PARAM_INT);
    $stmt->bindParam(":publish", $_POST['publish'], PDO::PARAM_STR);
    $stmt->bindParam(":author", $_POST['author'], PDO::PARAM_STR);
    $stmt->bindParam(":id", $id , PDO::PARAM_INT);

	// SQL文の実行
    $stmt -> execute();

    echo "データが更新されました。<br>";
    echo "<a href='list.php'>リストへ戻る</a>";

} catch (PDOException $e) {
    echo "エラー!: " . str2html($e->getMessage()) . "<br>";
    exit;
}
include __DIR__. '/inc/footer.php';
