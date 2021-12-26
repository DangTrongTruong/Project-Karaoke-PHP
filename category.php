<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="public/css/container.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <style>
        .contai__body-name{
            font-size: 21px;
        }
        .item img{
            /* width: 100%; */
            width: 306px;
            height: 204px;
        }

        .category-desktop .item{
            margin-top: 30px;
            box-shadow: 0 1px 5px rgb(0 2 0 / 40%);
            border-radius: 15px;
            overflow: hidden;
        }
        .margin_x{
            padding: 80px 0;
        }
        @media (max-width: 575.98px) {
            .item img{
            width: 100%;
        }
        }
    </style>
</head>

<body>
    <?php include("lib/header.php"); ?>
    <div class="container desktop margin_x">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="title">
                <?php
                $title=$_GET['title'];
                echo "
                <h2>".$title."</h2>
                ";
                ?>
                    
                </div>
            </div>
        </div>
        <hr>
        <div class="row category-desktop">
               <?php
                $min = $_GET['min'];
                $max = $_GET['max'];
                category_theo_luong_nguoi($min, $max) ?>
        </div>

    </div>
    <?php include("lib/footer.php"); ?>
</body>

</html>