<?php
    if (is_numeric($_GET['number']) &&
        $_GET['number'] > 0 &&
        $_GET['number'] == round($_GET['number'], 0))
    {
        $theNumber = $_GET['number'];
        $i = 2;
        $isPrime = true;
        
        while ($i < $theNumber / 2)
        {
            if ($theNumber % $i == 0)
            {
                $isPrime = false;
            }
        $i++;
        }
        if ($isPrime)
        {
            echo "<p>".$theNumber." is a prime number</p>";
        }
        else
        {
            echo "<p>".$theNumber. "is NOT a prime number</p>";
        }
    }
    else if ($_GET)
        {
            echo "<p>Please Enter a positive number:Integer.</p>";
        }
?>
<p>Please a whole Number. </p>
<form method="GET">
    <input name="number" type="text">
    <input type="submit" value="Go!">
</form>