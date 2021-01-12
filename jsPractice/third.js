//Hoisting

//also we can call here
function calculateAge(year){
    console.log(2020-year);
}
calculateAge(1970);

//We cannot call function expression before its declaration
var retirement = function(year){
    console.log(65-(2020-year));
}
retirement(1966);

//variables

console.log(age);   //undefined
var age=19;
console.log(age);   //19

function abc(){
    console.log(age);   //undefined
    var age = 33;
    console.log(age);   //33
}
abc();
console.log(age);      //19

//Scoping
var a = 'hello';
first();

function first(){
    var b='Hi!';
    second();

    function second(){
        var c='Hey!';
        third();
    }
}

function third(){
    var d = 'Camila';
    console.log(a+d);   //cannot use b and c
}

//this keyword
//console.log(this);

calculateAge2(1999);
function calculateAge2(year){
    console.log(2020-year);
    console.log(this);
}

var jasprit = {
    name : 'Jasprit',
    lastName: 'Bumrah',
    birthYear : 1987,
    calculateAge3: function(){
        console.log(this);
        console.log(2020-this.birthYear);

        function innerFun(){
            console.log(this);
        }
        innerFun();
    }
};
jasprit.calculateAge3();

var hardik = {
    name : 'Hardik',
    lastName : 'pandya',
    birthYear: 1985
};

hardik.calculateAge3 = jasprit.calculateAge3
hardik.calculateAge3();

//Objects and Properties

//Object Literal
var allen = {
    fName : 'Berry',
    lName : 'allen',
    birthYear : 1994,
    family: ['Flash','James','Tornod','Yakk'],
    job : 'Police',
    isMarried : false
};

console.log(allen.job);
console.log(allen['lName']);
var a = 'birthYear';
console.log(allen[a]);

allen.job = 'Worker';
allen['isMarried'] = true;
console.log(allen);

//new object syntex
var john = new Object();
john.fName = 'John';
john.birthYear = 1984;
john['lName'] = 'smith';
console.log(john);

//Object and methods
var jakrin = {
    fName : 'jakrin',
    lName : 'mashalee',
    birthYear : 1984,
    family: ['Flash','James','Tornod','Yakk'],
    job : 'Police',
    isMarried : false,
    calcAge: function(){
        this.age = 2020-this.birthYear;
    }
};

//jakrin.age = jakrin.calcAge();
jakrin.calcAge();
console.log(jakrin);


//Loops and iteration

//for loop
for(var i=0;i<4;i++){
    console.log(i);
}

var year = ['2000',2002,2005,2018,'2020'];
for(var i=0;i<year.length;i++){
    console.log(year[i]);
}

// //while loop
var i=0;
while(i<3){
    console.log(year[i]);
    i++;
}

//continue and break statement
for(var i=0;i<year.length;i++){
    if(typeof year[i] !== 'string') continue;
    console.log(year[i]);
}

for(var i=0;i<year.length;i++){
    if(typeof year[i] !== 'string') break;
    console.log(year[i]);
}

//looping backwards
for(var i=year.length-1;i>=0;i--){
    console.log(year[i]);
}