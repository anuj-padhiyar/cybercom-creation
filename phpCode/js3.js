function checkelement(){
    var fname = document.form3.firstname.value;
    var lname = document.form3.lastname.value;
    var day = document.form3.day.value;
    var month = document.form3.month.value;
    var year = document.form3.year.value;
    var gender = document.form3.gender.value;
    var country = document.form3.country.value;
    var email = document.form3.email.value;
    var phone = document.form3.phonenumber.value;
    var password = document.form3.password1.value;
    var conpass = document.form3.password2.value;
    var agrement = document.getElementById('agree').checked;

    if(fname == "" || fname==null){
        alert('First Name is Mandatory!!');
        return false;
    }
    if(lname == "" || lname==null){
        alert(' Last Name is Mandatory!!');
        return false;
    }
    if(day == "Day" || month=="Month" || year=="Year"){
        alert('Please Select Date of Birth Field!!');
        return false;
    }
    if(gender == ""){
        alert('Please Select Approriate Gender!!');
        return false;
    }
    if(country == "Country"){
        alert("Please Select Country!!");
        return false;
    }
    if(email == "" || email == null){
        alert("Enter Email!");
        return false;
    }
    if(phone == "" || phone.length != 10){
        alert("Enter Phone number with 10 digit only");
        return false;
    }
    if(password.length<8 || password==""){
        alert('Password Required with minimum 8 character.');
        return false;
    }
    if(conpass != password){
        alert("Enter Same Password for confirm Password and Password Field");
        return false;
    }
    if(!agrement){
        alert('Please Check Our Agrement!!');
        return false;
    }
}