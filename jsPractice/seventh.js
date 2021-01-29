//classes

//ES5
var Person5 = function(name, yearOfBirth, job){
    this.name = name;
    this.yearOfBirth = yearOfBirth;
    this.job = job;
}

Person5.prototype.calculateAge = function(){
    var age = new Date().getFullYear() - this.yearOfBirth;
    console.log(age);
}

var john5 = new Person5('John', 1990, 'teacher');

//ES6
class Person6
{
    constructor(name,yearOfBirth,job)
    {
        this.name = name;
        this.yearOfBirth = yearOfBirth;
        this.job = job;
    }
    calculateAge()
    {
        var age = new Date().getFullYear() - this.yearOfBirth;
        console.log(age);
    }
    static greeting(){
        console.log('Hey There!');
    }
}
const john6 = new Person6('John', 1990, 'teacher');
Person6.greeting();


//subclasses

//ES5
var Athlete5 = function(name,yearOfBirth, job, olymicGames, medals){
    Person5.call(this, name, yearOfBirth, job);
    this.olymicGames = olymicGames;
    this.medals = medals;
}

Athlete5.prototype = Object.create(Person5.prototype);
Athlete5.prototype.wonMedal = function(){
    this.medals++;
    console.log(this.medals)
}

var johnAthlete5 = new Athlete5('John', 1992, 'swimmer', 3, 10);
johnAthlete5.calculateAge();
johnAthlete5.wonMedal();

//ES6
class Athlete6 extends Person6
{
    constructor(name, yearOfBirth, job, olymicGames, medals){
        super(name, yearOfBirth, job);
        this.olymicGames =olymicGames;
        this.medals = medals;
    }
    wonMedal(){
        this.medals++;
        console.log(this.medals);
    }
}

const johnAthlete6 = new Athlete6('John', 1992, 'swimmer', 3, 10);
johnAthlete6.wonMedal();
johnAthlete6.calculateAge();