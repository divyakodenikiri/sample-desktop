<?php
$user = "John";
if($user == "John"){
    echo "Hello John";
}
else{
    echo "i don,t know you";
}
echo "<br><br>";

$age = 23;
if($age >=21){
    echo "Here,have a beer!<br>";

}else{
    echo "Here,have a coco-cola!<br>";
}
echo "<br>";

if($age >=21 && $user == "John"){
  echo "welcome to the people named John over 21 club<br>";
}
else{
    echo "sorry, you aren't named John, or you're not 21 yet!<br>";
}

echo "<hr>";

if($user == "rob" || $age >=21){
    echo "Welcome!<br>";

}else{
    echo "Sorry you have to be named Rob, or at least 21 to enter";
}
//challenge solution
if($user == "rob" || $user == "John"|| $user == "ad"){
    echo "welcome to the society of awesome people!<br>";
}else{
    echo "sorry, but you aren't allowed in this club.<br>";
}

?>