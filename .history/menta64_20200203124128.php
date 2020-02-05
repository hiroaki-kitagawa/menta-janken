<?php
// 64
// 63の続き、
// HumanBaseクラスのインスタンスを生成した際にインスタンスの生成回数を追加し、
// インスタンスを生成した回数がわかる様にしなさい
// 回数はコンストラクタ内で行うようにし、
// インスタンスが生成された回数は、クラスの外から参照できるようにすること
// $human_countをクラス変数として書き換えることで実現できる
class HumanBase {
    public static $human_count;
    private $language = "Japanese";

    public function __construct()
    {
        self::$human_count++;
    }

    public function getLanguage()
    {
        return $this->language . PHP_EOL;
    }

}

//   複数回インスタンス生成
$human_base = new HumanBase();
$human_base = new HumanBase();
$human_base3 = new HumanBase();

echo $human_base->getLanguage();
echo HumanBase::$human_count;


?>
