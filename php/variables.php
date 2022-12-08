<?php
$name = "John";
echo "<p>my name is $name</p>";
define("MESSAGE", "hello friends");
echo "<p>I'd like to say".MESSAGE."</P>";

$mynumber = 45;
$calculation = $mynumber * 31 / 97 + 4;
echo "The result of the calculation is ". $calculation ."<br>";

$myBool = false;

if($myBool)
{
    echo "true";

}else{
    echo "false";
}

echo "<p>This statement is true?". $myBool."</p>";
echo $myBool? "true" : "false";
echo "<br>";

$variablename = "name";
echo $$variablename;
?>