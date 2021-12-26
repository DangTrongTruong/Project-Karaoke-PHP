<!DOCTYPE html>
<html lang="en">
<?php ob_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/login.css">
    <title>login</title>
</head>
<body>
<?php include('lib/header.php'); ?>
<div class="container-fluid login_X">
    <div class="row">
        <div class="col-md-4 col-sm-12"></div>
        <?php
        if (!isset($_SESSION['taikhoan'])) {
            echo '<div class="col-md-4 col-sm-12 login_XX">
            <div class="title">
                <h2>Đăng nhập</h2>
            </div>
            <div class="form-login">
                <form action="" method="post">

                <div class="item-form">
                <i class="fa fa-user"></i>
                <input name="username" type="text" placeholder="User" required>
                </div>

                <div class="item-form">
                <i class="fa fa-lock"></i>
                <input name="password" type="password" placeholder="Password" required> 
                </div>
                
                <p class="forgot"><a href="">Forgot Password?</a></p>

                <div class="submit-form">
                <input type="submit" name="login" value="Đăng nhập">
                </div>
                </form>
            </div>

            <div class="sigup-now">
            Chưa có tài khoản?  <a href="signup.php">Đăng ký ngay</a>
            </div>
    
            </div>';
            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                login($username,$password);
            }
        }else{
            echo '<span style="color:#fff; text-align: center;">Bạn đã đăng nhập</span>';
            header('location: cpanel/extras-profile.php');
        }
         ?>
        
        <div class="col-md-4 col-sm-12"></div>
    </div>
</div>
<?php include('lib/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>