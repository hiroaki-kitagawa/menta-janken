<?php
// 29,
// 5個のString(文字列)の配列を用意し適当な文字を代入してください。
// その2番目の値を出力してください。
echo '【29. 配列】' . PHP_EOL;
$str_array = ['りんご', 'ゴリラ', 'ラッパ', 'パンダ', 'ダチョウ'];
echo $str_array[1] . PHP_EOL;


// 30,
// 10個のInteger(整数)の配列を用意し適当な値を代入してください。
// 添字が偶数番目の合計値と添字が奇数番目の合計値を出力してください。
echo '【30. 配列】' . PHP_EOL;
$num_array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach($num_array as $key => $value) {
    if ($key % 2 === 0 ){
        $sum_even += $num_array[$key];
    } elseif($key % 2 === 1) {
        $sum_odd += $num_array[$key];
    }
}
echo '偶数の合計：' . $sum_even . PHP_EOL;
echo '奇数の合計：' . $sum_odd . PHP_EOL;


// 31,
// Integer(整数)の配列を渡すと、配列の中身が３乗される関数を作ってください。
// なお、関数の中で引数に必要だと思うvalidationも作成してください。（validationの意味がわからない場合は、お調べください）
echo '【31. 配列・関数】' . PHP_EOL;
function factorialArray($array) {
    // バリデーション
    if (isValidArray($array)) {
        // ３乗計算
        foreach($array as $key => $value) {
            $array[$key] = pow($array[$key], 3);
        }
    }

    return $array;
}

function isValidArray($array) {
    // 配列が空でないか確認
    if (empty($array)) {
        echo '配列が空です。';
        return false;
    }

    // 配列バリデーション
    if (!is_array($array)) {
        echo '配列型ではありません。';
        return false;
    }

    // 整数値バリデーション
    foreach($array as $key => $value) {
        if (!is_int($array[$key])) {
            echo '配列内の値が整数値ではありません。';
            return false;
        }
    }

    return true;
}

// 確認
$array = [1, 2, 3];
// $array = null;
// $array = [];
var_dump(factorialArray($array));


// 32,
// 2つのInteger(整数)の配列を引数にもち、それぞれ同じ順番の値が合計された配列を作る関数を作ってください(配列を返り値として持つ)
// 作られる配列は２つの入力された配列のうち少ない個数の配列の個数とします。
echo '【32. 配列・関数】' . PHP_EOL;
$num_array1 = [1,2];
$num_array2 = [3,4,5];

function sumArray($array1, $array2) {
    $cnt1 = count($array1);
    $cnt2 = count($array2);

    // if ($cnt1 < $cnt2) {
    //     $sumcnt = $cnt1;
    // } else {
    //     $sumcnt = $cnt2;
    // }

    // for($i = 0; $i < $sumcnt; $i++) {
    //     $sum_array[] = ($array1[$i] + $array2[$i]);
    // }
    for($i = 0; $i < min($cnt1, $cnt2); $i++) {
        $sum_array[] = ($array1[$i] + $array2[$i]);
    }

    return $sum_array;
}

var_dump(sumArray($num_array1, $num_array2));


echo '【32. 配列・無名関数】' . PHP_EOL;
$sum_array = function ($num1 , $num2) {
    return $num1 + $num2;
};
