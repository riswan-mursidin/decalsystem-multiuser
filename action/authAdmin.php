<?php  
$adminDecalTB = new decalAdmin();
$error = false;
if(isset($_POST['login-admin'])){
    // SET VALUE FROM INPUT
    $usernameAdmin = $_POST['usernameAdmin'];
    $passwordAdmin = $_POST['passwordAdmin'];
    // METHOD FOR CHECK TB galeri admin
    $selectAdmin = $adminDecalTB->selectAdmin('checkForLogin', $usernameAdmin);
    // CHECK USERNAME IF EXISTS
    if($selectAdmin['nums'] > 0){
        foreach($selectAdmin['data'] as $row){
            $passwordDB = $row['password_admin'];
        }
        if(password_verify($passwordAdmin, $passwordDB)){
            $_SESSION['LOGIN_ADMIN_DECAL'] = true;
            header('Location:dashboard');
        }else{
            $error = true;
        }
    }else{
        $error = true;
    }

}
?>