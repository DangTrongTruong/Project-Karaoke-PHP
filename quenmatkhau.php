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
    <title>Quên mật khẩu</title>
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
                <h2>Quên mật khẩu</h2>
            </div>
            <div class="form-login">
                <form action="" method="post">

                <div class="item-form">
                <i class="fa fa-user"></i>
                <input name="email" type="text" placeholder="Email" required>
                </div>

                <div class="submit-form">
                <input type="submit" name="quenmatkhau" value="Gửi">
                </div>
                </form>
            </div>

            <div class="sigup-now">
            Đã nhớ mật khẩu?  <a href="login.php">Đăng nhập</a>
            </div>
    
            </div>';
            if (isset($_POST['quenmatkhau'])) {
                $email = $_POST['email'];
                $connect = connect_db();
                $passwordnew = rand();
                $sql = "UPDATE user1 SET password = md5($passwordnew) WHERE email = '$email'";
                $result = mysqli_query($connect,$sql);
                if ($result) {
                    $email_to = $email;
                    $subject = "Mật khẩu mới của bạn | KoKo Karaoke";
                    $message = '
                                <html>
                                    
                                    <img src="https://i.ibb.co/PgGhfS9/logo-new.png" width="200px" alt="">
                                    <h2>Mật khẩu mới của bạn | KoKo Karaoke</h2>
                                    <div class="content">
                                        <i><p>Tài Khoản: '.$username.' <b></b></p></i>
                                        <i><p>Mật khẩu mới của bạn là: '.$passwordnew.' <b></b></p></i>
                                        <br>
                                        <br>
                                        <a href="http://localhost/web_karaoke/login.php">Đăng nhập ngay</a>
                                    </div>
                                </html>';

                    $headers = "From:contact.kokokaraoke@gmail.com \r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type: text/html\r\n";
                    mail($email_to, $subject, $message, $headers);
                    header('location: index.php');
            }
        }}
         ?>
        
        <div class="col-md-4 col-sm-12"></div>
    </div>
</div>
<?php include('lib/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>