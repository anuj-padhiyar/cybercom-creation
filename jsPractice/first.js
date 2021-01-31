//Variable and DataTypes
console.log('Hello World');

var fName = 'smith';
var lName = 'steve'
var age = 31;

var fullAge = true;
console.log(fullAge);

var job;
console.log(job);
job = 'Crickter';
console.log(job);

//Naming Of Variable
var _5age = '5 year';
var $5age = '5 year';

/* 
Wrong Method 
var 5a = 'abc';
*/

//Variable Mutation and Type Coersion

//Type Coersion
console.log(fName + ' ' + age);
var isMarried = false;
console.log(fName + ' is a ' + job + ' and his age is ' + age + '. is He Married? ' + isMarried);


//variable Mutation
age =  "Thirty One";
job = "Police";
alert(fName + ' is a ' + job + ' and his age is ' + age + '. is He Married? ' + isMarried);

lName = prompt('What is your last name?');
console.log(fName + ' ' + lName);

//Bacic Operator
var now , yearMan , yearMan2;
now = 2020;
ageMan = 14;
ageMan2 = 35;

//Math Operator
yearMan = now - ageMan;
yearMan2 = now - ageMan2; 

console.log(yearMan);
console.log(now + 2);
console.log(now * 3);
console.log(now / 10);

//logical operator
var older = ageMan < ageMan2;
console.log(older);

//typeof operator
console.log(typeof older);
console.log(typeof ageMan);
console.log(typeof 'Hello');
console.log(typeof x);

//Operator Precedence

//Multiple Operator
var isFullAge = now - yearMan >= ageMan;
console.log(isFullAge);

//Grouping
var average = (ageMan + ageMan2) / 2;
console.log(average);

//Multiple assignment
var a,b;
a = b = (3 + 6) * 3 - 6;
console.log(a, b);

//more operator
var x = 3;
x *= 2;
console.log(x);
x += 5;
console.log(x);
x++;
console.log(x);
