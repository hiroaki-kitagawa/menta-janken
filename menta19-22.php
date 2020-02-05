<?php
// 19, while文 do-while文
// 1000から2000までの間で1の桁が7の数字の最初の数字を求めて出力してください
// for文　while文　do-while文を使ってそれぞれ出力してください
echo '【19, while文 do-while文】' . PHP_EOL;
// 数値計算で1の桁を取得,10で割れば1000以外の場合にも対応できる
// for文
for($i=100; $i <= 2000; $i++) {
    // if (substr($i, -1) === '7') {
    if ( ($i % 10) === 7) {
        echo $i . PHP_EOL;
        break;
    }
}

// while文
$i = 100;
while ($i <= 2000) {
    // if (substr($i, -1) === '7') {
    if ( ($i % 10) === 7) {
        echo $i . PHP_EOL;
        break;
    }
    $i++;
}

// do~while文
$i = 100;
do {
    // if (substr($i, -1) === '7') {
    if ( ($i % 10) === 7) {
        echo $i . PHP_EOL;
        break;
    }
    $i++;
} while ($i <= 2000);

// 20. 関数の基礎
// int型の変数を宣言してください。
// 変数を渡して二乗の整数を返す関数を作成してください
echo '【20. 関数の基礎】' . PHP_EOL;
$num = 10;
function factorial($num, $times) {
    // return $num**$times;
    return pow($num,$times); // pow関数を使用
}
echo factorial($num, 2) .PHP_EOL;



// 21. 関数の基礎2
// boolean型を渡すと別のboolean型を返す関数を作成してください
// ex) trueを渡す→falseが返ってくる
echo '【21. 関数の基礎2】' . PHP_EOL;
$bool = true;
function change_bool($bool) {
    return var_export(!$bool);
}
echo change_bool($bool) .PHP_EOL;

// 22.
// int型とString型の２つの変数を引数で渡すと 「int型:String型」という文字列を返す関数を作成してください
// ※int型,String型は引数で渡してください
// ex)出力例「 5: ああああ」
echo '【22.】' . PHP_EOL;
$num = 1;
$str = '文字列';
function output($num, $str) {
    return sprintf("%d: %s", $num, $str); // sprintfを使用
}
echo output($num, $str);
