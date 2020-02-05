<?php
// 25,
// 配列を宣言してください
// Integer(整数) 1個の配列　
// String(文字列) 3個の配列
$numArray = [1];
$strArray = ['りんご', 'ゴリラ', 'ラッパ'];

// 26,
// 配列は初期化の際に初めから配列の値の代入までまとめて行う事ができます。
// Integer(整数)　3個の配列で　　1,2,3という数字を値に持たせたい。
// 宣言、要素の確保ののちそれぞれに代入する配列の用意の仕方と
// 代入までまとめて行う書き方で用意する仕方にて配列を用意してください
$array1 = [];
$array1[] = 1;
$array1[] = 2;
$array1[] = 3;
$array2 = [1, 2, 3];

// 27,
// 26の続き、
// 用意した配列をfor文を使って値を出力してください。
// foreach文を使った値の出力をしてください。
echo '【27. 配列foreach】' . PHP_EOL;
foreach($array1 as $value) {
    echo $value . PHP_EOL;
}

echo '【27. 配列for】' . PHP_EOL;
for($i = 0; $i < count($array1); $i++) {
    echo $array1[$i] . PHP_EOL;
}

// 28,
// 27の続き、
// 値を出力したあとにそれぞれの値の２乗の値を代入し直すよう修正してください。
echo '【28. 配列foreach２乗】' . PHP_EOL;
$i = 0;
foreach($array1 as $key => $value) {
    echo $value . PHP_EOL;
    $array1[$key] = pow($value,2);
}

echo '【２乗代入確認】' .PHP_EOL;
foreach($array1 as $value) {
    echo $value . PHP_EOL;
}
