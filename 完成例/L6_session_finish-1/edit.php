<?php include __DIR__. '/login_check.php'; ?>
<?php
require_once __DIR__. '/inc/functions.php';

// 更新のリンクからこのページにアクセスしているか
if(empty($_GET['id'])){
	echo 'IDを指定してください。';
	exit;
}
// IDがデータベースの入力規則に沿ったものになっているか
if(!preg_match('/\A\d{1,11}+\z/u', $_GET['id'])) {
    echo 'idが正しくありません。';
    exit;
}

// データベース接続メソッド
$dbh = db_open();

// SQL文の準備
$sql = 'SELECT id, title, isbn, price, publish, author FROM books WHERE id = :id';

// PDOオブジェクトのprepare()メソッドでSQLの実行準備を行う（PDOステートメントメソッドの取得）
$stmt = $dbh->prepare($sql);

// ステートメントオブジェクトのbindParam()メソッドでプレースホルダのIDを
// $_GET['id']で取得したものに置き換える
$id = (int)$_GET['id'];
$stmt->bindParam(':id', $id , PDO::PARAM_INT);

// SQL文を実行する
$stmt->execute();

// ステートメントオブジェクトのfetch()メソッドで、結果をキーで指定できる配列で取得する
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// もし上の行で結果が取得できなければ、「指定したデータはありません。」と表示
if(!$result) {
    echo '指定したデータはありません。';
    exit;
}

// レコードの各値を変数に置き換え
$title = str2html($result['title']);
$isbn = str2html($result['isbn']);
$price = str2html($result['price']);
$publish = str2html($result['publish']);
$author = str2html($result['author']);
$id = str2html($result['id']);

// ヒアドキュメントで広い範囲の出力をする
$html_form = <<<EOD
<form action="update.php" method="POST" >
    <p>
    <label for="title">タイトル:</label>
    <input type="text" name="title" value="$title">	<!-- 変数は値に置き換わって出力される-->
    </p>
    <p>
    <label for="isbn">ISBN:</label>
    <input type="text" name="isbn" value="$isbn">
    </p>
    <p>
    <label for="price">価格:</label>
    <input type="text" name="price" value="$price">
    </p>
    <p>
    <label for="published">出版日:</label>
    <input type="text" name="publish" value="$publish">
    </p>
    <p>
    <label for="author">著者:</label>
    <input type="text" name="author" value="$author">
    </p>
    <p class="button">
    <input type="hidden" name="id" value="$id">
    <input type="submit" value="送信する">
    </p>
</form>
EOD;	//ヒアドキュメント終了
include __DIR__. '/inc/header.php';
echo $html_form;
include __DIR__. '/inc/footer.php';

?>