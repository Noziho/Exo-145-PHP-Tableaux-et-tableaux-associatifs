<?php

// Premiere ligne

$fruits = array("Apple", "Banana", "Orange");
echo count($fruits)."<br>";
echo $fruits[1] ;
//Deuxieme ligne

$age = array("nom" => "Peter", "age" => "35", "nom2" => "Ben","age2" => "37", "nom3" => "Joe","age3" =>  "43");

echo "<br><br>Ben is " .$age["age"]. "years old";

foreach ($age as $key => $value) {
    echo "<br><br> $key --> $value" ."<br>";
}



//Troisieme ligne

$colors = ["red", "green", "blue", "yellow"];
sort($colors);
foreach ($colors as $values) {
    echo "<br>".$values ."<br>";
}

rsort($colors);
foreach ($colors as $values) {
    echo "<br>".$values ."<br>";
}

// Quatrieme ligne

$age = array("Peter" => "35", "Ben" => "37", "Joe" =>"43");
ksort($age);
foreach ($age as $key => $values) {
    echo "$key = $values" ."<br>";
}






