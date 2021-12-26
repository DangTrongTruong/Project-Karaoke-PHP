<!DOCTYPE html>
<html lang="en">
<?php require('lib/lib.php'); session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/header.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/foundation.min.js"></script>
    <!-- <title>Header</title> -->
</head>
<body>
    <section class="header-top">
            <div class="container-fluid">
                <div class="row pos">
                    <div class="col-md-4 col-sm-12 col-xs-12 logo">
                            <a class="image" href="index.php">
                                <img src="<?php logo() ?>" alt="logo">
                            </a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 search" >
                        <div class="box">
                            <form class="sbox" action="timkiem.php" method="GET">
                            <input class="stext" type="text" name="tukhoa" placeholder="Tìm kiếm phòng hát...">
                            <button class="sbutton" type="submit" name="btnTimkiem">
                            <i class="fa fa-search"></i>
                            </button>
                            </form>
                        </div>
                        <?php if (isset($_POST['btnTimkiem'])) {header('location: timkiem.php');} ?>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 hotline">
                            <div class="row col-12">
                              <div class="login col-3">
                                <?php
                                if (isset($_SESSION['taikhoan'])) {
                                  echo '<span><form method="POST" action=""><a href="cpanel/extras-profile.php">'.$_SESSION['taikhoan'].'</a><button onclick="myFunction();" id="thoat" type="submit" name="thoat"><i class="fas fa-sign-out-alt"></i></button></form></span>';
                                }
                                else{
                                  echo '<span><a href="login.php">Đăng nhập</a></span>';
                                } 
                                if (isset($_POST['thoat'])) {
                                    unset($_SESSION['taikhoan']);
                                    header("Refresh:0");
                                }
                                ?>
                              </div>
                              <div class="dienthoai col-9">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <span>Hotline: <?php hotline() ?></span>
                              </div>
                            </div>

                    </div>
                </div>
            </div>
    </section>
    <section class="header-menu">
        <div id="main">

            <!-- Navigation Bar =============================== -->
          
            <header class="show-for-large-up">
              <nav>
                <div class="row">
                  <div class="large-12 columns">
          
                    <!--REPLACE WITH PHP MENU SCRIPT-->
                    <ul>
                      <li class="current-menu-item"><a href="index.php">Trang chủ</a></li>
                      <li class="menu-item-has-children"><a href="#">Chi nhánh</a>
                        <ul>
                          <?php category_chinhanh(); ?>
                        </ul>
                      </li>
                      <li class="menu-item-has-children"><a href="#">Loại phòng hát</a>
                        <ul>
                          <li><a href="category.php?min=1&max=4&title=Phong 1 den 4 nguoi">Phòng 1 đến 4 người</a></li>
                          <li><a href="category.php?min=4&max=10&title=Phong 5 den 10 nguoi">Phòng 5 đến 10 người</a></li>
                          <li><a href="category.php?min=10&max=20&title=Phong 10 den 20 nguoi">Phòng 10 đến 20 người</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Liên hệ</a></li>
                    </ul>
                  <!--END REPLACE WITH PHP MENU SCRIPT-->
          
                </div>
                </div>
              </nav>
            </header>
          
          
          
          <!-- Navigation Bar (Mobile) =============================== -->
          
          <header class="show-for-medium-down">
          
            <a href="index.php" class="logo">
              <img src="<?php logo() ?>" alt="Site Name" />
            </a>
            
            <div class="toggle-nav">
              <span class="fa fa-bars"></span>
            </div>
          
            <div class="toggle-search">
              <span class="fa fa-search mauxam"></span>
            </div>
          
            <nav class="mobile-nav">
          
                    <!--REPLACE WITH PHP MENU SCRIPT-->
                    <ul>
                        <li class="current-menu-item"><a href="index.php">Trang chủ</a></li>
                        <li class="menu-item-has-children"><a href="#">Chi nhánh</a>
                          <ul>
                          <?php category_chinhanh(); ?>
                          </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Loại phòng hát</a>
                          <ul>
                          <li><a href="category.php?min=1&max=4&title=Phong 1 den 4 nguoi">Phòng 1 đến 4 người</a></li>
                          <li><a href="category.php?min=4&max=10&title=Phong 5 den 10 nguoi">Phòng 5 đến 10 người</a></li>
                          <li><a href="category.php?min=10&max=20&title=Phong 10 den 20 nguoi">Phòng 10 đến 20 người</a></li>
                          </ul>
                      </li>
                      <li><a href="#">Giới thiệu</a></li>
                      <li><a href="#">Liên hệ</a></li>
                      <li><a href="login.php" style="text-align: center;">Đăng nhập</a></li>
                      </ul>
                  <!--END REPLACE WITH PHP MENU SCRIPT-->
              
            </nav>
          
          <div class="mobile-search">
            <div class="row">
              <div class="medium-12 columns">
                <form class="btn-field" method="GET" action="timkiem.php">
                  <input type="text" name="tukhoa" placeholder="Tìm kiếm phòng hát..." />
                  <input class="btn-red icon" type="submit" name="btnTimkiem" value="Tìm kiếm" />
                </form>
          
              </div>
            </div>
          </div>
          
          </header>
          
          
          <!--Insert Website Here-->
          
          
          </div>
    </section>
    <script src="public/js/header.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

