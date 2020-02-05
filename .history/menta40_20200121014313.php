<?php
// 下記の要件を満たす「じゃんけんプログラム」を開発してください。
// 要件定義
// ・使用可能な手はグー、チョキ、パー
// ・勝ち負けは、通常のじゃんけん
// ・PHPファイルの実行はコマンドラインから。
echo '【40. じゃんけん】' . PHP_EOL;

// ジャンケンの手
const HAND_TYPE = [
    1 => 'グー',
    2 => 'チョキ',
    3 => 'パー'
];

$user_hand = input();
$com_hand = getComHand();
// 勝敗の判断
$result = match($user_hand, $com_hand);
echo 'あなたの手：' . HAND_TYPE[$user_hand] . PHP_EOL;
echo 'コンピューターの手：' . HAND_TYPE[$com_hand] . PHP_EOL;
// 勝敗の判断
$result = match($user_hand, $com_hand);
// 結果を表示
show($result);


// プレイヤーの手を入力
function input() {
    echo 'じゃんけん•••(手を入力)' . PHP_EOL;
    echo '1:グー' . PHP_EOL;
    echo '2:チョキ' . PHP_EOL;
    echo '3:パー' . PHP_EOL;
    // 標準入力
    $hand = (int)fgets(STDIN);

    // バリデーション
    if(validateBasic($hand) === false) {
        return input($hand);
    }
    return $hand;
}

// コンピュータの手を決定
function getComHand() {
    return array_rand(HAND_TYPE);
}

// 勝敗判定
function match($user_hand, $com_hand) {
    if ($user_hand > 3 ||  $com_hand > 3) {
        $user_hand = (int)($user_hand / 3);
        $user_hand = (int)($com_hand / 3);
    }
    return ($user_hand - $com_hand + 3) % 3;
}

// 結果表示
function show($result) {
    $result_list = array(
        2 => 'あなたの勝ちです',
        1 => 'あなたの負けです',
        0 => 'あいこです',
        -1 => '不明',
    );
    echo $result_list[$result] . PHP_EOL;
    $rematch = rematch();
    if ($rematch === 1) {
        input();
    } else {
        exit();
    }
}

// 再戦
function rematch() {
    echo 'もう一度対戦しますか？' . PHP_EOL;
    echo '1:対戦する' . PHP_EOL;
    echo '2:やめる' . PHP_EOL;
    // 標準入力
    $answer = (int)fgets(STDIN);

    // バリデーション
    if(validateAnswer($answer) === false) {
        return rematch($answer);
    }
    return $answer;
}

function validateBasic($hand) {
    if (empty($hand)) {
        echo '値を入力してください。'. PHP_EOL;
        return false;
    }
    if (!is_numeric($hand)) {
        echo '数値で入力してください。'. PHP_EOL;
        return false;
    }
}

function validateHand($hand) {
    validateBasic($hand);
    if ($hand < 1 || $hand > 3) {
        echo '1~3の値で入力してください。'. PHP_EOL;
        return false;
  }
}

function validateAnswer($answer) {
    validateBasic($answer);
    if ($answer < 1 || $answer > 2) {
        echo '1~2の値で入力してください。'. PHP_EOL;
        return false;
  }
}
