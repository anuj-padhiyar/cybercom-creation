//Functions returning Functions
function interviewQuestion(job){
    if(job === 'designer'){
        return function(name){
            console.log(name + ', can you please explain what is AI?');
        }
    }
    else if(job === 'teacher'){
        return function(name){
            console.log('What subject do you teach, '+name+'?');
        }
    }
    else{
        return function(name){
            console.log('Hello '+name+', what do you do?');
        }
    }
}

var teacherQuestion = interviewQuestion('teacher');
var designerQuestion = interviewQuestion('designer');

teacherQuestion('john');
designerQuestion('john');

interviewQuestion('teacher')('mike');

//Immediately Invoked Function Expression(IIFE)
function game(){
    var score = Math.random() * 10;
    console.log(score >= 5);
}
game();

//above example can be write...
(function(){
    var score = Math.random() * 10;
    console.log(score >= 5);
})();

(function(goodLuck){
    var score = Math.random() * 10;
    console.log(score >= 5-goodLuck);
})(5);

//Closure
function retirement(retirementAge){
    var a = ' Years left until retirement';
    return function(birthYear){
        var age = 2020-birthYear;
        console.log((retirementAge - age) + a);
    }
}

var retirementUS = retirement(66);
var retirementGermany = retirement(67);
var retirementIceland = retirement(68);

retirementUS(1992);
retirementGermany(1992);
retirementIceland(1992);

retirement(66)(1990);

function interviewQuestion2(job){
    return function(name){
        if(job === 'designer'){
            console.log(name + ', can you please explain what is AI?');
        }
        else if(job === 'teacher'){
            console.log('What subject do you teach, '+name+'?');
        }
        else{
            console.log('Hello '+name+', what do you do?');
        }
    }
}
interviewQuestion2('teacher')('John');

//Bind , call and apply
var john = {
    name : 'john',
    age : 22,
    job : 'teacher',
    presentation: function(style,timeOfDay){
        if(style == 'formal'){
            console.log('Good ' + timeOfDay + ', Ladies and gentlemen! I\'m ' + this.name + ', I\'m a ' + this.job + ' and I\'m '+this.age +' years old.');
        }
        else if(style === 'friendly'){
            console.log('Hey! What\'s up? I\'m ' + this.name + ', I\'m a ' + this.job + ' and I\'m '+this.age +' years old. Have a nice '+timeOfDay + '.');
        }
    }
};
var emily = {
    name : 'Emily',
    age : 35,
    job : 'designer'
};

john.presentation('formal','morning');

//call method
john.presentation.call(emily,'friendly','afternoon');

//apply method
//john.presentation.apply(emily,['friendly', 'afternoon']);

//bind method
//this method not call function like call but it create copy of it
var johnFriendly = john.presentation.bind(john,'friendly');
johnFriendly('morning');
johnFriendly('night');

var emilyFormal = john.presentation.bind(emily,'formal');
emilyFormal('afternoon');

var year = [2001,1965,1937,2005,2008];

function arrayCalc(arr, fn){
    var arrRes = [];
    for(var i=0;i<arr.length;i++){
        arrRes.push(fn(arr[i]));
    }
    return arrRes;
}

function calculateAge(el){
    return 2020-el;
}

function isFullAge(limit,el){
    return el >= limit;
}

var ages = arrayCalc(year, calculateAge);
var fullJapan = arrayCalc(ages, isFullAge.bind(this,20));
console.log(ages);
console.log(fullJapan);

//After that is in ES6

//let and const

//IN ES5
var name5 = 'Jane Smith';
var age5 = 23;
name5 = 'Jane Miller';
console.log(name5);


//IN ES6
const name6 = 'Jane Smith';
let age6 = 23;
//name6 = 'Jane Miller'; this gives error
console.log(name6);

//let is blocked Scoped and var is function Scoped
// IN ES5
function driverLicence5(passedTest){
    if(passedTest){
        var firstName = 'John';
        var yearOfBirth = 1990;
        console.log(firstName + ', born in ' + yearOfBirth + ', is now officially allowed to drive a car.');
    }
    console.log(firstName + ', born in ' + yearOfBirth + ', is now officially allowed to drive a car.');    //also work
}

driverLicence5(true);

//IN ES6
function driverLicence6(passedTest){
    let firstName;
    const yearOfBirth = 1990;
    if(passedTest){
        firstName = 'John'
        console.log(firstName + ', born in ' + yearOfBirth + ', is now officially allowed to drive a car.');
    }
    //we have to put let outside of the if
    console.log(firstName + ', born in ' + yearOfBirth + ', is now officially allowed to drive a car.');    
}

driverLicence6(true);

console.log(abc);   //undefined
var abc = 'abc';

//console.log(abc2);    give error of undefined
let abc2 = 'abc2';

let i = 23;
for(let i = 0 ; i < 5 ; i++){
    console.log(i);
}
console.log(i); //23  dosen't change variable of outside


//Blocks and IIFEs in SE6

//SE6
{
    const a = 1;
    let b = 2;
    var c = 3;
}
//console.log(a+b); cannot access of a and b
console.log(c);

//SE5
(function(){
    var c = 3;
})();
//console.log(c);   cannot access

//Strings in SE6
let firstName = 'John';
let lastName = 'smith';
const yearOfBirth = 1990;
function calcAge(year){
    return 2020-year;
}

//ES5
console.log('This is '+firstName+' '+lastName+'. He was born in '+ yearOfBirth+'. Today, he is '+calcAge(yearOfBirth)+' years old.');

//ES6
console.log(`This is ${firstName} ${lastName}. He was born in ${yearOfBirth}. Today, he is ${calcAge(yearOfBirth)} years old.`);

const n =  `${firstName} ${lastName}`;
console.log(n.startsWith('J'));
console.log(n.endsWith('th'));
console.log(n.includes('oh'));
console.log(firstName.repeat(5));
console.log(`${firstName} `.repeat(5));