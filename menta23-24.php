<?php
// 23.
// int型とboolean型を渡し boolean型がtrueなら　int型を1プラスする　falseなら1マイナスする関数を作成してください
$num = 1;
$bool = true;
function intbool($num, $bool) {
    if ($bool === true) {
        $num++;
    } elseif ($bool === false) {
        $num--;
    }
    return $num . PHP_EOL;
}

echo intbool($num, $bool);


// 24.
// int型とString型を渡しそのint型の数値の回数分　型の内容Stringを出力する関数を作成してください
// (int型が0以下の場合　「範囲外の入力値です」と出力してください
$num = 5;
$str = 'こんにちは';
function repeatStr($num, $str) {
    if ($num <= 0) {
        echo ('範囲外の入力値です');
        exit;
    }
    for ($i = 0; $i < $num; $i++) {
        echo $str . PHP_EOL;
    }
}

repeatStr($num, $str);

// ★★★★★★★★★★★★★★★
// せっかくですので、ここで追加問題といきますね。再帰関数の問題です。
// 設問13ですが、現状では２つの変数が固定値となっていますので、これをランダムな数字が代入された２つの値を返すような関数を作成してみましょう。
// また２つの変数の差がマイナスになる場合は、再度、同じ関数を呼び、再代入するような関数を作成してみてください。
// 13. 条件式
// 整数型の２つの変数を宣言してください。
// 上記で宣言した２つの変数の内、1つ目を2つ目で引いた数字が偶数、奇数、0で「偶数です」「奇数です」「0です」と表示させるような条件式を書いてください。
function setRand() {
    $num1 = mt_rand();
    $num2 = mt_rand();

    return array($num1, $num2);
}


function getRand() {
    list($num1, $num2) = setRand();
    $result = $num1 - $num2;

    if($result < 0) {
        return getRand();
    } else {
        if ($result === 0 ) {
            echo "0です" . PHP_EOL;
        } elseif (($result % 2) === 0) {
            echo "偶数です" . PHP_EOL;
        } elseif (($result % 2) === 1) {
            echo "奇数です" . PHP_EOL;
        }
    }
}

echo getRand();
