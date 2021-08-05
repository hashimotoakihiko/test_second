<?php
//PHPの基礎3 課題 
//1. クラスの作成 
        //乗り物を意味するクラス、class Vehicleを次の通り作成しなさい。 
 
// class Vehicle 
// { 
// // ここに処理を追加していきます。 
// } 


//2プロパティの追加 
        //1の続き、 class Vehicleの速度を表すプロパティ、$velocityを追加しなさい。 
        //$velocityには自由にアクセスできるように、アクセス修飾子をpublicとすることとし
        //初期値は0と する。 


//3. インスタンスの生成 
        //2の続き、 class Vehicleのインスタンスを生成しなさい。 
        //$vehicleという変数にインスタンスを代入すること。


//4. プロパティへのアクセス 
        //3の続き、$vehicleを使って$velocityにアクセスし、
        //10を代入し、出力しなさい。 出力 例)  10 
        
// class Vehicle { 
//     public $velocity=0;
// } 
// $vehicle = new Vehicle;
// // var_dump($vehicle);
// echo $vehicle->velocity=10;
// var_dump($vehicle->velocity);

//5. プロパティへのアクセス制限 
        //4の続き、$velocityのアクセス修飾子をprivateに変更しなさい。 
        //変更したら、ブラウザをリロード・エラーを確認し、4問目で追加した処理をコメントアウトするこ と。 

// class Vehicle { 
//     private $velocity=0;
// } 
// $vehicle = new Vehicle;
// // var_dump($vehicle);
// echo $vehicle->velocity=10;
// var_dump($vehicle->velocity);


//6. メソッドの追加1
        //5の続き、 class Vehicle内に、プロパティ$velocityを呼び出して、 
        //その値をセットするためのメソッド、setVelocity($velocity)を作成しなさい。 
        //引数は、プロパティ$velocityに代入するために利用する 
        //アクセス修飾子はpublicとし、$vehicleを使って呼び出し、50を渡しなさい。 

// class Vehicle { 
//     private $velocity=0;

//     public function setVelocity($velocity){
//         echo $velocity;
//     }
// } 
// $vehicle = new Vehicle;
// // var_dump($vehicle);
// // echo $vehicle->velocity=10;
// //var_dump($vehicle->velocity);
// echo $vehicle->setVelocity(50);


//7. メソッドの追加2 
        //6の続き、 class Vehicle内に、プロパティ$velocityを呼び出して、 
        //返り値として返すためのメソッド、getVelocity()を作成しなさい。 
        //アクセス修飾子はpublicとし、$vehicleを使って呼び出し、echoすること。 
        //出力例)  50 

// class Vehicle { 
//     private $velocity=0;
    
//     public function setVelocity($velocity){
//         echo $velocity;
//     }
    
//     public function getVelocity($velocity){
//         return $velocity;
//     }
// } 
// $vehicle = new Vehicle;
// echo $vehicle->setVelocity(50);
// echo "<br>";
// echo $vehicle->getVelocity(50);


//8. メソッドのアクセス制限 
        //7の続き、 6問目、7問目で作成したsetVelocity($velocity)とgetVelocity()の 
        //アクセス修飾子をprotectedに変更しなさい。 
        //変更したら5問目同様に確認し、$vehicleの処理を全てコメントアウトすること 


// class Vehicle { 
//     private $velocity=50;

//     protected function setVelocity($velocity){
//         echo $velocity;
//         echo "<br>";
//     }
//     protected function getVelocity(){
//         return $this->velocity;
//         echo "<br>";
//     }
   
// } 
// $vehicle = new Vehicle;
// // $vehicle->setVelocity(50);
// // echo $vehicle->getVelocity();


//9. クラスの継承1
        //8の続き、 class Vehicleを継承した、乗用車を意味するクラス、class Carを作成しなさい。 
        //プロパティは車体色を意味する$color、ナンバープレートを意味する$licensePlateとし、 
        //アクセス修飾子はprivateとする。

// class Vehicle { 
//     private $velocity=50;

//     protected function setVelocity($velocity){
//         echo $velocity;
//         echo "<br>";
//     }
    
//     protected function getVelocity(){
//         return $this->velocity;
//         echo "<br>";
//     }
// } 
// $vehicle = new Vehicle;
// // $vehicle->setVelocity(50);
// // echo $vehicle->getVelocity();


// class Car extends Vehicle {
//     private $color;
//     private $licensePlate;
    
// }


//10. コンストラクターの利用1 
         //9の続き、 コンストラクターとはインスタンス生成時に必ず呼ばれるメソッドのことである。 
         //class Carに__construct($velocity = 0, $color = null,$licensePlate = null) というメソッドを追加しなさい。 
         //続けてインスタンス生成を行い、$carという変数に代入しなさい。 

// class Vehicle { 
//     private $velocity=50;

//     protected function setVelocity($velocity){
//         echo $velocity;
//         echo "<br>";
//     }
    
//     protected function getVelocity(){
//         return $this->velocity;
//         echo "<br>";
//     }
// }

// $vehicle = new Vehicle;
// // $vehicle->setVelocity(50);
// // echo $vehicle->getVelocity();

// class Car extends Vehicle {
//     private $color;
//     private $licensePlate;
    
//     function __construct($velocity= 0, $color = null, $licensePlate = null){
        
//         echo 'インスタンスを生成しました'."<br>";
//         $this->color=$color;
//         $this->licensePlate=$licensePlate;
//         $this->velocity=$velocity;
        
//     }
   
// }
// $car = new Car();


//11. コンストラクターの利用2 
        //10の続き、 class Carのプロパティに次の通り値を設定したい。 
        //変数名 説明 
        //$velocity 「100」という数字 
        //$color 「black」という文字列 
        //$licensePlate 「あ12-34」という文字列 
        //インスタンス生成時に一緒に引数を渡すことができるので、渡して代入しなさい。 
        //$velocityの代入はclass VehicleのsetVelocity($velocity)を利用すること。 

// class Vehicle { 
//     private $velocity=0;

//     protected function setVelocity($velocity){
//         echo $velocity;
//         echo "<br>";
//     }
    
//     protected function getVelocity(){
//         return $this->velocity;
//         echo "<br>";
//     }
//     // function __construct($velocity = 0, $color = null,$licensePlate = null){
        
//     // }
// } 
// $vehicle = new Vehicle;
// // $vehicle->setVelocity(50);
// // echo $vehicle->getVelocity();


// class Car extends Vehicle {
//     private $color;
//     private $licensePlate;
    
//     function __construct($velocity = 0, $color = null,$licensePlate = null){
//         // parent::__construct();
        
//         echo 'インスタンスを生成しました'."<br>";
//         $this->color=$color;
//         $this->licensePlate=$licensePlate;
//         $this->velocity=$velocity;
//     }
    
//     public function setVelocity($velocity) {
//         echo '速度:'.$this->velocity;
//         echo "<br>";
//         echo '車体色:'.$this->color;
//         echo "<br>";
//         echo 'ナンバープレート:'.$this->licensePlate;
//     }
// }
// $car = new Car('100Km','black','あ12-34');
// $car->setVelocity($velocity);



//12. クラスの継承2 
    //11問目までに追加・設定してきたプロパティを全て出力するためのメソッド、
    //showProperties()を作成しなさい。 なお、showProperties()内での$velocityの取得はclass Vehicleの 
    //getVelocity()を利用すること。 各プロパティの装飾子はpublicで良いものとする。 
    //出力例) color: black licensePlate: あ12-34 velocity: 100


    class Vehicle { 
      private $velocity=0;
  
      protected function setVelocity($velocity){
          echo $velocity;
          echo "<br>";
      }
      
      protected function getVelocity(){
          return $velocity;
          echo "<br>";
      }
  } 
  $vehicle = new Vehicle;
  
  class Car extends Vehicle {
      private $color;
      private $licensePlate;
      
      function __construct($velocity = 0, $color = null,$licensePlate = null){
          echo 'インスタンスを生成しました'."<br>";
          $this->color=$color;
          $this->licensePlate=$licensePlate;
          $this->velocity=$velocity;
      }
      
      public function showProperties() {
          echo 'velocity(速度):'.$this->velocity;
          echo "<br>";
          echo 'color(車体色):'.$this->color;
          echo "<br>";
          echo 'licensePlate(ナンバープレート):'.$this->licensePlate;
      }
  }
  $car = new Car('100Km','black','あ12-34');
  $car->showProperties();

?>