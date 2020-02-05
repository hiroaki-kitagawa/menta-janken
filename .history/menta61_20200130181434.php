<?php
// 61
// 60の続き、
// 3人の情報を持ちたい
// Memberクラスの配列を作りなさい。
// それぞれの名前、年齢はは適当に入力すること

echo '【61. クラス改修】' . PHP_EOL;
class Member
{
    private $name;
    private $age;
    private $members = [];

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

    public function setMembars($name, $age) {
        $this->setName($name);
        $this->setAge($age);
        $members[] = [$this->name, $this->age];
    }

    public function show() {
        foreach($)
        echo "{$this->name}さんは{$this->age}歳です。";
    }
}

$user = new Member;
// $user->setName('山田太郎');
// $user->setAge(11);
$user->setMembers('山田太郎',11)
$user->show();
