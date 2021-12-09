<?php

 // age assinment 
function ageName ($name, $year){
  $age = 2021-$year;
  echo " Hi {$name}, you are {$age} year old ";

}

ageName("Md Sobuj Mia", 2003);

// currency assinment 
function currency ($amount, $type ){
     if ($type == 'dollar') {
        $btd = $amount * 86.7;
        return "$ {$amount} = {$btd} BDT ";
     }elseif ($type == 'euro') {
      $btd = $amount * 109;
        return "$ {$amount} = {$btd} BDT ";
     }elseif ($type == 'pound') {
      $btd = $amount * 115;
      return "$ {$amount} = {$btd} BDT ";
     }
}

echo currency(200, 'dollar');

// uppercse and lowearcase function

function duihate($type, $str){
    if ($type == 'b') {
      return "<span style='text-transform:uppercase;'>" . $str . "</span>";
    }elseif ($type == 'c') {
      return "<span style='text-transform:lowearcase;'>" . $str . "</span>";
}else {
  return " do not mach type";
}
}

$text = " i am a laravel developer";
echo duihate("b", $text);

// revers function 
function revers($revers){

     return "<bdo dir=\"rtl\">{$revers}</bdo>";

}
$tex = "My name ia sobu mia and i am a php developer";
echo revers($tex);

// age 
function age($age){
  if ($age >= 1 && $age <= 5) {
    return "hi BABY your {$age} year ";
  }elseif ($age >= 6 && $age <= 10) {
   return " hi boy your {$age} year";
  }elseif ($age >= 11 && $age <= 19) {
    return " hi Teenager your {$age} year";
   }elseif ($age >= 20 && $age <= 30) {
    return " hi young man your {$age} year";
   }elseif ($age >= 31 && $age <= 60) {
    return " hi old man your {$age} year";
   }else {
     return "do not mach ";
   }


}
echo age(16);
function marks($marks){
  if ($marks >= 1 && $marks <= 32) {
    $GPA =0;
    $GREADE = 'F';
    return " your GPA = {$GPA} point GREADE = {$GREADE} ";
  }elseif ($marks >= 33 && $marks <= 39) {
    $GPA =1;
    $GREADE = 'd';
    return " your GPA = {$GPA} point GREADE = {$GREADE} ";
  }elseif ($marks >= 40 && $marks <= 49) {
    $GPA =2;
    $GREADE = 'c';
    return " your GPA = {$GPA} point GREADE = {$GREADE} ";
   }elseif ($marks>= 50 && $marks <= 59) {
    $GPA =3;
    $GREADE = 'b';
    return " your GPA = {$GPA} point GREADE = {$GREADE} ";
   }elseif ($marks >= 60 && $marks <= 69) {
    $GPA =3.5;
    $GREADE = 'a-';
    return " your GPA = {$GPA} point GREADE = {$GREADE} ";
   }
   elseif ($marks >= 70 && $marks <= 79) {
    $GPA =4;
    $GREADE = 'a';
    return " your GPA = {$GPA} point GREADE = {$GREADE} ";
   }
   elseif ($marks >= 80 && $marks <= 100) {
    $GPA =5;
    $GREADE = 'a+';
    return " your GPA = $GPA} point GREADE = {$GREADE} ";
   }else {
     return "do not mach ";
   }
}
echo marks(50);
echo "<br>";
echo marks(65);
echo "<br>";
echo marks(75);




// hading function

function hading($type, $text, $font = 'arial' , $color='red', $font_size ='40px', $aline = 'center'){
   
  return "<$type style=\" font-family:{$font}; font-size:{$font_size }; color:{$color}; text-align:{$aline};\"> {$text}</$type>";
}

echo hading( 'h1', 'my name is a md sobuj mia', 'arial', 'red', '100px','center');


// fungtion

function myName($type, $length, $width = null){

if ($type == 'r') {
    $rectengle= $length * $width ;
    return  "area of this rectengle" . $rectengle;
}elseif( $type == 's'){

  $Square= $length * $length;
  return  "area of this  Square " . $Square;
}elseif( $type == 'c'){

  $Square = ( M_PI * ($length * $length)) ;
  return  "area of this cricle " . $Square;
}



}

echo myName('c','30','');

// bmi function
echo "<br>";
function bmi( $weight, $height ){
   $bmi = $weight / ($height * $height);
   if ($bmi < 18.5) {
       return "this is a considered underwight. ";
   }elseif ($bmi < 25) {
       return  "this is normal wight.";
   }elseif ($bmi < 30) {
      return "this is a considered overwight. ";
   }
}


echo bmi('50', '6');

//img function


function img($src, $width = '300', $heigh = '300')
{
  echo "<img style=\"width:$width; height:$heigh; \" src=\"$src\" alt=\"\">";
}


img('my.JPG', '300', '300');