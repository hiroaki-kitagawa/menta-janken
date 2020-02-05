<?php
// 45
// 1,2,3,4 ... 10と出力できるように関数内を埋めてください
// 元の処理の書き換えは行わず// 内に処理を書いていくこと
    function count_up()
    {
        global $number;
        $number++;
        return $number;
    }
    for($i = 0; $i < 10; $i++)
    {
        echo count_up(). PHP_EOL;
    }

