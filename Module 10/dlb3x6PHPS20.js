$(function(){
    console.log("DOM has loaded.");
    
    $("#functionSubmit").click(function(){
        if ($("#phpFunctions").val() == "greeting"){
            $(".forms").hide();
            $("#greeting").show(400);
        }   
        if ($("#phpFunctions").val() == "factorial"){
            $(".forms").hide();
            $("#factorial").show(400);
        } 
        if ($("#phpFunctions").val() == "reverseString"){
            $(".forms").hide();
            $("#reverseString").show(400);
        } 
        if ($("#phpFunctions").val() == "sumSquares"){
            $(".forms").hide();
            $("#sumSquares").show(400); //https://api.jquery.com/show/
        } 
    });
    
    $(".submit").click(function(){
        if($("#phpFunctions").val() == "factorial"){
            if($("#factorialInput").val() < 1){
                window.alert("Number must be greater than or equal to 1");
                return false;
            } 
            if($.isNumeric($("#factorialInput").val()) == false){ //https://www.tutorialrepublic.com/faq/how-to-check-whether-a-value-is-numeric-or-not-in-jquery.php
                window.alert("Enter numbers only");
                return false;
            }
        }
        if($("#phpFunctions").val() == "sumSquares"){
            if($.isNumeric($("#number1").val()) == false || $.isNumeric($("#number2").val()) == false){
                window.alert("Enter numbers only");
                return false;
            }
            if($("#number1").val() >= $("#number2").val()){
                window.alert("n1 must be smaller than n2");
                return false;
            }
            if($("#number1").val() < 1 || $("#number2").val() < 1){
                window.alert("All numbers must be greater than or equal to 1");
                return false;
            }
        }
    });
    
    $(".clear").click(function(){
        $(".textField").val(""); //https://api.jquery.com/val/
    });
});