<?php
// 51
// 次の変数を宣言しなさい
// $array = array("g", "M", "g" ,"r", "g", "g" ".", "b", "g", "e", "g", "a", "g", "n");
// ループで文字連結しなさい。
// 文字がgの場合は、処理をスキップさせること。

$array = array("g", "M", "g" ,"r", "g", "g" , ".", "b", "g", "e", "g", "a", "g", "n");
$result = [];
foreach($array as $value) {
    if ($value === "g") {
        continue;
    } else {
        $result .= $value;
    }
}

// 表示と確認


var_dump($result);

// 52
// 連想配列を宣言しなさい
// first_name : joe
// last_name : jonathan
// age : 12



// 53
// 52の連想配列を使用し、次のように出力しなさい
// name : joe jonathan
// age : 12



// 54
// 53の続き、
// 連想配列の中身を追加し、表示しなさい
// favorite => spiderman
// 追加した配列は次のように表示される
// name : joe jonathan
// age : 12
// favorite : spiderman



// 55
// 54の続き、
// ageとfavoriteの中身を次のように書き換え,表示しなさい
// age => 23
// favorite => music



// 56
// 55の続き、
// 54の連想配列を多次元連想配列としなさい。
// 次の情報で配列追加すること
// first_name => kelly
// last_name => clarkson
// age => 35
// favorite => singing



// 57
// 56の続き
// foreach文、for文を使って多次元配列を出力しなさい
// ex)
// 1人目
// name : joe jonathan
// age : 23
// favorite : music
// 2人目
// name : kelly clarkson
// age : 35
// favorite : singing
