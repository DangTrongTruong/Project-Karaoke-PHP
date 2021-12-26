<!DOCTYPE html>
<html lang="en">
<?php
//     $cookie_name = "phongdaxem";
//     $cookie_value = $_GET['idphong'];
//     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
//     // gan du lieu
//     if(isset($_COOKIE[$cookie_name])) {
//         $phongdaxem = $_COOKIE[$cookie_name];
//    }

    $cookie_name = "phongdaxem";
    // $cookie_value = array();
    // $cookie_value2 = array();
    // array_push($cookie_value2,$_GET['idphong']);
    // $cookie_value = array_merge($cookie_value, $cookie_value2);
    $cookie_value[] = $_GET['idphong'];
    // array_push($cookie_value, $_GET['idphong']);

    // print_r($cookie_value);
    $json = json_encode($cookie_value);
    setcookie($cookie_name, $json, time() + (86400 * 30), "/"); // 86400 = 1 day
    if(isset($_COOKIE[$cookie_name])) {
        $cookie = $_COOKIE['phongdaxem'];
        $cookie = stripslashes($cookie);
        $savedCardArray = json_decode($cookie, true);
        $phongdaxemAll = $savedCardArray;
   }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên quan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="public/css/lienquan.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <style>
        .item{
            background: #fff !important;
            width: 224px;
            height: 334.94px;
        }
        .item img{
            height: 149.34px !important;
        }
        @media (max-width: 575.98px) { 
            .item {
            width: 100%;
            height: 334.94px;
            }
            .contai__heading-title{
                font-size: 21px;
                font-weight: bold;
            }
        }
    </style>
</head>

<body>
    <div class="container margin_container">
        <div class="contai__block">
            <div class="contai__heading">
                <h3 class="contai__heading-title">
                    Phòng xem gần đây nhất
                </h3>
                <p class="contai__heading-bonus">Xem thêm</p>
            </div>

            <div class="owl-carousel owl-theme">
                <?php 
                $connect = connect_db();
                foreach ($phongdaxemAll as $key => $value) {
                    $phongdaxem = $value;
                
                    $sql = "SELECT * FROM phong p INNER JOIN chinhanh c ON p.diachi = c.idchinhanh WHERE idphong = $phongdaxem";
                    $result = mysqli_query($connect,$sql);
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="item">
                                <img src="'.$row['images'].'">
                                <div class="contai__body-desc">
                                    <h4 class="contai__body-name">
                                        '.$row['tenphong'].'
                                    </h4>
                                    <p class="contai__body-place">
                                        '.$row['tenchinhanh'].'
                                    </p>
            
                                    <div class="contai__body-btn">
                                        <a href="detail.php?idphong='.$row['idphong'].'&idCN='.$row['idchinhanh'].'" class="contai__body-link">
                                            Đặt phòng
                                        </a>
                                    </div>
                                </div>
                            </div>';
                    }
                    }
                ?>
            </div>

        </div>

    </div>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            type: 4,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
</body>

</html>