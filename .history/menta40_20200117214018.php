<?php
// 下記の要件を満たす「じゃんけんプログラム」を開発してください。
// 要件定義
// ・使用可能な手はグー、チョキ、パー
// ・勝ち負けは、通常のじゃんけん
// ・PHPファイルの実行はコマンドラインから。
echo '【40. じゃんけん】' . PHP_EOL;

echo 'じゃんけん•••(手を入力)' . PHP_EOL;
echo '0:グー' . PHP_EOL;
echo '1:チョキ' . PHP_EOL;
echo '2:パー' . PHP_EOL;

$hand = ['グー', 'チョキ', 'パー'];

function input($value) {
    // 標準入力
    $value = trim(fgets(STDIN));

    // バリデーション
}
