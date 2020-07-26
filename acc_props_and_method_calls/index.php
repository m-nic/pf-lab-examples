<?php

function output($message)
{
    echo $message . "\n";
}


// To access an array element use []
$vegetables = [
    'carrot',
    'potato',
    'onion',
];

output($vegetables[1]); // potato

// To access an map element use []
$recipe = [
    'carrot' => 2,
    'potato' => 6,
    'onion'  => 1,
];

output($recipe['potato']); // 6


class Example
{
    public $x = 14;

    public static function sum($a, $b)
    {
        return $a + $b;
    }

    public function getXplusOne()
    {
        return $this->x + 1;
    }
}

$ex = new Example();

// Accesarea unei proprietati pe un obiect se face cu ->
output($ex->x); // 14

// Apelarea unei metode dintr-un obiect se face cu ->     $obiect->metoda(...$parametrii)
output($ex->getXplusOne()); // 15

// Apelul de metoda STATICA dintr o clasa se face cu NumeClasa :: metoda(...$parametrii)
output(Example::sum(3, 4)); // 7








