<?php
$myArray = array("John","Ed","Sally","Tom");
print_r($myArray);
echo "<br>";
echo $myArray[2];

echo "<br><br>";
$foodarray[0]="pizza";
$foodarray[1]="hamburger";
$foodarray[2]="tea";
$foodarray[3]="fudge";


$foodarray["myfavouritefood"] = "ice cream";
print_r($foodarray);

$languages = array(
    "France" => "Franch",
    "Germany" => "German",
    "USA" => "English"
);
echo "<br><br>";
print_r($languages);
echo "full<br>";
unset($languages["Germany"]);
echo "<br><br>";
print_r($languages);

echo "<br><br>";
$languages["India"] = "Hindi";
print_r($languages);

echo "<br><br>";
echo sizeof($languages);
echo "<hr>";

//challenge solution:
$movies = array("kantaara", "mugarumale", "paramathma", "annabond");
print_r($movies);
echo sizeof($movies);



?>