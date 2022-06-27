<?php  
if($_SESSION['LOGIN_ADMIN_DECAL'] == true){
    header('Location:dashboard');
}
include_once "../libraryClass.php";
include_once "../action/authAdmin.php";
?>
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login Admin | DECALSYSTEM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">
        
        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!-- Costume css -->
        <link href="../assets/css/costume-css.css" id="app-style" rel="stylesheet" type="text/css" />
        <?php if($error){ ?>
        <script>
            alert("Username dan password anda salah");
        </script>
        <?php } ?>
    </head>

    <body class="bg-pattern">
        <div class="bg-overlay"></div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="">
                                    <div class="text-center">
                                        <a href="index.html" class="">
                                            <img src="../assets/images/logo-dark.png" alt="" height="24" class="auth-logo logo-dark mx-auto">
                                        </a>
                                    </div>
                                    <!-- end row -->
                                    <h4 class="font-size-18 text-muted mt-2 text-center">Welcome Back !</h4>
                                    <form class="form-horizontal" name="login" action="" method="post" onsubmit="return checkValid()">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label" for="username-admin">Username</label>
                                                    <input type="text" class="form-control" id="username-admin" name="usernameAdmin" value="<?= $_POST['usernameAdmin'] ?>" placeholder="Enter username" autocomplete="off">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="password-admin">Password</label>
                                                    <input type="password" class="form-control" id="password-admin" name="passwordAdmin" placeholder="Enter password" autocomplete="off">
                                                </div>

                                                <div class="d-grid mt-4">
                                                    <button class="btn btn-bluedark" type="submit" name="login-admin">Log In</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> Decal System. Crafted by galeriide.net</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="../assets/libs/jquery/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>

        <script src="../assets/js/app.js"></script>
        <script src="../assets/js/javascript.js"></script>

    </body>
</html>
