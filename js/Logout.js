function Logout(){
    sessionStorage.removeItem('email');
    sessionStorage.removeItem('name');
    sessionStorage.removeItem('pass');
}

document.getElementById("dynamicname").innerHTML = sessionStorage.getItem('name');