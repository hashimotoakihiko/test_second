<?php
//PHPの基礎2 課題 


//パターン1

//1.配列の宣言 
$int=array(1,2,3);
echo $int[0];
echo "<br>";


//2. 配列への値の追加 
//1の続き、 作成した配列の最後に整数型で、4という要素を追加しなさい。 
//配列の最後に追加するという書き方
$int=array(1,2,3,4);
echo $int[3];
echo "<br>";
echo "<br>";



//パターン2


//1.配列の宣言 
$int2=[1,2,3];
echo $int2[0];
echo "<br>";


//2. 配列への値の追加
//1の続き、 作成した配列の最後に整数型で、4という要素を追加しなさい。 
//配列の添え字(今回だと0から数えて最後は3になる)
$int2[]=4;
echo $int2[3];
echo "<br>";


//3. 配列の長さの確認 
//2の続き、 配列の長さを取得しなさい。 
$array = array(1,2,3,4);
echo count($array); 
echo "<br>";


//4. 配列の利用1 
//3の続き、 配列の値を利用するには配列に対して添え字(キー)を指定する。 
//添え字が0の要素を出力しなさい。 出力内容) 1 
echo $array[0];
echo "<br>";
//5. 配列の利用2 
//4の続き、 配列を使ってループ処理を書くことができる。
//(一般的にはforeach文またはfor文を利用す る) 
//foreach文を利用して、配列をループして出力しなさい。 
//出力内容) 1 2 3 4 
$array = array(1,2,3,4);
foreach($array as $value){ 
//   $value=$value*2; 
echo $value;
echo "<br>";
} 

//6. functionの基礎 
//次の変数名、値に則って、変数を宣言しなさい 
//※宣言した変数は、今後の設問で使用していくので、適宜動作確認で値を変更していくこと 

//例
// function 関数名(仮引数) 
// { 
//  # 処理 
// } 
// 関数名(実引数); 

//変数名 値 
$number3=5; 
$number4=3; 
$text2='ああああ';
$boolValue=true;


//7. functionの基礎2 
//6の続き、 次の表を確認し、functionを作成しなさい
//$number3 , $number4 を実引数として呼び出し、 結果を出力しなさい。 
//出力内容) bool(true) //　 $minuend=仮引数：1//$subtrahend=仮引数：2

//パターン１
// function isValueDifferenceEvenNumber($minuend,$subtrahend){
//     if (($minuend - $subtrahend)%2===0){
//         $boolValue=true;
//         return var_dump($boolValue);
//     }else if (($minuend - $subtrahend)%2===1) {
//         $boolValue=false;
//         return var_dump($boolValue);
//     }
// }
// echo isValueDifferenceEvenNumber($number3,$number4);

//パターン２
function isValueDifferenceEvenNumber($minuend,$subtrahend){
    if (($minuend - $subtrahend)%2===0){
        return '(bool)true';
         //偶数
    }else{
        return '(bool)false';
         //奇数
    }
    echo "<br>";
}
echo isValueDifferenceEvenNumber($number3,$number4);
echo "<br>";


//8. functionの基礎3 
//7の続き、 
//次の表を確認し、f$number3 を実引数として呼び出し、 
//結果を出力しなさい出力内容) 25 

function getSquareValue($multiplier){
        return $multiplier**2;
       
}
echo getSquareValue($number3);
echo "<br>";


//9. functionの基礎4 
//8の続き、 次の表を確認し、functionを作成しなさい 
//$boolValueを実引数として呼び出し、 
//結果を出力しなさい 出力内容) bool(false) 

function getInvertedBooleanValue($boolValue){
  if($boolValue){ 
      return 'bool(false)';
  }else{
      return 'bool(true)';
  }
  echo "<br>";
}
echo getInvertedBooleanValue($boolValue);
echo "<br>";


//10. functionの基礎5 
//9の続き、
//$number4 , $text2 を実引数として呼び出し、 
//結果を出力しなさい 出力内容) 
//ああああ 
//ああああ 
//ああああ

function outputTextSpecifiedCount ($specifiedCount,$text2) {
    if($specifiedCount<=0 || $specifiedCount>10){
        return '範囲外の入力値です';
    }else{
        for ($i=0;$i<$specifiedCount;$i++){
            echo $text2."<br>";
        }
    }
}
echo outputTextSpecifiedCount($number4,$text2);

?>