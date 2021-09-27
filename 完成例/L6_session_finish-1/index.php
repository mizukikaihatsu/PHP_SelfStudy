<?php include __DIR__. '/login_check.php'; ?>

<?php
require_once __DIR__. '/inc/functions.php';
include __DIR__. '/inc/header.php';

try {
	// データベース接続の関数を呼び出して、返り値（PDOオブジェクト）を$dbhに代入
	$dbh = db_open();

	// SQL文の準備
	$sql = 'SELECT * FROM books';

	// $dbhオブジェクトのquery()メソッドでSQLを実行する
	$statement = $dbh -> query($sql);
?>

<table border="1">
	<tr>
		<th>更新</th><th>書籍名</th><th>ISBN</th><th>価格</th><th>出版日</th><th>著者名</th>
	</tr>
	<?php while ($row = $statement->fetch()): ?>
	<tr>
		<td><a href="edit.php?id=<?php echo (int)$row['id'] ?>">更新</a></td>
		<td><?php echo str2html($row['title']) ?></td>
		<td><?php echo str2html($row['isbn']) ?></td>
		<td><?php echo str2html($row['price']) ?></td>
		<td><?php echo str2html($row['publish']) ?></td>
		<td><?php echo str2html($row['author']) ?></td>
	</tr>
	<?php endwhile; ?>	
	
</table>
<?php 
} catch (PDOException $e) {
	echo " エラー!: " . $e->getMessage() . "<br>";
}
?>
<?php include __DIR__ . '/inc/footer.php';
