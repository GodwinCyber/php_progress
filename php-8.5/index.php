<?php
#creating array
$myArray = array("Godwin", "Winifred", "King");
print_r($myArray);

echo $myArray[2];

echo "<br><br>";

$myFoodArray = array();

$myFoodArray[0] = "Rice";
$myFoodArray[1] = "Beans";
$myFoodArray[2] = "Soup";
$myFoodArray[] = "Yam";

$myFoodArray["MyFavoriteFood"] = "Beans";
print_r($myFoodArray);

$language = array(
    "Nigeria" => "English",
    "France" => "French",
    "Canada" => "English",
    "China" => "Chinese"
);

echo "<br><br>";
print_r($language);
#delete FRANCE from the country
echo "<br><br>";
unset($language["France"]);
print_r($language);

#countr the number of country left
echo "<br><br>";
echo sizeof($language);
?>