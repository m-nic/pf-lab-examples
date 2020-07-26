function output(message) {
    if (message instanceof Object) {
        console.log(JSON.stringify(message, null, 2));
    } else {
        console.log(message);
    }
}

function vSpace(n) {
    for (let i = 0; i < n; i++) {
        console.log("\n");
    }
}

let fruits = [
    'apple',
    'lemon',
    'grapefruit',
    'tomato',
    'banana',
];

output(fruits);

vSpace(3);


output("Accessing element");

output("Element at index 3 is:" + fruits[3]);

vSpace(3);

output("Insert in array/list");

// Inserting item in array
fruits.push('cherry');
output(fruits);

vSpace(3);


output("Remove last item from array");
let lastItem = fruits.pop();
output(fruits);
output("Last item poped was: " + lastItem);


output("Remove item at index v1. WARNING will leave null");
delete fruits[3];
output(fruits);
output("Tomato is now missing");

vSpace(3);

// this is to fix the nulls
fruits.filter(x => x);

output("Remove item at index v2. Grapefruit is missing");
fruits.splice(2, 1);
output(fruits);


vSpace(3);

output("Iteration/Parsing using for");

for (let i = 0; i < fruits.length; i++) {
    output("Fruit at index " + i + " is " + fruits[i]);
}

vSpace(3);

output("Iteration/Parsing using foreach equivalent. For IN ");

for (let ind in fruits) {
    output("Fruit at index " + ind + " is " + fruits[ind]);
}

vSpace(3);

output("Iteration/Parsing using foreach equivalent. For of ");

for (let fruit of fruits) {
    output("Fruit " + fruit);
}

vSpace(3);


output("Maps/Dictionaries");

let people = {
    'John': 22,
    'Martin': 44,
    'Jack': 55
};

output(people);

vSpace(3);



output("Accessing element");

output("Age of Martin is: " + people['Martin'] + ' . For sure it is ' + people.Martin);

vSpace(3);

output("Insert in dictionary");
people['Timmy'] = 10;
output(people);

vSpace(3);


output("Removing from dictionary. Lil' Timmy is out");
delete people['Timmy'];
output(people);

vSpace(3);


output("to JSON");

// jsonPeople = json_encode(people);
// null, 2 will be used for nice display
let jsonPeople = JSON.stringify(people, null, 2);

output(jsonPeople);

vSpace(3);

output("from JSON");
let someJSON = `{
  "Electronics": [
    "TV", "Microwave", "Phone", "Laptop" 
  ],
  "Shops": [
    "Amazon", "Apple", "Dell"
  ]
}`;

output(someJSON);

let decodedJSON = JSON.parse(someJSON);
output(decodedJSON);



