<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

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
        .breadcrumb-small a{
            text-decoration: none;
            display: inline-block;
            color: #2d2d2d;
            padding: 5px 8px;
        }
        .article-content .article-head {
            position: relative;
            width: 100%;
            text-align: left;
            display: block;
            margin-bottom: 15px;
        }
        .article-content .article-head h1 {
            font-weight: 900;
            color: #2d2d2d;
            margin: 0px 0px 15px 0px;
            font-size: 33px;
        }
        .article-date-comment {
            display: flex;
            grid-column-gap: 1rem;
        }
        .article-content .article-tldr {
            padding: 10px 10px 0px 10px;
            margin-bottom: 10px;
            background: #f0f0f0;
            border-radius: 8px;
        }
        .noidung{
            text-align: justify;
        }
        .noidung img {
            max-width: 100%;
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
            <div class="title breadcrumb-small">
					<a href="/" title="Quay trở về trang chủ">Trang chủ</a>
					<span aria-hidden="true">/</span>
					<a href="news.php" title="">Tin tức</a>
					<span aria-hidden="true">/</span>
					<span><?php $idbaiviet=$_GET['idbaiviet']; title_content_blog($idbaiviet) ?></span>
				</div>
            </div>
        </div>
        <hr>
        <div class="row category-desktop">
            <div class="row" style="display: flex; justify-content: center;">
            <div class="article-content col-md-10">
                    <div class="article-head">
                            <h1><?php title_content_blog($idbaiviet) ?></h1>							
                            <div class="grid mg-left-15">
                                <div class="grid__item large--one-half medium--one-half small--one-half pd-left15">
                                    <div class="article-date-comment">
                                        <?php date_content_blog($idbaiviet) ?>						
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="article-tldr clearfix"></div>
                        <div class="noidung">
                        <?php content_blog($idbaiviet) ?>
                        </div>
                    </div>
                </div>       
            </div>                     
    </div>
    <?php include("lib/footer.php"); ?>
</body>

</html>