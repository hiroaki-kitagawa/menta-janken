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
echo '【59. クラス】' . PHP_EOL;
class Member
{
    private $name;
    private $age;


    public function regist($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function show() {
        return array($this->name, $this->age);
    }
}

$user = new Member;
$user->regist('山田太郎', 11);
list($name, $age) = $user->show();
echo "{list($name)}さんは{$user->show()->age}歳です。";




// 60
// 59の続き、
// Memberクラスを改修する
// Memberというクラスは名前と年齢を持つ事ができる。
// setNameというメソッドで名前を設定する。
// setAgeというメソッドで年齢を設定する。
// showというメソッドでセットされた名前を出力する機能を作成しなさい。
// 出力例　山田太郎さんは１１歳です。




// 61
// 60の続き、
// 3人の情報を持ちたい
// Memberクラスの配列を作りなさい。
// それぞれの名前、年齢はは適当に入力すること
