if(localStorage.getItem('admin') != null){
    alert("Admin Registerd!!");
    document.getElementById("register").style.display = "none";
}

function validAdmin(){
    var name = document.regform.name.value;
    var email = document.regform.email.value;
    var password = document.regform.pass.value;
    var confirmPassword = document.regform.conpass.value;
    var city = document.regform.city.value;
    var state = document.regform.state.value;
    var tnc = document.regform.tnc.checked;

    if(name == ""){
        alert("Enter Name!");
        return false;
    }
    if(email == ""){
        alert("Enter Proper Email!");
        return false;
    }
    if(password=="" || password.length<8){
        alert("Enter Password with minimum 8 Character Long.");
        return false;
    }
    if(password != confirmPassword){
        alert("Password and Confirm Password Not same!");
        return false;
    }
    if(city == "default"){
        alert("Select City!!");
        return false;
    }
    if(state == "default"){
        alert("Select State!!");
        return false;
    }
    if(!tnc){
        alert("Please Check our Term And Condition!");
        return false;
    }

    var admin = {
        name:document.regform.name.value,
        email:document.regform.email.value,
        password:document.regform.pass.value,
        city:document.regform.city.value,
        state:document.regform.state.value
    }
    localStorage.setItem('admin',JSON.stringify(admin));

}