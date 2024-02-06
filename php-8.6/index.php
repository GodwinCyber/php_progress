<?php
#if statement
    $user = "john";
    if ($user == "john")
    {
        echo "welcome john";
    }
    else
    {
        echo "I do not know you";
    }
    echo "<br><br>";

    $age = 19;
    if ($age >= 21)
    {
        echo "You can have a glass of beer <br>";
    }
    else
    {
        echo "You are underage, have a bottle of coca-cola <br>";
    }
    if ($age >= 21 && $user == "john")
    {
        echo "Welcome to the club of beer John <br>";
    }
    else
    {
        echo "Your name is not on the list <br>";
    }
    if ($age <= 21 || $user == "john" || $user == "ed" || $user == "rob")
    {
        echo "Welcome to the society of Awesome people <br>";
    }
    else
    {
        echo "Sorry, your name is not on the list <br>";
    }
?>