<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
function sort_2way($array, $order){
    if ($order === true){   // TRUE の場合 → 昇順
        echo '昇順にソートします。<br>';
        sort($array);
    } else {                // FALSE の場合 → 降順
        echo '降順にソートします。<br>';
        rsort($array);
    }

    foreach ($array as $val) {
        echo "$val <br>";
    }
}

// ソートする配列を宣言
$nums = [15, 4, 18, 23, 10];

// 昇順ソート（TRUE）
sort_2way($nums, true);

echo "<br>";

// 降順ソート（FALSE）
sort_2way($nums, false);
?>

</p>
</body>

</html>