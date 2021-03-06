<?php
// 60
// 59の続き、
// Memberクラスを改修する
// Memberというクラスは名前と年齢を持つ事ができる。
// setNameというメソッドで名前を設定する。
// setAgeというメソッドで年齢を設定する。
// showというメソッドでセットされた名前を出力する機能を作成しなさい。
// 出力例　山田太郎さんは１１歳です。
echo '【60. クラス改修】' . PHP_EOL;
class Member
{
    private $name;
    private $age;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function show() {
        echo "{$this->name}さんは{$this->age}歳です。";
    }
}

$user = new Member;
$user->setName('山田太郎');
$user->setAge(11);
$user->show();
