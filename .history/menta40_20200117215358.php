<?php
// 下記の要件を満たす「じゃんけんプログラム」を開発してください。
// 要件定義
// ・使用可能な手はグー、チョキ、パー
// ・勝ち負けは、通常のじゃんけん
// ・PHPファイルの実行はコマンドラインから。
echo '【40. じゃんけん】' . PHP_EOL;

$hands = [
    1 => 'グー',
    2 => 'チョキ',
    3 => 'パー'
];
$user_hand = input();


function input() {
    echo 'じゃんけん•••(手を入力)' . PHP_EOL;
    echo '0:グー' . PHP_EOL;
    echo '1:チョキ' . PHP_EOL;
    echo '2:パー' . PHP_EOL;
    // 標準入力
    $value = trim(fgets(STDIN));

    // バリデーション
    if(validateNum($value) === false) {
        return input($value);
    }
    return $value;
}

function match() {

}


function validateNum($age) {
  if (empty($age)) {
    echo 'じゃんけんの手を入力してください。'. PHP_EOL;
    return false;
  }
  if (!is_numeric($age)) {
    echo '数値で入力してください。'. PHP_EOL;
    return false;
  }
}
