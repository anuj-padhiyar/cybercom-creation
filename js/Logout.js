function Logout(){
    sessionStorage.removeItem('email');
    sessionStorage.removeItem('name');
    sessionStorage.removeItem('pass');
}

if(sessionStorage.getItem("name") == null){
    window.location.href = "Login.html";
}

document.getElementById("dynamicname").innerHTML = sessionStorage.getItem("name");
