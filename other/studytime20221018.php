<h1>問1<br></h1>
<?php
   // ①変数line1を宣言し、「あいうえお」で定義してください。
   $line1 = "あいうえお";
   // ②変数line2を宣言し、「かきくけこ」で定義してください。
   $line2 = "かきくけこ";
   // ③あいうえお
   //   かきくけこ
   //上記の形(あいうえおの次に改行してかきくけこを出力）で出力してください。
   //echoは１回してください。
   echo $line1."<br>".$line2."<br><br>";
   ?>

<h1>問2<br></h1>
<?php
  //「2004,1,2,0,3」を要素に持った配列arrayを宣言してください
   // 配列arrayの4番目の値を出力してください。
   // ※「配列arrayの4番目の値は〇〇」という形で出力してください。
   $array = [2004,1,2,0,3];
   echo "配列arrayの4番目の値は".$array[4];

   ?>

<h1>問3<br></h1>
<?php
   // 以下の変数を使用して、①〜⑤の実行結果を出力してください
   // ①りんご10個
   // ②ぶどう20個
   // ③ぶどう500円
   // ④さくらんぼ100円
   // ⑤さくらんぼ10個500円

   $a = "りんご";
   $b = "ぶどう";
   $c = "さくらんぼ";
   $d = 10;
   $e = 20;
   $f = 100;
   $g = 500;
   $h = "個";
   $i = "円";

   echo $a.$d.$h."<br>".$b.$e.$h."<br>".$b.$g.$i."<br>".$c.$f.$i."<br>".$c.$d.$h.$g.$i."<br>";

   ?>

<h1>問4<br></h1>
<?php
   // 変数aを宣言して1で定義してください
   // 変数bを宣言して2で定義してください
   // 変数cを宣言して1で定義してください
   $a = 1;
   $b = 2;
   $c = 1;
   //以下の実行結果になるよう比較演算子(=, >, <など)を使用しなさい
   // ① aとbを使って「false」を出力させてください。
   // ② aとcを使って「true」を出力させてください。
   //表示にはvar_dump()を使いましょう
   echo var_dump($a === $b)."<br>";
   echo var_dump($a === $c);
?>

<h1>問5<br></h1>
<?php
   // 以下のコードを実行すると実行時エラーになります。
   // 実行時エラーにならないようプログラムを修正してください。

   //問題文

   $array = [];
   $array[] = "のりおは";
   $array[] = "12";
   $array[] = "歳だ";
   echo $array[0] . $array[1] . $array[2];
