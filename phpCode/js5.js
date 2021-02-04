function checkelement(){
    var email = document.form.email.value;
    var pass = document.form.pass.value;

    if(email == ""){
        alert("Enter Email");
        return false;
    }
    if(pass.length<8 || pass == ""){
        alert("Enter Password with 8 character Long.");
        return false;
    }
}