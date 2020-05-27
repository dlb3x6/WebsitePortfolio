<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to PHP-Land</title>
    </head>
    <body>
        <?php
            $firstname = "";
            $lastName = "";
            $switch = 0;
            $numberForFactorial = 0;
            $string = "";
            $n1 = 0;
            $n2 = 0;

            foreach ($_GET as $key => $value) {
                if ($key == "firstName"){
                    $firstName = $value;
                }
                if ($key == "lastName"){
                    $lastName = $value;
                }
                if ($key == "numberForFactorial"){
                    $numberForFactorial = $value;
                    $switch = 1;
                }
                if($key == "string"){
                    $string = $value;
                    $switch = 2;
                }
                if($key == "n1"){
                    $n1 = $value;
                }
                if($key == "n2"){
                    $n2 = $value;
                    $switch = 3;
                }
            }

            if ($switch == 0){
                echo "Hello $firstName $lastName!";
            }
            if($switch == 1){
                echo "The factorial for $numberForFactorial is ";
                for($i=$numberForFactorial; $i>=2; $i--){
                    $numberForFactorial *= $i-1;
                }
                echo "$numberForFactorial.";
            }
            if($switch == 2){  
                $length = strlen($string); //https://www.php.net/manual/en/function.strlen.php
                echo "The reverse of $string is ";
                for ($i=($length-1); $i>=0; $i--)   
                {  
                    echo $string[$i];
                } //https://www.javatpoint.com/php-reverse-string
                echo ".";
            }
            if($switch == 3){
                $n2Prev = $n2;
                echo "The sum of squares between $n1 and $n2 is ";
                for ($i=$n2; $i>=$n1; $i--){
                    $n2 += pow($i,2); //https://stackoverflow.com/questions/7465968/calculating-sum-of-squares-in-php & https://www.php.net/manual/en/function.pow.php
                } 
                $n2 -= $n2Prev;
                echo "$n2."; 
            }

        ?>
    </body>
</html>