<?php

function output($message)
{
    if (is_array($message)) {
        print_r($message);
    } else {
        echo $message . "\n";
    }
}

function vSpace($n)
{
    for ($i = 0; $i < $n; $i++) {
        echo "\n";
    }
}

$fruits = [
    'apple',
    'lemon',
    'grapefruit',
    'tomato',
    'banana',
];

output("Accessing element");

output("Element at index 3 is:" . $fruits[3]);

vSpace(3);


output($fruits);

vSpace(3);


output("Insert in array/list v1");

// Inserting item in array
array_push($fruits, 'cherry');
output($fruits);

vSpace(3);


output("Insert in array v2");
$fruits[] = 'kiwi';
output($fruits);

vSpace(3);

output("Remove last item from array");
$lastItem = array_pop($fruits);
output($fruits);
output("Last item poped was: " . $lastItem);


output("Remove item at index v1. WARNING KEYS GET BROKEN!");
unset($fruits[3]);
output($fruits);
output("Tomato is now missing");

vSpace(3);

output("Remove item at index v2. Grapefruit is missing");
array_splice($fruits, 2, 1);
output($fruits);


vSpace(3);

output("Iteration/Parsing using for");

for ($i = 0; $i < count($fruits); $i++) {
    output("Fruit at index " . $i . " is " . $fruits[$i]);
}

vSpace(3);

output("Iteration/Parsing using foreach.");

foreach ($fruits as $key => $fruit) {
    output("Fruit at index " . $key . " is " . $fruit);
}

vSpace(3);


output("Maps/Dictionaries");

$people = [
    'John'   => 22,
    'Martin' => 44,
    'Jack'   => 55
];

vSpace(3);

output("Accessing element");
output("Martin's age is: " . $people['Martin']);

vSpace(3);

output($people);

vSpace(3);


output("Insert in dictionary");
$people['Timmy'] = 10;
output($people);

vSpace(3);


output("Removing from dictionary. Lil' Timmy is out");
unset($people['Timmy']);
output($people);

vSpace(3);


output("to JSON");

// $jsonPeople = json_encode($people);
// JSON_PRETTY_PRINT will be used for nice display
$jsonPeople = json_encode($people, JSON_PRETTY_PRINT);

output($jsonPeople);

vSpace(3);

output("from JSON");
$someJSON = '{
  "Electronics": [
    "TV", "Microwave", "Phone", "Laptop" 
  ],
  "Shops": [
    "Amazon", "Apple", "Dell"
  ]
}';

output($someJSON);

$decodedJSON = json_decode($someJSON, true);
output($decodedJSON);



