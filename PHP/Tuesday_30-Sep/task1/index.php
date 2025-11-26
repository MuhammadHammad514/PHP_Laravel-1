<?php
echo "Hello, World!";
$text= "Muhammad Hammad";
echo'<Br><h2> String : My name is '.$text.'<br></h2>';
$num=2;
$no=4;
$fnum = 5.5;
echo "<br><h2>Float Number: ".$fnum."</h2>";
echo "<br> sum of $num and $fnum =  ". $num + $fnum;
$istrue = true;
echo "<br>Boolean:  $istrue";
$arr=[1,2,3,4,5,6,7,8,9];
echo "<br><h2> Array </h2> ";
for($i=0; $i<count($arr); $i++){
    echo "<h4> arr[".($i+1)."] is ".$arr[$i]."</h4>";
};
$array=array("name"=>"Hammad", "age"=>19, "course"=>"BSCS");
echo "<br> Associative Array <br>";
echo( $array["name"]." is ".$array["age"]." years old and he is studying ".$array["course"]);
echo "<br> Data Types in PHP <br>";
var_dump($istrue);
var_dump($num);
var_dump($fnum);    
var_dump($text);

print('<br> This is printed using print function');
print("<br><h2> $text</h2>");
print('<br> Sum of '.$num.' and '.$fnum.' = '.($num+$fnum));  
echo "<br> <h3>build-in functions in PHP</h3>"; 
?>