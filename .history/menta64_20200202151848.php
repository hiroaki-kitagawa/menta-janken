<?php
// 64
// 63の続き、
// HumanBaseクラスのインスタンスを生成した際にインスタンスの生成回数を追加し、
// インスタンスを生成した回数がわかる様にしなさい
// 回数はコンストラクタ内で行うようにし、
// インスタンスが生成された回数は、クラスの外から参照できるようにすること
// $human_countをクラス変数として書き換えることで実現できる
  class HumanBase {
    static $human_count;
    private $language = "Japanese";

    public function __construct()
    {
      $this->human_count++;
    }

    public function getLanguage()
    {
        return $this->language . PHP_EOL;
    }

    public function getHumanCount()
    {
        return $this->human_count . PHP_EOL;
    }
  }
  $human_base = new HumanBase();
  echo $human_base->getLanguage();
  echo $human_base->getHumanCount();
  echo $human_base->getLanguage();
  echo $human_base->getHumanCount();
?>
