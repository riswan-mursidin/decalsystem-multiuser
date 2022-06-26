function checkValid(){
    if(document.login.usernameAdmin.value == '' || document.login.passwordAdmin.value == ''){
        alert("Username dan password anda salah");
        return false;
    }
}