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
<style>
    .login_X{
        height: 100vh !important;
    }
    #message{
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px;
    }
    .thongbao{
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 15px;
    }
</style>
<body>
<?php include('lib/header.php'); ?>
<div class="container-fluid login_X">
    <div class="row">
        <div class="col-md-4 col-sm-12"></div>
        <div class="col-md-4 col-sm-12 login_XXX">
                <div class="title">
                    <h2>Đăng ký</h2>
                </div>
                <div class="form-login">
                    <form action="" method="post">

                    <div class="item-form">
                    <i class="fa fa-user"></i>
                    <input type="text" name="username" placeholder="User" required>
                    </div>

                    <div class="item-form">
                    <i style="font-size: 20px;" class="fa fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required> 
                    </div>
                    
                    <div class="item-form">
                    <i class="fa fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password" onkeyup="check();" required> 
                    </div>

                    <div class="item-form">
                    <i class="fa fa-lock"></i>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" onkeyup="check();" required> 
                    </div>
                    <span id='message'></span>
                    <br>
                    <div class="submit-form">
                    <input type="submit" name="dangky" value="Đăng ký">
                    </div>
                    <?php if (isset($_POST['dangky'])) {
                        if ($_POST['confirm_password']==$_POST['password']) {
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $email = $_POST['email'];
                            dangky($username,$password,$email);
                        }else{
                            echo '<span class="thongbao"> vui lòng nhập mật khẩu khớp nhau </span>';
                        }
                        }
                    ?>
                    </form>
                </div>

                
        
        </div>
        <div class="col-md-4 col-sm-12"></div>
    </div>
</div>
    <script>
        var check = function() {
        if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'mật khẩu hợp lệ';
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'mật khẩu không hợp lệ';
        }
        }
    </script>
<?php include('lib/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>