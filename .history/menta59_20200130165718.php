<?php
// 59
// 58の続き、
// Memberクラスを改修する
// Memberというクラスは名前と年齢を持つ事ができる。
// registというメソッドで名前と年齢を設定し、
// showというメソッドでセットされた名前と年齢を出力する機能を作れ
// 出力例　山田太郎さんは１１歳です。
// Memberクラスのインスタンスを生成し、registメソッドを使用し登録。
// その後showメソッドを使用して出力しなさい。
echo '【59. クラス改修】' . PHP_EOL;
class Member
{
    private $name;
    private $age;

    public function __construct() {
        $this->name = '';
        $this->age = 0;
    }

    public function regist($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function show() {
        echo "{$this->name}さんです。";
    }
}
}

$user = new Member;
$user->regist('山田太郎', 11);
list($name, $age) = $user->show();
echo "{$name}さんは{$age}歳です。";
