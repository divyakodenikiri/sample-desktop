
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $x=1; 

do {
  echo "The number is: $x <br>";
  echo "hello there!<br>";
  $x=$x+2;
}while($x<=10);
echo "<hr>";


for ($x = 5; $x <= 25; $x=$x+5) {
    echo "The number is: $x <br>";
}
$student = array("kavya","bavya","divya","akila","navya");
$marks = array(75, 80, 95, 99, 100);
$i=0;
  
  foreach ($student as $s)  {
 echo "name= $s marks=$marks[$i]<br>" ; 
 $i=$i+1;
 }

?>
</body>
</html>