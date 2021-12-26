<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="public/css/container.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <style>
        .contai__heading-bonus a{
            color: #000000;
            text-decoration: none;
            cursor: pointer;
        }
        .contai__heading-bonus a:hover{
            color: #e0bd65;
        }
        .tintucnoibat{
            min-height: 362px;
            /* background: #333; */
            display: flex;
            justify-content: space-between;
            grid-column-gap: 1.5rem;
        }
        .video_koko{
            width: 100%;
        }
        .content_tintuc_koko{
            width: 100%; 
        }
        .content_tintuc_koko{
            display: flex;
            flex-direction: column;
            justify-content: space-between;

        }
        .block_tintuc_koko {
            display: flex;
            grid-column-gap: 0.7rem;
        }
        .block_tintuc_img{
            align-self: center;
        }
        .block_tintuc_img img{
            border-radius: .3rem;
        }
        .block_tintuc_ct{

        }
        .block_tintuc_ct_h5{
            font-size: 16px;
            font-weight: 600;
            text-align: justify;
        }
        .block_tintuc_ct_p{
            font-size: 13px;
            font-weight: 400;
            text-align: justify;
        }
        .text-center {
            margin-top: 20px;
            text-align: center;
        }
        .site-btn {
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 30px;
            display: inline-block;
            padding: 0px 20px;
            height: 46px;
            line-height: 48px;
            font-size: 15px;
            background: #2d2d2d;
            color: #fff !important;
            text-decoration: none;
            margin-top: 30px;
        }
        @media (max-width: 575.98px) { 
            .tintucnoibat{
                flex-direction: column;
                grid-row-gap: 1rem;
            }
            .site-btn{
                margin: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container margin_container">
        <div class="contai__block">
            <div class="contai__heading">
                <h3 class="contai__heading-title">
                    KoKo đề xuất
                </h3>
                <!-- <p class="contai__heading-bonus">Xem thêm</p> -->
            </div>

            <div class="owl-carousel owl-theme">
                <?php koko_dexuat(); ?>
            </div>

        </div>

        <div class="contai__block">
            <div class="contai__heading">
                <h3 class="contai__heading-title">
                    Phù hợp cho buổi học lớp
                </h3>
                <p class="contai__heading-bonus"><a href="category.php?min=9&max=100&title=Phù hợp cho buổi học lớp">Xem thêm</a></p>
            </div>

            <div class="owl-carousel owl-theme">
                <?php koko_phuhophoplop(); ?>
            </div>

        </div>

        <div class="contai__block">
            <div class="contai__heading">
                <h3 class="contai__heading-title">
                    Cầu Giấy - Thiên đường Karaoke
                </h3>
                <p class="contai__heading-bonus">Xem thêm</p>
            </div>

            <div class="owl-carousel owl-theme">
                <?php koko_caugiay(); ?>
            </div>

        </div>
        <div style="margin: 20px 0;" class="contai__block">
		<div class="inner">
			<a href="news.php" target="_blank">
				<img width="100%" src="./public/image/banner_blog.jpg">
			</a>
		</div>
	    </div>
        <div class="contai__block">
            <div class="contai__heading">
                <h3 class="contai__heading-title">
                    Tin tức nổi bật
                </h3>
            </div>

            <div class="tintucnoibat">
                <div class="video_koko">
                <video width="100%" height="100%" src="public/video/video.mp4" controls autoplay muted ></video>
                </div>
                <div class="content_tintuc_koko">
                    <?php home_blog() ?>
                </div>
            </div>
            <div class="text-center">
				<a href="news.php" class="site-btn" target="_blank">
					Xem tất cả tin tức
				</a>
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