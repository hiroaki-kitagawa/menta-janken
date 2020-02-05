<?php
// 下記の要件を満たす「じゃんけんプログラム」を開発してください。
// 要件定義
// ・使用可能な手はグー、チョキ、パー
// ・勝ち負けは、通常のじゃんけん
// ・PHPファイルの実行はコマンドラインから。
echo '【40. じゃんけん】' . PHP_EOL;

echo 'じゃんけん•••(手を入力)' . PHP_EOL;
janken();

function janken() {
    $hands = [
        1 => 'グー',
        2 => 'チョキ',
        3 => 'パー'
    ];
    $user_hand = input();
    $com_hand = array_rand($hands);
    var_dump($user_hand, $com_hand);
    match($user_hand, $com_hand);
}

function input() {
    echo '1:グー' . PHP_EOL;
    echo '2:チョキ' . PHP_EOL;
    echo '3:パー' . PHP_EOL;
    // 標準入力
    $hand = trim(fgets(STDIN));

    // バリデーション
    if(validateNum($hand) === false) {
        return input($value);
    }
    // コンピュータの手
    return $value;
}

function match($user_hand, $com_hand) {
    if ($user_hand === $com_hand) {
        echo 'あいこで•••(手を入力)' . PHP_EOL;
        janken();
    } elseif (
        $user_hand === 1 && $com_hand === 2 ||
        $user_hand === 2 && $com_hand === 3 ||
        $user_hand === 3 && $com_hand === 1) {
            echo 'あなたの勝ちです！';
    } else {
        echo 'あなたの負けです！';
    }

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
  if()
}
