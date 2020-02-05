<?php
// 9. for文と条件式の組み合わせ3
// 20 ~ 50までの数字の中で2で割ったら奇数となる数字のみを出力してください
echo '【9. for文と条件式の組み合わせ3】' . "\n";

for ($i = 20; $i <= 50; $i++) {
    // 2で割った結果が整数でなければループをスキップ
    if ( is_int($i / 2) === false) {
        continue;
    }
    // 整数の場合、2で割った結果が奇数なら出力
    if( ($i / 2) % 2 === 1 ) {
        echo $i . "\n";
    }
}

// 10. for文と条件式の組み合わせ4
// 20 ~ 50までの数字の中で2で割ったら奇数となる数字の個数を出力してください
echo '【10. for文と条件式の組み合わせ4】' . "\n";

$count = 0;
for ($i = 20; $i <= 50; $i++) {
    // 2で割った結果が整数でなければループをスキップ
    if ( is_int($i / 2) === false) {
        continue;
    }
    // 整数の場合、2で割った結果が奇数ならcount加算
    if( ($i / 2) % 2 === 1 ) {
        $count++;
    }
}
echo $count . "\n";


// 11. for文を使用した計算
// 1000未満の「3と7の倍数」は何個あるか　個数を出力してください
echo '【11. for文を使用した計算】' . "\n";

$count = 0;
for ($i = 1; $i < 1000; $i++) {
    // 3かつ7の倍数
    if (($i % 3) === 0 && ($i % 7) === 0) {
        $count++;
    }
}
echo $count . "\n";

// 12. for文を使用した計算2
// 1000未満の「3と7の倍数」の5番目に大きい数を出力してください
echo '【12. for文を使用した計算2】' . "\n";

$count = 0;
// 5番目に大きい数なのでループの向きを変更
for ($i = 1000; $i > 0; $i--) {
    // 3かつ7の倍数
    if (($i % 3) === 0 && ($i % 7) === 0){
        $count++;
    }

    if ($count === 5) {
        echo $i . "\n";
        break;
    }
}
