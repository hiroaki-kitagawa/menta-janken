<?php
// 63
// 次のクラスをカプセル化し、$languageはアクセサメソッドからのみ、代入・参照できる様に修正しなさい
<?php
  class HumanBase {
    public $human_count;
    public $language = "Japanese";
  }
  $human_base = new HumanBase();
  echo $human_base->language;
?>
