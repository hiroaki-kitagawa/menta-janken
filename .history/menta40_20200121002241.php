<?php
// 下記の要件を満たす「じゃんけんプログラム」を開発してください。
// 要件定義
// ・使用可能な手はグー、チョキ、パー
// ・勝ち負けは、通常のじゃんけん
// ・PHPファイルの実行はコマンドラインから。
echo '【40. じゃんけん】' . PHP_EOL;

echo 'じゃんけん•••(手を入力)' . PHP_EOL;

const HAND_TYPE = [
    1 => 'グー',
    2 => 'チョキ',
    3 => 'パー'
];

$user_hand = input();
$com_hand = array_rand($hands);
// 勝敗の判断
$result = match($user_hand, $com_hand);
// 結果を表示
show($result);

function janken() {
    // ユーザの手
    $user_hand = input();
    // コンピュータの手
    $com_hand = array_rand($hands);
    echo 'あなたの手：'.$hands[$user_hand] . PHP_EOL;
    echo 'コンピューターの手：'.$hands[$com_hand] . PHP_EOL;
    // 勝敗の判断
    match($user_hand, $com_hand);
}

function input() {
    echo '1:グー' . PHP_EOL;
    echo '2:チョキ' . PHP_EOL;
    echo '3:パー' . PHP_EOL;
    // 標準入力
    $hand = (int)fgets(STDIN);

    // バリデーション
    if(validateHand($hand) === false) {
        return input($hand);
    }
    return $hand;
}

function match($user_hand, $com_hand) {
    if ($user_hand > 2 ||  $com_hand > 2) {


}

function validateHand($hand) {
  if (empty($hand)) {
    echo 'じゃんけんの手を入力してください。'. PHP_EOL;
    return false;
  }
  if (!is_numeric($hand)) {
    echo '数値で入力してください。'. PHP_EOL;
    return false;
  }
  if ($hand < 1 || $hand > 3) {
      echo '1~3の値で入力してください。'. PHP_EOL;
      return false;
  }
}
