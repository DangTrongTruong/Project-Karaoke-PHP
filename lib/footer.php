<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>
    <footer>
        <div class="wrapper">
            <section class="thongtinlienhe">
                <h3>Thông tin liên hệ</h3>
                <div class="line_footer"></div>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Địa chỉ: <?php diachi() ?></li>
                    <li><i class="fas fa-phone-square-alt"></i> Số điện thoại: <a href="tel:<?php hotline() ?>"><?php hotline() ?></a></li>
                    <li><i class="fas fa-envelope"></i> Email: <a href="mailto:<?php email_() ?>"><?php email_() ?></a></li>
                    <li><i class="fab fa-facebook"></i> <a href="https://<?php facebook(); ?>"><?php facebook() ?></a></li>
                </ul>
            </section>
            <section class="veko2">
                <h3>Về Ko2</h3>
                <ul>
                    <li><i class="fas fa-caret-right"></i> <a href="#">Trang chủ</a></li>
                    <li><i class="fas fa-caret-right"></i> <a href="">Giới thiệu</a></li>
                    <li><i class="fas fa-caret-right"></i> <a href="">Tin tức</a></li>
                    <li><i class="fas fa-caret-right"></i> <a href="">Liên hệ</a></li>
                </ul>
            </section>
            <section class="dieukhoansudung">
                <h3>Điều khoản sử dụng</h3>
                <ul>
                    <li><i class="fas fa-caret-right"></i> <a href="#">Tìm kiếm</a></li>
                    <li><i class="fas fa-caret-right"></i> <a href="">Giới thiệu</a></li>
                </ul>
            </section>
            <section class="dangkynhantin">
                <h3>Đăng ký nhận tin</h3>
                <ul>
                    <li>Đăng ký và nhận email cung cấp các thông tin mới nhất của WeSing về chương trình khuyến mại và ưu đãi từ đối tác</li>
                    <li><form action="" method="post"><input type="text" name="" id="" placeholder="Nhập địa chỉ email của bạn..."><button class="guitele" type="submit"><i class="fab fa-telegram-plane"></i></button></form></li>
                </ul>
            </section>
        </div>
    </footer>
    <div id="backtop">
        <i class="fas fa-angle-up"></i>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop()){
                    $('#backtop').fadeIn();
                }else{
                    $('#backtop').fadeOut();
                };
            });
            $('#backtop').click(function(){
                    $('html,body').animate({ scrollTop:0} , 200 );
            });
        });
    </script>

</body>
</html>