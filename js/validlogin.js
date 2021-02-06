function varifyLogin(){
    var email = document.loginform.email.value;
    var password = document.loginform.pass.value;

    var adminData = JSON.parse(localStorage.getItem('admin'));
    var userData = JSON.parse(localStorage.getItem('user'));
    if(email == ""){
        alert("Enter Proper Email!");
        return false;
    }
    if(password=="" || password.length<8){
        alert("Enter Password with minimum 8 Character Long.");
        return false;
    }
    if(email == adminData.email && password == adminData.pass){
        sessionStorage.setItem("email",adminData.email);
        sessionStorage.setItem("name",adminData.name);
        sessionStorage.setItem("pass",adminData.pass);
        document.loginform.action = "Dashboard.html";
        return true;
    }

    userData.foreach(function(cur){
        if(email == cur.email && password == cur.pass){
            sessionStorage.setItem("email",cur.email);
            sessionStorage.setItem("name",cur.name);
            sessionStorage.setItem("pass",cur.pass);

            
            document.loginform.action = "Sub-user.html";
            return true;
    }});

    alert("Email and Password Not Match!");
    return false;
    
}