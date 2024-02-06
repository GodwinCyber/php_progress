<?php
    $family = array("Godwin", "Winifred", "King");

    foreach($family as $key => $value)
    {
        $family[$key] = $value ." Chukwuma";
        echo "Array items ". $key ." is ". $value ." <br>";
        echo "updated as $family[$key] <br>";
    }

    echo "<br><br>";
    echo "Regular for loop <br><br>";
    for ($i = 0; $i < sizeof($family); $i++)
    {
        echo $family[$i]. "<br>";
    }

    #challenge, create a coutdown from 9 to 0
    #breaking each line.
    echo "<br><br>";
    for ($i = 9; $i >= 0; $i--)
    {
        echo $i. "<br>";
    }
?>