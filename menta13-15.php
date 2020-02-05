<?php
// 13. 条件式
// 整数型の２つの変数を宣言してください。
// 上記で宣言した２つの変数の内、1つ目を2つ目で引いた数字が偶数、奇数、0で「偶数です」「奇数です」「0です」と表示させるような条件式を書いてください。
echo '【13. 条件式】' . PHP_EOL;

$num1 = 10;
$num2 = 5;
$result = $num1 - $num2;

if ($result === 0 ) {
    echo "0です" . PHP_EOL;
} elseif (($result % 2) === 0) {
    echo "偶数です" . PHP_EOL;
} elseif (($result % 2) === 1) {
    echo "奇数です" . PHP_EOL;
}


// 14. FizzBuzz
// 1 ~ 100の数字をfor文でループしてください。
// ただし3の倍数のときは数の代わりに｢Fizz｣と、5の倍数のときは｢Buzz｣、3と5両方の倍数の場合には｢FizzBuzz｣と出力すること。
echo '【14. FizzBuzz】' . PHP_EOL;

for ($i = 1; $i <= 100; $i++) {
    // 3かつ7の倍数
    if (($i % 3) === 0 && ($i % 5) === 0) {
        echo "FizzBuzz" . PHP_EOL;
    }
    elseif (($i % 3) === 0) {
        echo "Fizz" . PHP_EOL;
    }
    elseif (($i % 5) === 0) {
        echo "Buzz" . PHP_EOL;
    }
    else {
        echo $i . PHP_EOL;
    }
}

// 15. switch文
// 整数型の２つの変数を宣言してください。
// 上記で宣言した２つの変数の内、1つ目を2つ目で引いた数字が偶数、奇数、0で「偶数です」「奇数です」「0です」と表示させるような条件式を書いてください。
echo '【15. switch文】' . PHP_EOL;

$num1 = 10;
$num2 = 10;
$result = $num1 - $num2;

switch ($result) {
    case 0:
    // case $result === 0:  // 真偽値True(1) が返ってくるため、条件式「1」に遷移する
        echo "0です" . PHP_EOL;
        break;
    case (($result % 2) === 0) :
        echo "偶数です" . PHP_EOL;
        break;
    case (($result % 2) === 1) :
        echo "奇数です" . PHP_EOL;
} // 閉じタグのインデントがずれないよう注意
