<?php

echo "<h2> Functions in PHP </h2>";

function sum($num1,$num2){
    $sum=$num1+$num2;
return $sum;
}

echo "The sum of 45 and 78 is ".sum(45,78);
function addString($str1,$str2) {
    $sum=$str1.$str2;
    return $sum;
}
echo "<br>The sum of two String is ".addString('Muhammad','Hammad');
function myFunction() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, "myFunction");
$myArr[2]();
function NumArray( $arr1,$arr2){
    if($arr1 == $arr2){
        return 1;
    }
    else{
        return 0;
    }

};
echo "<br> <h2> Array_map </h2>";
$array1=[
    'ali','ahmad','hammad'
];
$array2=[
    'ali','shaikh','mirza'
];

$array3=array_map("NumArray",$array1,$array2);
print_r($array3);
echo"<br> <h2> explode function </h2>";
$text="My name is Hammad";
print" <br> Original String is : $text <br>";
$explode_array=explode(" ",$text);
print_r($explode_array);
echo"<br> <h2> implode function </h2>";
print_r($explode_array);
$text=implode(" ",$explode_array);
print" <br> Original String is : $text <br>";

echo"<h4>Foreach loop  </h4> <br>";
 foreach($explode_array as $value){
    echo "$value <br>";
 }
 $arr=[
    "name"=>"Hammad",
    "age"=>19,
    "city"=>"Karachi"
 ];
 echo"<h4>Foreach loop by using key and values  </h4> <br>";
 foreach($arr as $key=>$value){
    echo "$key : $value <br>";
 }
function ValidateInput($value){
    if(filter_var($value,FILTER_VALIDATE_INT)){
        return 1;
    }
    else{
        return -1;
    }
}
function SanitizeInput($value){
    $value=filter_var($value,FILTER_SANITIZE_STRING);
    return $value;
}
$value='<p>hammad<>';
if(ValidateInput($value)==1){
    echo "<br>$value is a Valid Value";
}
else{
    echo "<br>$value Not a valid Value";
}
$sanitzedinput=SanitizeInput($value);
echo "<br> Sanitzed Input is : $sanitzedinput";
$num=11;
if(ValidateInput($num)==1){
    echo "<br>$num is a Valid Value";
}
else{
    echo "<br>$num Not a valid Value";
}



?>
