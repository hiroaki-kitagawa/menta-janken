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

    public function show($members) {
        $this->members = $members;
        foreach($this->members as $value) {
            echo "{$value["name"]}さんは{$value["age"]}歳です。" . PHP_EOL;
        }
    }
}

$yamada = new Member;
$yamada->setName('山田太郎');
$yamada->setAge('11');
$members[] = $yamada;

$sato = new Member;
$sato->setName('佐藤祐司');
$sato->setAge('13');
$members[] = $sato;

$suzuki = new Member;
$suzuki->setName('鈴木淳一');
$suzuki->setAge('15');
$members[] = $suzuki;

// var_dump($members);

// $user->setMembers('山田太郎',11);
// $user->setMembers('山田次郎',9);
// $user->setMembers('山田三郎',5);
// $user->show();
