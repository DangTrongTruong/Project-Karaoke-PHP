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
            width: 100%;
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
            .noidung-phai h3 {
            left: -63% !important;
            }
        }
        .noi{
            width: calc(244px + 30px);
            padding: 0;
            position: fixed;
            left: -15%;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            z-index: 2;
            transition: .5s all ease-in;
        }
        .noi.active{
            left: 0;
        }
        .noidung-phai{
            cursor: pointer;
            background: #fff;
            height: 118.94px;
            border-radius: 0.6rem;
            width: 50px;
            position: relative;
        }
        .noidung-phai h3{
            font-size: 16.5px;
            position: absolute;
            top: 45%;
            left: -50%;
            transform: rotate(90deg);
            width: 100px;
        }
    </style>
</head>

<body>
    
                <?php 
                $connect = connect_db();
                foreach ($phongdaxemAll as $key => $value) {
                    $phongdaxem = $value;
                
                    $sql = "SELECT * FROM phong p INNER JOIN chinhanh c ON p.diachi = c.idchinhanh WHERE idphong = $phongdaxem";
                    $result = mysqli_query($connect,$sql);
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="noi">
                                    <div class="item">
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
                                </div>
                            <div class="noidung-phai"><h3>Xem gần đây</h3></div>
                             </div>
                            ';
                    }
                    }
                ?>
        <script>
            document.querySelector('.noidung-phai').addEventListener('click', ()=>{
                document.querySelector('.noi').classList.toggle('active');
            });
        </script>
</body>

</html>