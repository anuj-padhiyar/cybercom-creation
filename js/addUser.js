function addUser(){
    var name = document.adduserform.uname.value;
    var pass = document.adduserform.upass.value;
    var email = document.adduserform.uemail.value;
    var birthdate = document.adduserform.ubirthdate.value;

    if(name == ""){
        alert("Enter Name!");
        return false;
    }
    if(email == ""){
        alert("Enter Proper Email!");
        return false;
    }
    if(pass=="" || pass.length<8){
        alert("Enter Password with minimum 8 Character Long.");
        return false;
    }
    if(birthdate == ""){
        alert("Enter Birthdate!!");
        return false;
    }

    var user = {
        uname:name,
        uemail:email,
        upass:pass,
        ubirthdate:birthdate,
        ulogin:null,
        ulogout:null
    }
    var olduser = [];
    if(localStorage.getItem('user') != null){
        olduser = JSON.parse(localStorage.getItem('user'));
    }
    olduser.push(user);
    localStorage.setItem('user',JSON.stringify(olduser));

    var table = document.getElementById('userData');
    var rows = table.rows.length;
    var row = table.insertRow(rows);
    
    var column1 = row.insertCell(0);
    column1.innerHTML = user.uname;

    var column2 = row.insertCell(1);
    column2.innerHTML = user.uemail;

    var column3 = row.insertCell(2);
    column3.innerHTML = user.upass;

    var column4 = row.insertCell(3);
    column4.innerHTML = user.ubirthdate;

    var column5 = row.insertCell(4);
    var db = user.ubirthdate.split("/");
    column5.innerHTML = getAge(new Date(db[2],db[1],db[0]));

    var column6 = row.insertCell(5);
    var a = document.createElement('a');
    var link = document.createTextNode("Edit"); 
    a.href = "User.html";
    a.onclick = "updateUser()";
    column6.innerHTML = document.createElement('a');
}


function printUser(){
    var table = document.getElementById('userData');
    var rows,row;
    var users = JSON.parse(localStorage.getItem('user'));
    if(users == null){
        users = 0;
    }
    
    for(var i=0;i<users.length;i++){
        rows = table.rows.length;
        row = table.insertRow(rows);

        var column1 = row.insertCell(0);
        column1.innerHTML = users[i].uname;
    
        var column2 = row.insertCell(1);
        column2.innerHTML = users[i].uemail;
    
        var column3 = row.insertCell(2);
        column3.innerHTML = users[i].upass;
    
        var column4 = row.insertCell(3);
        column4.innerHTML = users[i].ubirthdate;
    
        var column5 = row.insertCell(4);
        var db = users[i].ubirthdate.split("/");
        column5.innerHTML = getAge(new Date(db[2],db[1],db[0]));
    
        var column6 = row.insertCell(5);
        var a = document.createElement('a');
        var link = document.createTextNode("Edit"); 
        a.href = "User.html";
        a.onclick = "updateUser()";
        column6.innerHTML = document.createElement('a');
    }
}

function getAge(bdate){
    var ms = Date.now() - bdate.getTime();
    var dt = new Date(ms);
    return Math.abs(dt.getUTCFullYear()-1970);
}
