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
        return $this->language;
    }

}

class Human extends HumanBase {
    private $first_name;
    private $last_name;
    private $age;
    private $members = [];

    public function setHuman($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;

        $this->members = [$this->first_name, $this->last_name, $this->age, $this->getLanguage()];
    }

    public function show()
    {
        return $this->members;
    }


}

// 複数回インスタンス生成
$human = new Human();
$human->setHuman('太郎', '山田', 11);
var_dump($human->show());


?>
