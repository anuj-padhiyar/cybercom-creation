//Arrow function
const years = [1990,1965,1982,1932];

//ES5
var age5 = years.map(function(el){
    return 2020-el;
});
console.log(age5);

//ES6
let age6 = years.map(el => 2020-el);
console.log(age6);

age6 = years.map((el, index) => `Age Element ${index+1}: ${2020-el}`);
console.log(age6);

age6 = years.map((el, index) => {
    const now = new Date().getFullYear();
    const age = now - el;
    return `Age Element ${index + 1}: ${age}`;
})
console.log(age6);

//ES5
var box5 = {
    color: 'green',
    position: 1,
    clickMe: function(){
        var self = this;
        document.querySelector('.green').addEventListener('click',function(){
            var str = 'This is box number '+self.position  + ' And it is ' + self.color;
            alert(str);
        })
    }
}
//box5.clickMe();

//ES6
const box6 = {
    color: 'green',
    position: 1,
    clickMe: function(){
        document.querySelector('.green').addEventListener('click',() => {
        var str = 'This is box number '+this.position  + ' And it is ' + this.color;
        alert(str);
        })
    }
}
//box6.clickMe();


function Person(name){
    this.name = name;
}

//ES5
Person.prototype.myFriends5 = function(friends){
    var arr = friends.map(function(el){
        return this.name + ' is friends with ' + el;
    }.bind(this));
    console.log(arr);
}
var friends = ['Bob', 'Jane', 'Mark'];
new Person('John').myFriends5(friends);

//ES6
Person.prototype.myFriends6= function(friends){
    const arr = friends.map(el => `${this.name} is friends with ${el}`);
    console.log(arr);
}
new Person('Mike').myFriends6(friends);

//Destructuring

//ES5
var john1 = ['john',26];
var name1 = john1[0];
var age1 = john1[1];

//ES6
const [name2,age2] = ['John',26];
console.log(name2);
console.log(age2);

const obj = {
    fName:'John',
    lName:'Smith'
};
const {fName, lName} = obj;
console.log(fName);
console.log(lName); 

const {fName: a, lName: b} = obj;
console.log(a);
console.log(b);

function calcAgeRetirement(year){
    const age = new Date().getFullYear() - year;
    return [age, 65-age];
}
const [age, retirement] = calcAgeRetirement(1990);
console.log(age);
console.log(retirement);

//Arrays in SE6

const boxes = document.querySelectorAll('.box');

//ES5
var boxesArr5 = Array.prototype.slice.call(boxes);
boxesArr5.forEach(function(cur){
    cur.style.backgroundColor = 'dodgerblue';
})

//ES6
const boxesArr6 = Array.from(boxes);
boxesArr6.forEach(cur => cur.style.backgroundColor = 'green');

//ES5
for(var i=0; i<boxesArr5.length;i++){
    if(boxesArr5[i].className === 'box blue'){continue;}
    boxesArr5[i].textContent = 'I changed to blue!';
}

//ES6
for (const cur of boxesArr6){
    if(cur.className.includes('blue')){continue;}
    cur.textContent = 'I changed to green!';
}

//ES5
var ages = [12,17,8,21,14,11];
var full = ages.map(function(cur){
    return cur >=18;
});
console.log(full);
console.log(full.indexOf(true));
console.log(ages[full.indexOf(true)]);

//ES6
console.log(ages.findIndex(cur => cur>=18));
console.log(ages.find(cur => cur>=18));

