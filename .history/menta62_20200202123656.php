<?php
// 62
// 61の続き、
// 名前と年齢をコンストラクターで登録するMemberクラスを作成し、インスタンス生成しなさい。
// showメソッドで出力結果を確認すること

echo '【61. クラス改修】' . PHP_EOL;
class Member
{
    private $name;
    private $age;
    private $member;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function show($members) {
        $this->members = $members;
        foreach($this->members as $value) {
            echo "{$value["name"]}さんは{$value["age"]}歳です。" . PHP_EOL;
        }
    }
}

$yamada = new Member('山田太郎');
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
