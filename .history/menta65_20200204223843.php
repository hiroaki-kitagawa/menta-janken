<?php
// 65
// 64の続き、
// HumanBaseクラスを継承する、Humanクラスを作成しなさい
// 作成後、64で実行していたHumanBaseクラスのインスタンス生成で実行していた処理をHumanクラスに置き換えなさい
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

}

// 複数回インスタンス生成
$human = new Human();
echo $human->getLanguage();
echo Human::$human_count;


?>
