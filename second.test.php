<?php
// Your code here!
$str ="ok";
echo $str;
?>

<?php
//1. 基本的な変数の宣言 
    //次の変数を宣言しなさい 
    
//整数(int)型 $number 5
$number =5;

//文字列(String)型 $text ああああ
$text = 'ああああ';

//論理(Boolean)型 $flg true
$flg = true; 

//null型 $test null
$test = null;



//2. 基本的な変数の出力 
    //1の続き、 1で宣言した、変数を出力なさい。 
    //$number $text 
    //出力内容) 
    //5 
    //ああああ 
    
echo $number;
echo "<br>";
echo $text;
echo "<br>";



//3. 変数の情報の出力 
    //2の続き、 1で宣言した、次の変数を出力なさい。 
    //$flg $test 
    //出力内容) 
    //bool(true) 
    //NULL 

var_dump($flg);
var_dump($test);


//4. 基本的な計算 
    //数値の変数を2つ宣言しなさい 変数名と値は次の通りとする。 
    //$number1 = 10; $number2 = 5; 
    //以上、2つの変数を用いて次の結果を 変数に代入し、出力しなさい

$number1 = 10;
$number2 = 5; 

echo $number1+5;
    echo "<br>";
echo $number2;
    echo "<br>";
echo $number2*10;
    echo "<br>";
echo $number1-8;
    echo "<br>";
echo $number1%10;
    echo "<br>";


//5. if文の利用 
$time = time();

if($time%2===0) {
    echo '偶数です';
}else{
    echo '奇数です';
}
echo "<br>";


//6. for文の基礎 
//1以上10以下の数字をfor文を使って出力

for($i=1;$i<=10;$i++){
    echo $i;
}
echo "<br>";


//7. for文の基礎２ 
//6の続き、 35以上46未満の数字をfor文を使って出力しなさい
//出力内容) 35 36 37 38 39 40 41 42 43 44 45 

for($i=35;$i<46;$i++){
    echo $i;
}
echo "<br>";


//8. for文と条件式の組み合わせ2
//7の続き、 100未満の自然数の内、3の倍数の数字のみを出力しなさい 
//出力内容) 
//3 6 9 12 15 18 21 24 27 30 33 36 39 42 45 48 51 54 57 60 63 66 69 72 75 78 81 84 8 7 90 93 96 99 

for($i=1;$i<100;$i++){
    if($i%3==0){
    echo $i;
    }
}
echo "<br>";


//9. for文を使用した計算 
//100未満の自然数の内、「3または7の倍数」の数値は何個あるか 個数を出力しなさい
//出 力内容) 
//43個 


$count=0;

for($i=1;$i<100;$i++){
    if($i%3==0||$i%7==0){
        $count++;
    }
    
}
echo $count;
echo "<br>";


//10. for文を使用した計算2 
//9の続き、 100未満の自然数の内、「3または7の倍数」の5番目に大きい数を出力しなさい 
//出力 内容) 91 


$count=0;

for($i=100;$i>=1;$i--){
    if($i%3===0||$i%7===0){
        $count++;
    }
    
    if($count >=5 ){
        echo $i;
        break;
    }
    
}
echo "<br>";


//11. for文を使用した計算3 
//10の続き、 100未満の自然数の内、「３または7の倍数」の合計値を出力しなさい 
//出力 内容) 2208 


$sum=0;

for($i=1;$i<=100;$i++){
    if($i%3===0||$i%7===0){
        $sum+=$i;
    }
}
echo $sum;
echo "<br>";


//12. ループの終了 
//1000から2000までの間で1の桁が7の数字の最初の数字を求めて出力しなさい for文を使用し出力しな さ い break文を使った場合、使わない場合とでそれぞれ作成すること 
//出力内容) 1007 


//break有
for($i=1000;$i<=2000;$i++){
    if($i%10===7){
    echo $i;
        break;
    }
}
echo "<br>";

//break無
$result=false;

for($i=1000;$i<=2000 && !$result;$i++){
    if($i%10==7){
        $result=$i;
    }
}
echo $result;
echo "<br>";

//break無 番外編
for($i=1000;$i<=1010;$i++){
    if($i%10===7){
    echo $i;
        continue;
    }
}
echo "<br>";


//13. switch文
//5の続き、 switch文を利用し、次のように出力を行いなさい 出力内容) 
//偶数なら ... 偶数です 
//奇数なら ... 奇数です 

switch($time%2==0) {
    case'偶数なら':
    echo '偶数です';
    break;

    default:
    echo '奇数です';
    break;
}

echo "<br>";


//14. 図形の表示 
//次の図形を再現しなさい 
//0 
//00 
//000 
//echo "0"; echo "00"; echo "000"; の様にする問題ではない。for文を一個以上使用すること

for ($i=1;$i<4;$i++){
    for($j=0;$j<$i;$j++){
          echo '0';
    }
    echo "<br>";
}
?>