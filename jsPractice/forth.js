//Function Constructor

var Person = function(name, birthYear, job){    //this is function constructor
    this.name = name;
    this.birthYear =birthYear;
    this.job = job;
}

Person.prototype.calculateAge = function(){
    console.log(2020-this.birthYear);
}
Person.prototype.lastName = 'smith';
var john = new Person('John',1990,'Teacher');
var jane = new Person('Jane',1969,'Designer');
var mark = new Person('mark',1957,'Retired');

john.calculateAge();
jane.calculateAge();
mark.calculateAge();

console.log(john.lastName);
console.log(jane.lastName);
console.log(mark.lastName);

//Object.create
var personProto = {
    calculateAge2: function(){
        console.log(2020-this.birthYear2);
    }
}

var john2 = Object.create(personProto);
john2.name2 = 'Jonh2';
john2.birthYear2 = 1992;
john2.job2 = 'teacher2';

var jane2 = Object.create(personProto, {
    name2 : {value:'Jane2'},
    birthYear2 : {value:1987},
    job2 : {value:'designer2'}
})

//Primitives vs objects

//primitives
var a = 25;
var b = a;
a = 76;
console.log(a,b);

//objects
var o1 = {
    name : 'object1',
    year : 2020
};
var o2 = o1;
o1.year = 2021;
console.log(o1.year,o2.year);

//function
var age = 21;
var obj = {
    name : 'Jonas',
    city : 'Lisbon'
};

function change(a,b){
    a = 30;
    b.city = 'San Francisco';
}


change(age,obj);
console.log(age);
console.log(obj.city);

//Passing functions as argument
var year2 = [1990,1965,1937,2005,2008];

function arrayCalc(arr, fn){
    var arrRes = [];
    for(var i=0;i<arr.length;i++){
        arrRes.push(fn(arr[i]));
    }
    return arrRes;
}

function calculateAge3(el){
    return 2020-el;
}

function isFullAge(el){
    return el >= 18;
}

function maxHeartRate(el){
    if(el >= 18 && el<=81)
        return Math.round(206.9 - (0.67 * el));
    else
        return -1;
}

var ages =  arrayCalc(year2,calculateAge3);
var fullAges = arrayCalc(ages, isFullAge);
var rates = arrayCalc(ages,maxHeartRate);


console.log(ages);
console.log(fullAges);
console.log(rates);


