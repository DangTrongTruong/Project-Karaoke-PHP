
<!DOCTYPE html>
<html lang="en">
<?php ob_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/detail.css">
    <?php include("lib/header.php"); ?>
    <title><?php $idphong = $_GET['idphong']; detail_title_h2($idphong); ?> | KoKo</title>
</head>
<style>
    ::-webkit-scrollbar {
    width: 5px;
    }
    ::-webkit-scrollbar-track {
    background: #f1f1f1; 
    }
    ::-webkit-scrollbar-thumb {
    background: rgb(0 0 0 / 5%); 
    }
    .carousel-item img{
        width: 100%;
    }
    @media (max-width: 575.98px) {
        .carousel-item img{
            /* width: 295px; */
            width: 100%;
            height: 180px;
            border-radius: .5rem;
        }
        .infor-karaoke ul{
            padding: 0;
        }
    }
    @media (min-width: 576px) and (max-width: 1023px) {
        .noi{
            left: -30% !important;
        }
        .noi.active{
            left: 0% !important;
        }
    }
</style>
<body>
        <div class="container paddingtop20px">
            <div class="row">
                <div class="col-xl-8 col-md-12 col-sm-12">
                        <section class="image-karaoke color_fff">
                            <div class="row image-desktop">
                                <?php detail_anh($idphong); ?>
                            </div>
                            <div class="row slider-mobile">
                                <div class="col-12">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                          <?php detail_anh_mobile_active($idphong); detail_anh_mobile($idphong); ?>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </button>
                                      </div>
                                </div>
                            </div>
                        </section>

                        <section class="infor-karaoke color_fff">
                            <div class="row title">
                                <div class="col-12">
                                    <div class="title">
                                        <h2><?php detail_title_h2($idphong); detail_luotxem($idphong); ?></h2>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-12">
                                    
                                    <ul>
                                        <li>
                                            <span class="small-title">Đặt phòng ngay:</span><span>0968.66.88.44</span>
                                        </li>
                                        
                                        <li>
                                            <span class="small-title">Địa chỉ:</span><span name="diachix"><?php detail_diachi($idphong); ?></span>
                                        </li>
                                        <li>
                                            <span class="small-title">Không gian:</span>
                                            <ul>
                                                <li>- Mang phong cách trẻ trung, hiện đại</li>
                                                <?php detail_sophong_succhua($idphong); ?>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="small-title">Giới thiệu chung:</span>
                                            <p><?php detail_motaphong($idphong) ?></p>
                                        </li>
                                        <li>
                                            <span class="small-title">Không gian:</span>
                                            <ul>
                                                <li>- Nên đặt phòng trước 30 phút để có ưu đãi tốt nhất.</li>
                                                <li>- Chỉ giữ phòng tối đa 30 phút.</li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <section class="google-map color_fff">
                                <div class="row">
                                    <div class="col-12">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7838.684254869503!2d106.70676642475235!3d10.785086936675276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1547181657956" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                        </section>
                        <section class="binhluan col-12">
                            <div class="top_binhluan">
                                <h6><?php countbl($idphong); ?> bình luận</h6>
                            </div>
                            <form action="" method="post">
                            <img id="avatar_binhluan" src="<?php if (isset($_SESSION['taikhoan'])) {$username = $_SESSION['taikhoan']; avt($username);}else{echo './cpanel/assets/images/users/avatar-null.gif';} ?>" alt="">
                            <?php if (isset($_SESSION['taikhoan'])) {
                                echo '<input type="text" name="binhluans" placeholder="Thêm bình luận...">
                                <button style="flex: 1;padding: 0px 9px; border: none;" name="guibinhluan" type="submit">Gửi</button>';
                                }else{
                                    echo '<input type="text" name="binhluans" readonly placeholder="Vui lòng đăng nhập để bình luận">';
                                } ?>
                            </form>
                            <?php hienthi_binhluan(); if (isset($_POST['guibinhluan'])) { 
                                $noidungbl = $_POST['binhluans'];
                                $idphong = $_GET['idphong'];
                                $useridall = $_SESSION['taikhoan'];
                                guibinhluan($noidungbl,$useridall,$idphong);
                            } ?>
                        </section>
                </div>
                

                <div class="col-xl-4 col-md-12 col-sm-12">
                    <section class="form-dat-cho ttrai">
                            <div class="row">
                                <div class="col-12">
                                    <div class="title">
                                        <h2><?php detail_title_h2($idphong); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form">
                                    <form action="" method="post">
                                        <div class="item-form">
                                            <input type="text" name="hoten" value="<?php if (isset($_SESSION['taikhoan'])) { $username = $_SESSION['taikhoan']; hoten($username); } ?>" placeholder="Họ tên" <?php if (isset($_SESSION['taikhoan'])) {  } ?> required>
                                        </div>
                                        <div class="item-form">
                                            <input type="tel" name="sdt" value="<?php if (isset($_SESSION['taikhoan'])) { $username = $_SESSION['taikhoan']; sdt($username); } ?>" pattern="[0]{1}[0-9]{9}" placeholder="Số điện thoại" <?php if (isset($_SESSION['taikhoan'])) {  } ?> required>
                                        </div>
                                        <div class="item-form">
                                            <input type="email" name="email_kh" value="<?php if (isset($_SESSION['taikhoan'])) { $username = $_SESSION['taikhoan']; email($username); } ?>" placeholder="Email" <?php if (isset($_SESSION['taikhoan'])) {  } ?> required>
                                        </div>
                                        <div class="item-form">
                                            <input type="date" id="checkngaykhongduoc" name="ngay" placeholder="Ngày" value="<?php echo date("Y-m-d"); ?>" min="<?php echo date("Y-m-d"); ?>" required>
                                        </div>
                                        <div class="item-form">
                                            <input type="time" name="thoigian" placeholder="Giờ" required>  
                                        </div>

                                        <div class="item-form">
                                            <select name="soluongnguoi" id="" required>
                                                <option value="">Chọn số người</option>
                                                <?php $idphong = $_GET['idphong']; soluongnguoi_detail_gioihantheophong($idphong); ?>
                                            </select>
                                                
                                        </div>

                                        <div class="item-form">
                                            <textarea placeholder="Ghi chú thêm" name="ghichu" id="" cols="" rows="2"></textarea>
                                        </div>

                                        <div class="item-form submit-form">
                                            <input type="submit" name="datchongay" value="ĐẶT CHỖ NGAY">
                                        </div>


                                    </form>
                                </div>
                            </div>

                            <div style="margin-top: 30px;text-align:center ;" class="row">
                               <div class="col-12">
                                Hoặc gọi tới:<span style="color:black;font-weight:bolder;"> 0968.66.88.44</span>
                                <p>Để đặt chỗ và được tư vấn.</p>
                               </div>
                            </div>

                            
                    </section>

                </div>
               
            </div>
           <?php //$ngaydatphong_check = $_POST['ngay']; $giodatphong_check = $_POST['thoigian']; //check_truoc4h_ngay_gio_datphong($ngaydatphong_check, $giodatphong_check); ?>
            <div class="container">
                <div class="row">
                    <?php include('lib/lienquan.php'); ?>
                    <?php include('lib/phongdaxem.php'); ?>
                </div>
            </div>
        </div>
        <?php include("lib/footer.php"); ?>
        <script src="public/js/detail.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php include('lib/maudondatphong.php'); ?>
</body>
</html>