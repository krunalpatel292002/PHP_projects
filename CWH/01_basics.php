<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class= "container" >
        This my first php website
        <br>
         <?php
         define('PI',3.14);
            echo "hello woorld and this is my printed using php";
            //secret algo.
            /*This is multiline comment
            This is multiline comment 
            This is multiline comment
            This is multiline comment */
            // Lorem, ipsum dolor.
            echo "<br>";
            $variable1 = 34;
            $variable2=45;
            echo $variable1;
            echo "<br>";
            Echo  $variable2;
            echo "<br>";
            echo $variable1 + $variable2;
            echo "<br>";
         
            // Operators in PHP
            echo "The value Of Variable 1+ Variable 2 is:";
            echo "<br>";   

            // Arithmatic Operators
            echo $variable1 + $variable2;
            echo "<br>";
            
            echo $variable1 - $variable2;
            echo "<br>";
            
            echo $variable1 * $variable2;
            echo "<br>";
            
            echo $variable1 / $variable2;
            echo "<br>";
            
            // Assignment Operators
            echo "<h1>Assignment Operators</H1>";
            $newvar= $variable1;
            Echo "The newvar value is ";
            echo $newvar;
            echo "<br>";

            $newvar += 1;
            Echo "The newvar value is ";
            echo $newvar;
            echo "<br>";

            $newvar -= 3;
            Echo "The newvar value is ";
            echo $newvar;
            echo "<br>";

            $newvar *=2;
            Echo "The newvar value is ";
            echo $newvar;
            echo "<br>";

            $newvar /=5;
            Echo "The newvar value is ";
            echo $newvar;
            echo "<br>";

            // Comparison Operators
            echo "<h1>Comparison Operators</H1>";
            echo "The Value of 1==4 is :";
            echo var_dump(1==4);
            echo "<br>";

            echo "The Value of 1!=4 is :";
            echo var_dump(1!=4);
            echo "<br>";

            echo "The Value of 1>=4 is :";
            echo var_dump(1>=4);
            echo "<br>";

            echo "The Value of 1<=4 is :";
            echo var_dump(1<=4);
            echo "<br>";

            // Increament Operators
            echo "<h1>Increament Operators</H1>";
            echo $variable1++;
            echo "<br>";

            echo $variable1--;
            echo "<br>";

            echo ++$variable1;
            echo "<br>";

            echo --$variable1;
            echo "<br>";

            // Logical Operators
            // and(&&)
            // or(||)
            // xor
            // !
            echo "<h1>Logical Operators</H1>";
            $var= (True) && (false);
            echo var_dump($var);
            echo "<br>";

            $var= (True || false);
            echo var_dump($var);
            echo "<br>";

            $var= (True) xor (false);
            echo var_dump($var);
            echo "<br>";

            $var= (True) != (false);
            echo var_dump($var);
            echo "<br>";
        ?>
       <?php

        // Data types in  PHP
        echo "<h1>Data Types</H1>"; 
        // 1. String
        // 2. Integer
        // 3. Float
        // 4. Boolean
        // 5. Array
        // 6. Object
        $var1 = "This is a String";
        echo var_dump($var1);
        echo "<br>";

        $var2 = 2;
        echo var_dump($var2);
        echo "<br>";

        $var3 = 2.9;
        echo var_dump($var3);
        echo "<br>";

        $var4 = True;
        echo var_dump($var4);
        echo "<br>";

        $var1 = [1, 2.9 , "Krunal"];
        echo var_dump($var1);
        echo "<br>";
        
        echo PI;
?>
        <br>
           <?php
            // echo "hello woorld again";
            //secret algo.
            
        ?>  
        </div>
</body>
</html>