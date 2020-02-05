<?php
// 66
// 65の続き、
// Humanクラスのインスタンス変数に$first_name, $last_name, $ageを追加し、アクセサメソッドも追加しなさい
// カプセル化を想定した記述方法とすること
// 実装後、2名分のインスタンス生成、データ設定、データ出力を実行すること
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

class Human extends HumanBase {
    private $first_name;
    private $last_name;
    private $age;

    public function setHuman($first_name, $last_name, $age) {

    }


}

// 複数回インスタンス生成
$human = new Human();
echo $human->getLanguage();
echo Human::$human_count;


?>
