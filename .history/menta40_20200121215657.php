<?php
// 下記の要件を満たす「じゃんけんプログラム」を開発してください。
// 要件定義
// ・使用可能な手はグー、チョキ、パー
// ・勝ち負けは、通常のじゃんけん
// ・PHPファイルの実行はコマンドラインから。
echo '【40. じゃんけん】' . PHP_EOL;

// ジャンケンの手
const STONE = 1;
const SCISSORS = 2;
const PAPER = 3;
const HAND_TYPE = [
    STONE => 'グー',
    SCISSORS => 'チョキ',
    PAPER => 'パー'
];

const BATTLE_RESULT = [
    2 => 'あなたの勝ちです',
    1 => 'あなたの負けです',
    0 => 'あいこです',
    -1 => '不明',
];
janken();


function janken() {
    $user_hand = input();
    $com_hand = getComHand();
    // 勝敗の判断
    $result = match($user_hand, $com_hand);
    echo 'あなたの手：' . HAND_TYPE[$user_hand] . PHP_EOL;
    echo 'コンピューターの手：' . HAND_TYPE[$com_hand] . PHP_EOL;
    // 勝敗の判定
    $result = match($user_hand, $com_hand);
    // 再戦の確認
    $rematch = rematch();
    // 結果を表示
    show($result);
}


// プレイヤーの手を入力
function input() {
    echo 'じゃんけん•••(手を入力)' . PHP_EOL;
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

// コンピュータの手を決定
function getComHand() {
    return array_rand(HAND_TYPE);
}

// 勝敗の判定
function match($user_hand, $com_hand) {
    if ($user_hand > 3 ||  $com_hand > 3) {
        $user_hand = (int)($user_hand / 3);
        $user_hand = (int)($com_hand / 3);
    }
    return ($user_hand - $com_hand + 3) % 3;
}

// 結果の表示
function show($result) {
    echo BATTLE_RESULT[$result] . PHP_EOL;
    if ($rematch === 1) {
        janken();
    } else {
        echo '終了します。' . PHP_EOL;
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
    if (validateAnswer($answer) === false) {
        return rematch($answer);
    } elseif ($answer === 1) {
        janken();
    } elseif ($answer === 2) {
        echo '終了します。' . PHP_EOL;
        exit();
    }
}

function validateBasic($hand) {
    if (empty($hand)) {
        echo '正しい値を入力してください。'. PHP_EOL;
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
