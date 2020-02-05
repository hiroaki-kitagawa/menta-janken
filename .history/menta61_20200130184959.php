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

    public function setMembers($name, $age) {
        self::setName($name);
        self::setAge($age);
        $this->members[] = ["name" => $this->name, "age" => $this->age];
    }

    public function show() {
        // var_dump($this->members);
        foreach($this->members as $value) {
            echo "{$value["name"]}さんは{$value["age"]}歳です。" . PHP_EOL;
        }
    }
}

$user = new Member;
$user->setMembers('山田太郎',11);
$user->setMembers('山田次郎',9);
$user->setMembers('山田三郎',5);
$user->show();
