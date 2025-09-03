<?php
// 連想配列を作成
$vegetable = array(
    '名前' => '玉ねぎ',
    '値段' => 200,
    '産地' => '北海道'
);

// foreach文とecho文を使ってキーと値を出力する
foreach ($vegetable as $key => $value) {
    echo $key . "：" . $value . "<br>"; // コロン（：）で区切り、改行する
}
?>