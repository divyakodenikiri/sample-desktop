
 alert(Math.floor(Math.random() * 5));  
document.getElementById("checkguess").onclick = function(){
    alert("hi!");
    var randomnumber = Math.random();
    randomnumber = randomnumber * 6;
    randomnumber = Math.floor(randomnumber);
    if(document.getElementById("guess").value == randomnumber){
        alert("Well done! you got it!");

    }else{
        alert("Nope! The number was" + randomnumber);
    }
    }
//random number
var tweets = ["hi everyone", "i love cornflakes","hight night..!" ]
for(var i=0; i<3; i++){
    alert(tweets[i]);
   }





