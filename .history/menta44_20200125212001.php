<?php
// 44
// 次のソースコードの関数内を埋めて、2と表示されるソースコードを作成しなさい
// 元の処理の改変は行わないこと
    $number = 1;
    function add_number()
    {
        global$number++;
    }
    add_number();
    echo $number;
