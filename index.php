<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo 'My name is Shafiqul Islam'?>
    <?php echo "My name is Shafiqul Islam"?>
    <?php 
    $food ="Pizza";
    echo " I love to eat ". $food;
    $myAge=20;
    echo 'My age is '.$myAge . 'I read in class 10'.'<br>';
    $x = 20; 
    $y = 30;
    $z = $x +$y.'<br>';
   
    echo $z.'<br>';
    print $z.'<br>';
    print $food.'<br>';
    $foods =print('Drink');
    echo $foods;
    $name2 = 'Shafiqul Islam';
    $name3="My it's was the ";
    $age=30; //integer type
    $age3 =30.2;
    var_dump($age3);
    var_dump($age);
    var_dump($name2);
    $bo=false;
    var_dump($bo);
    $people=array('Shafiqul','Arman','Emran');
    $fruits = array('apple','banana','jackfruits','lychee');
    var_dump($fruits);
    $aim=null;
    var_dump($aim);
    //class in php
    class Phone {
        var $model;
        function phoneModel($number){
            global $model;
            $model=$number;
            echo 'this is '.$model.'<br>';

        }
    }
    $apple2 = new Phone;
    $apple2->phoneModel('iphone13');
    $apple2->phoneModel('iPhone14');
    // using Php String 
    echo strlen('My name is shafiqul Islam').'<br>';
    echo str_word_count('what is your name Shafiqul Islam ').'<br>';
    echo strpos('My name is shafiqul Isalm ','is');
     $test = strpos('what is your name','test');
     var_dump($test);
     // To replace the the String 
     echo str_replace("is" ,"are" ,"My name is  Shafiqul Islam").'<br>';
     // Numbe is Php
     $xx=10;
     $yy =20;
     echo (pi());
     echo (abs(4.5)).'<br>';
     echo (round(5.6)).'<br>';
     echo (rand(1,6));
     // Learning php constant
     define('a','20').'<br>';
     echo (a);
     define('A',18).'<br>';
     echo(A).'<br>';
     define('B',[
         'BMW',
         'ToyoTa',
         'Carala'
     ]);
     echo(B[0]);
     var_dump(B);
     // Conts always Global type
     // Learning PHP Operator
     $xxx=10;
     $yyyy=5;
     echo $xxx+$yyyy.'<br>';
     echo $xxx - $yyyy.'<br>';
     echo $xxx * $yyyy.'<br>';
     echo $xxx /$yyyy.'<br>';
     echo $xxx%$yyyy.'<br>';
     echo $xxx**$yyyy.'<br>';
     $xxx +=$yyyy;
     echo ($xxx).'<br>';
     var_dump($xxx==$yyyy).'<br>';
     var_dump($xxx != $yyyy).'<br>';
     var_dump($xxx>$yyyy);
     var_dump($xxx<$yyyy).'<br>';
     // Using if Conditional
     if(5<7){
         echo "My name is Shafiqul Islam".'<br>';
     }else{
         echo "Your Name Is Emarn";
     }
     if(5>7){
        echo "My name is Shafiqul Islam";
    }else{
        echo "Your Name Is Emarn".'<br>';
    }
    //  Using Switch 
    switch('red'){
        case 'red': echo 'this is red'.'<br>';
        break;
        case 'blue': echo ' i am not you';
        break;
        default:echo "this is default case ".'<br>';
    }
    switch('green'){
        case 'red': echo 'I am red';
        default : echo ' I am not red but I am default ';

    }
    // Using Loop in PHP
    $z = 0;
    while($z<=5){
        echo ' Shafiqul Islam'.'<br>';
        $z++;

    }

    // Using do while loop
    do{
        echo ' Emran Hossain '.'<br>';
        $z++;
    }while($z<=5);
    // Using For Loop

    for ($i=0; $i <10 ; $i++) { 
        echo 'my'.'<br>';
    }
    // Using of Function in php
    function test(){
        echo " my name is Imarn".'<br>';
    }
 test();
 // using function with Parameter
 function add($m){
     echo $m +$m;

 }
 add(5);
 // using date and time in php
 echo 'today is ' . date('d/m/y').'<br>';
 echo 'today is ' . date('y/m/d').'<br>';
 // for taking local time in php 
 date_default_timezone_set('Asia/Dhaka');
 echo 'today is ' . date('h:i:sa');

      
     


   

    
    
    /* this is the comment of php */
    
    
    
    
    
    ?>
</body>
</html>