<?php
// 33,
// 1階層3部屋ある3階建てのアパートがある。101 102、、、という部屋番号で管理するとする。
// 多次元配列で表してください。
$room_no = [
    [101,102,103],
    [201,202,203],
    [301,302,303]
];


// 34,連想配列
// メンバーを意味する配列に下記内容をキーに持つ値を格納したい。
// 名前
//     -性別
//     -年齢
// メンバーを意味する配列を宣言し、上記内容を保持する配列を作成してください。
$member = [
    '山田' => [
        'gender' => 'male',
        'age' => '30',
    ],
    '佐藤' => [
        'gender' => 'male',
        'age' => '28',
    ],
    '高橋' => [
        'gender' => 'female',
        'age' => '26',
    ]
];

// 35,
// 次の配列を使用して、2という値を出力してください。
$test = array(
  array(
    array(
      1,1,1
    ),
    array(
      1,1,1
    ),
    array(
      1,1,1
    )
  ),
  array(
    array(
      1,1,2
    ),
    array(
      1,1,1
    )
  )
);

echo '【35. 多次元配列の出力】' . PHP_EOL;
echo $test[1][0][2] . PHP_EOL;


// 36,
// 35の続き、
// 35の配列をfor文をつかって全て出力してください　　(1 1 1 1 1 1 1 1 1 1 1 2 1 1 1　的な)
// foreach文を使った出力もしてください。
echo '【36. 多次元配列の出力:for文】' . PHP_EOL;
for($i = 0; $i < count($test); $i++) {
    for($j = 0; $j < count($test[$i]); $j++) {
        for($k = 0; $k < count($test[$i][$j]); $k++) {
            echo $test[$i][$j][$k] . " ";
        }
    }
}
echo PHP_EOL;

echo '【36. 多次元配列の出力:foreach文】' . PHP_EOL;
foreach($test as $test1) {
    foreach($test1 as $test2) {
        foreach($test2 as $value) {
            echo $value. " ";
        }
    }
}
echo PHP_EOL;

// 37,三項演算子
// Integer(整数)の変数を2つ、String(文字列)の変数を1つ宣言してください。
// 2つのint型変数の合計が100未満なら「100未満」、そうじゃなければ「100以上」とString(文字列)に三項演算子(条件演算子)を使って代入して、出力してください。
echo '【37. 三項演算子】' . PHP_EOL;
$num1 = 50;
$num2 = 49;
$str  = '';

$str = ($num1 + $num2) < 100 ? '100未満' : '100以上';
echo $str . PHP_EOL;


// 38,文字列検索
// string型の変数を２つ宣言してください。
// 第二引数のString(文字列)が第一引数に含まれているかどうかのboolean型を返す関数を作成してください。
echo '【38. 文字列検索】' . PHP_EOL;
$str = '山田太郎';
$key = '太郎';

function searchStr($str, $key) {
    if(strpos($str, $key) > 0) {
        return true;
    } else {
        return false;
    }
}

var_dump(searchStr($str, $key));


// 39, 標準入力
// PHPファイルはコマンドラインから実行してください。
// 仕様
// 「あなたの名前を教えてください。」出力
// ↓
// 入力 ex) Micael
// ↓
// 「Micaelさん、あなたの年齢は何歳ですか？」出力
// ↓
// 入力
// ↓
// 「Micaelさん、ご登録ありがとうございます！」出力
// ↓
// プログラム終了
echo '【39. 標準入力】' . PHP_EOL;
√
function input($type) {
  // 標準入力
  $value = trim(fgets(STDIN));

  // バリデーション
  if ($type === "name") {
    validateName($value);
  } elseif ($type === "age") {
    validateAge($value);
  }

  return $value;
}


function validateName($name) {
  if (empty($name)) {
    echo '名前を入力してください'. PHP_EOL;
    return stdInName();
  }
  if(!is_string($name) || is_numeric($name)) {
    echo '文字列を入力してください。'. PHP_EOL;
    return stdInName();
  }

  return $name;
}

function validateAge($age) {
  if (empty($age)) {
    echo '年齢を入力してください。'. PHP_EOL;
    return  stdInAge();
  }
  if (!is_numeric($age)) {
    echo '数値を入力してください。'. PHP_EOL;
    return  stdInAge();
  }
  return $age;
}
