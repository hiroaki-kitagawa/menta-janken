<?php
// 64
// 次のクラスをカプセル化し、$languageはアクセサメソッドからのみ、代入・参照できる様に修正しなさい
  class HumanBase {
    private $human_count;
    private $language = "Japanese";

    public function getLanguage()
    {
        return $this->language;
    }
  }
  $human_base = new HumanBase();
  echo $human_base->getLanguage();
?>
