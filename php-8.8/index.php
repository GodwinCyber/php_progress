<?php
    #while loop
    $family = array("Chukwudi", "Ogechukwu", "Arinzechukwu");
    $i = 0;
    while($i < sizeof($family))
    {
        echo $family[$i]. "<br>";
        $i++;
    }

    echo "<br><br>";
    $i = 1;

    while($i <= 10)
    {
        $j = $i * 5;
        echo $j. "<br>";
        $i++;
    }

    echo "<br><br>";
    $i = 0;
    while($i <= 20)
    {
        echo $i. "<br>";
        $i += 2;
    }
?>