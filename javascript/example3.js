
    var myArray = new Array();
    myArray[0]= "pizza";
    myArray[1] = "chocolate";
    var tweets = ["Morning everybody!", "I love cofee!"];
    //alert(tweets[1]);//
    //document.write(tweets[1]);//
    tweets.push("Back to work!");
    alert(tweets[2]);
    tweets.splice(1, 1, "Cornflakes for breakfast!", "Num Num");
    console.log(tweets);

    var x = 1;
    if(x == 1){
        alert("x is 1||");
    }else{
        alert("x is not 1||");
    }

    document.getElementById("checkMagicword").onclick = function(){
        var MagicwordEntered = document.getElementById("Magicword").value;
        //alert(MagicwordEntered);
        var Magicword = "abracadabra";
        if(MagicwordEntered == Magicword){
            alert("you got it!");
        }else{
            alert("hope,try again!");
        }
    }


    



