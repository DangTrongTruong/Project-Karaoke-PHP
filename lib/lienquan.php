<!DOCTYPE html>
<html lang="en">

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
                Các phòng liên quan
                </h3>
                <p class="contai__heading-bonus">Xem thêm</p>
            </div>

            <div class="owl-carousel owl-theme">
                <?php $idCN = $_GET['idCN']; detail_lienquan($idCN,$idphong); ?>
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