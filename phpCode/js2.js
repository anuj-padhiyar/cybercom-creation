function checkelement(){
    var fname = document.form2.name.value;
    var password = document.form2.password.value;
    var gender = document.form2.gender.value;
    var day = document.form2.day.value;
    var month = document.form2.month.value;
    var year = document.form2.year.value;
    var game = document.getElementsByName('games[]');
    var mstatus = document.form2.status.value;
    var agrement = document.getElementById('agrement').checked;

    if(fname == "" || fname==null){
        alert('Name is Mandatory!!');
        return false;
    }
    if(password.length<8 || password==""){
        alert('Password Required with minimum 8 character.');
        return false;
    }
    if(gender == ""){
        alert('Please Select Approriate Gender!!');
        return false;
    }
    if(!Array.prototype.slice.call(game).some(x => x.checked)){
        alert('Select any one Game!!');
        return false;
    }
    if(mstatus == ""){
        alert('Please Select Status!!');
        return false;
    }
    if(!agrement){
        alert('Please Check Our Agrement!!');
        return false;
    }
}