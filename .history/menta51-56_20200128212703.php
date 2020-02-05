<?php
// 51
// 次の変数を宣言しなさい
// $array = array("g", "M", "g" ,"r", "g", "g" ".", "b", "g", "e", "g", "a", "g", "n");
// ループで文字連結しなさい。
// 文字がgの場合は、処理をスキップさせること。
echo '【51. 文字連結】' . PHP_EOL;

$array = array("g", "M", "g" ,"r", "g", "g" , ".", "b", "g", "e", "g", "a", "g", "n");
$result = '';
foreach($array as $value) {
    if ($value === "g") {
        continue;
    } else {
        $result .= $value;
    }
}

// 確認
var_dump($result);


// 52
// 連想配列を宣言しなさい
// first_name : joe
// last_name : jonathan
// age : 12
echo '【52. 連想配列】' . PHP_EOL;

$array2 = [
    'first_name' => 'joe',
    'last_name' => 'jonathan',
    'age' => '12',
];

// 確認
var_dump($array2);


// 53
// 52の連想配列を使用し、次のように出力しなさい
// name : joe jonathan
// age : 12
echo '【53. 連想配列の出力】' . PHP_EOL;

echo 'name : ' . $array2['first_name'] . ' ' . $array2['last_name'] . PHP_EOL;
echo 'age : ' . $array2['age'] . PHP_EOL;


// 54
// 53の続き、
// 連想配列の中身を追加し、表示しなさい
// favorite => spiderman
// 追加した配列は次のように表示される
// name : joe jonathan
// age : 12
// favorite : spiderman
echo '【54. 連想配列の追加】' . PHP_EOL;

$array2['favorite'] = 'spiderman';

displayArray($array2);


// 55
// 54の続き、
// ageとfavoriteの中身を次のように書き換え,表示しなさい
// age => 23
// favorite => music
echo '【55. 連想配列の上書き】' . PHP_EOL;

$array2['age'] = '23';
$array2['favorite'] = 'music';

displayArray($array2);


// 56
// 55の続き、
// 54の連想配列を多次元連想配列としなさい。
// 次の情報で配列追加すること
// first_name => kelly
// last_name => clarkson
// age => 35
// favorite => singing
echo '【56. 多次元配列】' . PHP_EOL;

$array3 = [
    [
        'first_name' => 'joe',
        'last_name' => 'jonathan',
        'age' => '12',
        'favorite' => 'spiderman'
    ],
    [
        'first_name' => 'kelly',
        'last_name' => 'clarkson',
        'age' => '35',
        'favorite' => 'singing'
    ]
];


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
echo '【56. 多次元配列の出力】' . PHP_EOL;

foreach($array3 as $key => $value) {
    echo ($key + 1) . '人目' . PHP_EOL;
    displayArray($value);
}


// 表示用の関数
function displayArray($array) {
    echo 'name : ' . $array['first_name'] . ' ' . $array['last_name'] . PHP_EOL;
    echo 'age : ' . $array['age'] . PHP_EOL;
    echo 'favorite : ' . $array['favorite'] . PHP_EOL;
}
