<?php
    if ($_POST)
    {
        $family = array("Godwin", "Winifred", "King");
        $isKnown = false;

        foreach ($family as $value)
        {
            if ($value == $_POST['name'])
            {
                $isKnown = true;
                break;
            }
        }
        if ($isKnown)
        {
            echo "Hi there," . $_POST['name'] . "!";
            if ($_POST['age'])
            {
                echo "You are". $_POST['age'] ."years old <br>";
            }
        }
        else
        {
            echo "I do not know you!";
        }
    }
?>

<form method="post">
    <p>Please Enter your name</p>
    <p><input type="text" name="name"></p>
    <p><input type="text" name="age"></p>
    <p><input type="submit" value="submit"></p>
</form>