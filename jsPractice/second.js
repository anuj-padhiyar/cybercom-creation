var first = 'Anuj';
var civilStatus = 'single';

//if else statement
if(civilStatus === 'married'){
    console.log(first + ' is married');
}else{
    console.log(first + ' will hopefully marry soon :)');
}

//boolean Logic
var age = 23;
if(age < 13){
    console.log(first + ' is a boy.');
}else if(age >=13 && age<20){
    console.log(first + ' is a teenager.');
}else if(age >=20 && age<30){
    console.log(first + ' is a young man.');
}else{
    console.log(first + ' is a man.');
}

//ternary operator
//age >= 18 ? console.log(first + ' drinks beer.') : console.log(first + ' drinks juice.');
var drink = age>=18 ? 'beer' : 'juice';
console.log(first + ' drinks ' + drink);

//switch statement
var job = 'driver';
switch(job){
    case 'worker':
        console.log(first + ' working in factory.');
        break;
    case 'teacher':
        console.log(first + ' teaches kids how to code.');
        break;
    case 'driver':
        console.log(first + ' drive the car.');
        break;
    default:
        console.log(first + ' is jobless now.');
        break;
}

//Truthy and Falsy Values
// falsy value : undefined, null, 0, '', NaN
// truthy value : NOT falsy value

var month;
month = 10;
if(month){
    console.log('Variable is Defined');
}else{
    console.log('Variable is Not Defined')
}

//Equality Operators(=== and ==)
// === comapare both datatypes and value
// == compare only Values

if(month == '10'){
    console.log('Don\'t compare Datatype');
}
if(month === '10'){
    console.log('Compare Datatype');
}

//Functions
function showYear(age){
     return 2020-age;
}

var yearAnuj = showYear(age);
var yearJohn = showYear(29);
console.log(yearAnuj,yearJohn);


//Function Expressions
var WhatDoYouDo = function(first, job){
    switch(job){
        case 'worker':
            return first + ' working in factory.';
        case 'teacher':
            return first + ' teaches kids how to code.';
        case 'driver':
            return first + ' drive the car.';
        default:
            return first + ' is jobless now.';
    }
}

console.log(WhatDoYouDo('Anuj','worker'));
console.log(WhatDoYouDo('John','driver'));

//Expression return some value or boolean value but statement return nothing
//expression : function, condition
//statement : while, if-else

//Arrays
var names = ['Mark', 'Steve', 'Carry'];
var years = new Array(1990, 1992, 2003);

console.log(names);
console.log(names.length);

//mutate array data
names[1] = 'Jenny';
names[5] = 'Maroon';
names[names.length] = 'Mary';
console.log(names);

//Different Data Types
var john = ['John', 'smith',1992,'teacher', false];

john.push('blue');
john.unshift('Mrs.');
console.log(john); 

john.pop();
john.shift();
console.log(john);
console.log(john.indexOf('smith'));
console.log(john.indexOf(1111));   //indexOf Return -1