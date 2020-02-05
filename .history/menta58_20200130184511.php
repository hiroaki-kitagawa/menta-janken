<?php
// 58
// Memberというクラスを作成しなさい。
// 名前というmember変数を持つことができる。
// registというメソッドで名前を設定し、
// showというメソッドでセットされた名前を出力する機能を作りなさい。
// 出力例 山田太郎さんです。
// Memberクラスのインスタンスを生成し、registメソッドで名前設定後、
// showメソッドで名前を出力しなさい。
echo '【58. クラス】' . PHP_EOL;

class Member
{
    private $name;

    publci function __construct($name) {
        
    }

    public function regist(string $name) {
        $this->name = $name;
    }

    public function show() {
        echo "{$this->name}さんです。";
    }
}

$user = new Member;
$user->regist('山田太郎');
$user->show();
