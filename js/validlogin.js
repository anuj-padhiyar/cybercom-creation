function varifyLogin(){
    var email = document.loginform.email.value;
    var password = document.loginform.pass.value;

    var adminData = JSON.parse(localStorage.getItem('admin'));
    if(email == ""){
        alert("Enter Proper Email!");
        return false;
    }
    if(password=="" || password.length<8){
        alert("Enter Password with minimum 8 Character Long.");
        return false;
    }
    if(email != adminData.email && password != adminData.pass){
        alert("Email and Password Not Match!");
        return false;
    }

    sessionStorage.setItem("email",adminData.email);
    sessionStorage.setItem("name",adminData.name);
    sessionStorage.setItem("pass",adminData.pass);
}