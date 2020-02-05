<?php
// 48
// 日時の関数を利用し、
// 現在時間のUNIX タイムスタンプを表示しなさい。
// 2017/08/04 13:44:41だと、次のように表示される
// 1501821881
echo '【48. 日時関数】' . PHP_EOL;
echo time() . PHP_EOL;

// 49
// 年月日 時:分:秒で表示しなさい
// ex) 2017/8/4 13:44:41
echo '【49. 年月日時刻】' . PHP_EOL;
echo date('Y/m/d H:i:s');


// 50
// 2017-01-01 00:00:00をUNIX タイムスタンプ形式に変更しなさい
echo '【40. UNIXタイムスランプ変換】' . PHP_EOL;
$date = new Datetime('2017-01-01 00:00:00');
echo $date->format('U');
