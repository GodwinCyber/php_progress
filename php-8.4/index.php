<?php

#data types of php and variable declarations and initializations

    #string data type
    $name = "John";

    define("message", "Hello Friend!");

    echo "<p>My name is $name</p>";

    echo "<p>I could like ". message ."</p>";

    #integer data type
    $number = 45;

    $calculator = $number * 2 / 3;

    echo "<p>The result of the calculation is: $calculator</p>";
    
    #boolean data type
    $mybool = true;

    echo "<p>this is my bolean and is true: $mybool</p>";

    echo $mybool? "true" : "false";
    echo "<br>";

    #douuble variable
    #calling $name from line 6
    $var = "name";
    echo $$var;
?>