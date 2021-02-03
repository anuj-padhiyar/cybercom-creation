function checkelement(){
    var name = document.form.entername.value;
    var password = document.form.enterpassword.value;
    var address = document.form.enteraddress.value;
    var game = document.querySelectorAll('input[type="checkbox"]');
    var select = document.form.select.value;
    var gender = document.form.gender.value;
    var file = document.form.file.value;

    if(name == "" || name==null){
        alert('Name is Mandatory!!');
        return false;
    }
    if(password.length<8 || password==""){
        alert('Password Required with minimum 8 character.');
        return false;
    }
    if(address == ""){
        alert('Address Required!!');
        return false;
    }
    if(!Array.prototype.slice.call(game).some(x => x.checked)){
        alert('Select any one Game!!');
        return false;
    }
    if(gender == ""){
        alert('Please Select Approriate Gender!!');
        return false;
    }
    if(select == 'select'){
        alert('Select age please!');
        return false;
    }
    if(file == ""){
        alert('Upload File!');
        return false;
    }
}