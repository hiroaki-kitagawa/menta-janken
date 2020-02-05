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

    public function setHuman($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function get

    public function show()
    {
        echo "---------------------------------" . PHP_EOL;
        echo "氏名：" . $this->last_name . ' ' . $this->first_name . PHP_EOL;
        echo "年齢：" . $this->age . '歳' . PHP_EOL;
        echo "母国語：" . $this->getLanguage() . PHP_EOL;
        echo "---------------------------------" . PHP_EOL;
    }


}


$yamada = new Human();
$yamada->setHuman('太郎', '山田', 11);
echo $yamada->show();

$sato = new Human();
$sato->setHuman('祐司', '佐藤', 13);
echo $sato->show();


?>
