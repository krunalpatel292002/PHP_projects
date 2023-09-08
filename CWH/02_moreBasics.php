<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial2</title>
</head>
 <style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: pink;
        margin: auto;
        padding: 23px;
    }
 </style>
<body>
    <div class="container">
        <h1>Let's learn about PHP!</h1>
        This is a Container</div>
        <p>The Party status Is Here:</p>
    <?php 
    echo "<br>";
    echo "<H1>If-Else Statement</H1>";
        $age = 18;
        if($age>18){
            echo "You can go For Party";
        }
        elseif($age=18)
        {
            echo "Congrates You are Now Elegible For Party!";
        }
        else{
            echo "You can not go For Party";
        }
        
        echo "<br>";
        echo "<H1>Arrays</H1>";
        $languages = array("python", "C++", "PHP", "NodeJs");
        echo $languages[0];
        echo "<br>";
        echo "<H1>Loops in PHP</H1>";
        $a = 0;
        while ($a <=10)
        {
            echo "The value of a is from while loop: ";
            echo $a;
            $a++;
            echo "<br>";
        }
        //Iterative loops
        echo "<br>";
        $a = 0;
        while ($a < count($languages)){
            echo "<br>The value of language is from the while loop: ";
            echo $languages[$a];
            $a++;
        }
        echo "<br>";
        //Iterative arrays in PHP using do while loop
        $a = 0;
        do {
            echo "<br>The value of language is from the do while loop: ";
            echo $a;
            $a++;
        }while ($a < 10);
        echo "<br>";

        // do while loop always execute the code min. 1 times.
        $a = 20;
        do {
            echo "<br>The value of language from the do while loop is: ";
            echo $a;
            $a++;
        }while ($a < 10);

        //for loop
        echo "<br>";
    $a = 0;
    for ($a=0; $a < 10; $a++) { 
        echo "<br>The value of language  from the for loop is: ";
        echo $a;
    }
     //main concept in for loop 
     //if 1st condition is false then whole code will not be executed Once.
     echo "<br>";
     $a = 0;
     for ($a=200; $a < 10; $a++) { 
         echo "<br>The value of language  from the for loop is:";
         echo $a;
     }

     //foreach loop
     foreach ($languages as  $value) {
        echo "<br>The value of language from the foreach loop is: ";
        echo $value;
     }
     echo "<br>";
     function print5()
     {
        echo "FIVE";
     }
     print5();
     print5();
     print5();
     print5();
     function print_number($numbers)
     {
        echo "<br>Your number is: ";
        echo $numbers;
     }
     print_number(45);
     print_number(453);
     print_number(5);
     ?>
</body>
</html>