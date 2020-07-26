function output(message) {
    console.log(message);
}


// To access an array element use []
let vegetables = [
    'carrot',
    'potato',
    'onion',
];

output(vegetables[1]); // potato

// To access an map element use []
recipe = {
    'carrot': 2,
    'potato': 6,
    'onion': 1,
};

output(recipe['potato']); // 6

// To access an map element also .
output(recipe.potato); // 6



class Example {
    x = 14;
    static sum(a, b) {
        return a + b;
    }

    getXplusOne() {
        return this.x + 1;
    }
}

ex = new Example();

// Accesarea unei proprietati pe un obiect se face cu ->
output(ex.x); // 14

// Apelarea unei metode dintr-un obiect se face cu .    obiect.metoda(...parametrii)
output(ex.getXplusOne()); // 15

// Apelul de metoda STATICA dintr o clasa se face cu NumeClasa.metoda(...parametrii)
output(Example.sum(3, 4)); // 7
