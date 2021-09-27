<?php include __DIR__. '/login_check.php'; ?>
<?php
// ファイルの相対パスを記述する際には「__DIR__.」で呼び出し元の絶対パスを追加したうえで「/」を先頭に記述した相対パスを文字列で指定する
require_once __DIR__ . '/inc/functions.php';
include __DIR__ . '/inc/error_check.php';
include __DIR__. '/inc/header.php';

try {
	// データベース接続の関数を呼び出して、返り値（PDOオブジェクト）を$dbhに代入
	$dbh = db_open();

	// SQL文を変数に準備（値はプレースホルダで場所を確保）
	$sql = 'INSERT INTO books (id, title, isbn, price, publish, author) 
		VALUES (NULL, :title, :isbn, :price, :publish, :author)' ;
	
	// PDOオブジェクトのprepare()メソッドでPDOStatementオブジェクトを生成し、
	// $stmtに代入（SQLの準備完了）
	$stmt = $dbh->prepare($sql);

	// テキストボックスの「price」を整数型に変換して「$price」に代入
	$price = (int) $_POST['price'];

	// 各プレースホルダにテキストボックスからの値をbindParam()メソッドを利用して置き換える
    $stmt->bindParam(":title", $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(":isbn", $_POST['isbn'], PDO::PARAM_STR);
    $stmt->bindParam(":price", $price, PDO::PARAM_INT);
    $stmt->bindParam(":publish", $_POST['publish'], PDO::PARAM_STR);
    $stmt->bindParam(":author", $_POST['author'], PDO::PARAM_STR);

	// SQL文の実行
    $stmt->execute();

    echo "データが追加されました。<br>";
    echo "<a href='./'>リストへ戻る</a>";

} catch (PDOException $e) {
    echo "エラー!: " . str2html($e->getMessage()) . "<br>";
    exit;
}
?>
<?php include __DIR__. '/inc/footer.php'; ?>
