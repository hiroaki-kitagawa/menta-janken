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

    public function __construct() {
        $this->name = '';
        $this->age = 0;
    }


    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function show() {
        return array($this->name, $this->age);
    }
}

$user = new Member;
$user->regist('山田太郎', 11);
list($name, $age) = $user->show();
echo "{$name}さんは{$age}歳です。";



// 61
// 60の続き、
// 3人の情報を持ちたい
// Memberクラスの配列を作りなさい。
// それぞれの名前、年齢はは適当に入力すること
