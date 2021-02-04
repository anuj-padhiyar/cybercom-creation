function checkelement(){
    var name= document.form.name.value;
    var email= document.form.email.value;
    var subject= document.form.subject.value;
    var msg= document.form.msg.value;
    
    if(name==""){
        alert("Enter Name!");
        return false;
    }
    if(email==""){
        alert("Enter Email!");
        return false;
    }
    if(subject == ""){
        alert("Enter Subject!");
        return false;
    }
    if(msg == "" || msg.length>1000){
        alert("Message should be filled and maximum character is 1000!");
        return false;
    }
}