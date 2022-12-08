<?php
    
        //Associative Arrays
  $tscore = array("shanu"=>"60", "akila" => "75", "navya"=>"90" ,"kavya" => "100", "bavya"=>"120");
  
  foreach ($tscore as $x => $score){
 echo "Mark=". $x. " scored ".$score;
 echo "<br>";
 }

  //forloop
    echo "<hr>";
    for($i = 0; $i <=10; $i++) {
        echo $i. "<br>";
    }
    echo "<hr>";

    //Reverse forloop
    for($i = 10; $i >= 0; $i--) {
        echo $i . "<br>";
    }

/*$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $val) {
      echo "$x = $val<br>";
    }*/
?>