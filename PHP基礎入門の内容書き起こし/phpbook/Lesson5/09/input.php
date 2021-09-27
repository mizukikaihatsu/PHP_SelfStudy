<?php include __DIR__ . '/inc/header.php'; ?>
<form action='add.php' method='post'>
    <p>
        <label for='title'> タイトル（必須・200 文字まで）:</label>
        <input type='text' name='title'>
    </p>
    <p>
        <label for='isbn'>ISBN（13 桁までの数字）:</label>
        <input type='text' name='isbn'>
    </p>
    <p>
        <label for='price'> 定価（6 桁までの数字）:</label>
        <input type='text' name='price'>
    </p>
    <p>
        <label for='published'> 出版日（YYYY-MM-DD 形式）:</label>
        <input type='text' name='publish'>
    </p>
    <p>
        <label for='author'> 著者（80 文字まで）:</label>
        <input type='text' name='author'>
    </p>
        <p class='button'>
        <input type='submit' value=' 送信する'>
    </p>
</form>
<?php include __DIR__ . '/inc/footer.php'; ?>
