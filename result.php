<?php

  //②フォームからのデータを受け取ります
  $my_name = $_POST['my_name'];
  $number = $_POST['number'];

  //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう
  date_default_timezone_set('Asia/Tokyo');
  echo date("Y-m-d H:i:s", time())."<br>";
  echo "名前は".$my_name."です。<br>";

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
  $ban = $number * mt_rand(1, 6);
  echo "番号は".$ban."です。<br>";

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
  echo "結果は";
  if ($ban >= 1 && $ban <= 10) {
    echo "凶";
  } elseif($ban >= 11 && $ban <= 15) {
    echo "小吉";
  } elseif($ban >= 16 && $ban <= 20) {
    echo "中吉";
  } elseif($ban >= 21 && $ban <= 25) {
    echo "吉";
  } elseif($ban >= 26 && $ban <= 36) {
    echo "大吉";
  } else {
    echo "残念";
  }
  echo "です。";
  ?>