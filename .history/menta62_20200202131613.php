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

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function show() {
        echo "{$this->name}さんは{$this->age}歳です。";
    }
}

$yamada = new Member('山田太郎', 11);
$sato = new Member('佐藤次郎', 13);
$suzuki = new Member('鈴木淳一', 15);

$yamada->show();
$yamada->show();
$yamada->show();
