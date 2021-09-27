<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try11_nest-array.php</title>
</head>

<body>
    <h1>2次元配列の内容を全て表示する</h1>
    <?php
    // 2次元配列を定義する
    $array[] = ['employeeNo' => 'AH101012', 'dept' => '営業', 'name' => '田中　一郎', 'year' => 21];
    $array[] = ['employeeNo' => 'AH101120', 'dept' => '営業', 'name' => '清水　恭子', 'year' => 17];
    $array[] = ['employeeNo' => 'AH101022', 'dept' => '営業', 'name' => '中村　誠', 'year' => 12];
    $array[] = ['employeeNo' => 'AH100012', 'dept' => '開発', 'name' => '小林　幸太郎', 'year' => 20];
    $array[] = ['employeeNo' => 'AH100231', 'dept' => '企画', 'name' => '原　康介', 'year' => 18];
    $array[] = ['employeeNo' => 'BK300102', 'dept' => '総務', 'name' => '相田　尚美', 'year' => 22];

    // 2重foreach文で内容を表示する
    foreach ($array as $employee) {
        echo '<p>';
        foreach ($employee as $key => $value) {
            echo $key . '=>' . $value . '　';
        }
        echo '</p>';
    }



    ?>
</body>

</html>