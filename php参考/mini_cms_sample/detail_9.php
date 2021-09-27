<?php
    // ファイルの読み込み
    require_once('inc/config.php');
    require_once('inc/functions.php');

    // GETパラメータのチェック
    if ( empty($_GET['id']) ) 
    {
        // $_GET['id'] が 空 の場合
        header('Location: index.php');
        exit();
    }

    try 
    {
        // データベースへ接続
        $dbh = new PDO(DSN, DB_USER, DB_PASSWORD);

        // エラー発生時に「PDOException」という例外を投げる設定に変更
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQL文の作成
        $sql = 'SELECT p.*, c.category_name FROM posts AS p JOIN categories AS c ON p.category_id = c.id WHERE p.id = ?';

        //ステートメントを用意
        $stmt = $dbh->prepare($sql);

        //プレースホルダーに値を埋め込む
        $stmt->bindValue(1, (int)$_GET['id'], PDO::PARAM_INT);

        //ステートメントを実行
        $stmt->execute();

        // 実行結果を1レコードのみ連想配列として取得
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // データベースとの接続を終了
        $dbh = null;

    }
    catch (PDOException $e)
    {
        //　例外発生時の処理
        echo 'エラー' . h($e->getMessage());
        exit();
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title><?php echo h($result['title']); ?></title>

        <style type="text/css">
            .pic
            {
                width: 50%;
            }
        </style>
    </head>
    
    <body>
        <h1><?php echo h($result['title']); ?></h1>

        <?php if( !empty($result['post_image']) ) : ?>
            <figure>
                <img src="upload/<?php echo h($result['post_image']); ?>" alt="<?php echo h($result['title']); ?>" class="pic">
            </figure>
        <?php endif; ?>

        <ul>
            <li>公開日：<time datetime="<?php echo h($result['created']); ?>"><?php echo h(date('Y年m月d日', strtotime($result['created']))); ?></time></li>
            <li>カテゴリ：<?php echo h($result['category_name']); ?></li>
        </ul>
        
        <p>
            <?php echo nl2br(h($result['content']), false); ?>
        </p>
        
        <p><a href="./">一覧に戻る</a></p>
    </body>
</html>