<?php
// 41
// $x = "abcaあいう"; と宣言する
// 「あいう」という文字のみを切り抜いて表示してください
echo '【41.もn】' . PHP_EOL;

$x = "abcaあいう";
echo substr($x,4) . PHP_EOL;


// 42
// 次の配列を宣言する
// $array1 = array('あ', 'い', 'う', 'え', 'お');
// 降順にソートして出力してください
// ex) おえういあ

$array1 = array('あ', 'い', 'う', 'え', 'お');

rsort($array1);
print_r($array1);


// 43
// 42の機能を関数にしてください

function arraySort($array) {
    rsort($array);
    print_r($array);
}

// テスト
$array2 = array(1,2,3,4,5);
arraySort($array2);


// 44
// 次のソースコードの関数内を埋めて、2と表示されるソースコードを作成しなさい
// 元の処理の改変は行わないこと
echo '【44】' . PHP_EOL;
$number = 1;
function add_number()
{
    global $number;
    $number++;
}
add_number();
echo $number;
