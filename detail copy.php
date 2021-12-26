
<!DOCTYPE html>
<html lang="en">
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
    <title>detail</title>
</head>
<body>
<?php include("lib/header.php"); ?>
        <div class="container paddingtop20px">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                        <section class="image-karaoke color_fff">
                            <div class="row image-desktop">
                                <div class="col-10 col-xs-12">
                                        <div class="col-12 item-image">
                                                <img class="images_BIG" src="https://product.hstatic.net/1000268128/product/anh_chinh_56c2d3189c274f6ba15e65e59d874171_master__1__ca4ec732348c4919bf0b5f5f7ce58918_master.jpg" alt="">
                                        </div>
                                </div>
                                <div class="col-2">
                                        <div class="col-12 item-image">
                                                <img src="https://product.hstatic.net/1000268128/product/6_e3186362e3fa47deb04c6ccafc6fe936_master_af23d0413d674758badc86dc6b06d4c2_master.jpg" alt="" onclick="show_images('https://product.hstatic.net/1000268128/product/6_e3186362e3fa47deb04c6ccafc6fe936_master_af23d0413d674758badc86dc6b06d4c2_master.jpg');">
                                        </div>
                                        <div class="col-12 item-image">
                                                <img src="https://product.hstatic.net/1000268128/product/4_10a80840792c401c84174e2f112ab02d_master_2423a524e3b5462ca2c142bfe4d04300_master.jpg" alt="" onclick="show_images('https://product.hstatic.net/1000268128/product/4_10a80840792c401c84174e2f112ab02d_master_2423a524e3b5462ca2c142bfe4d04300_master.jpg');">
                                         </div>
                                        <div class="col-12 item-image">
                                                <img src="https://product.hstatic.net/1000268128/product/5_705df9f093fb4f8cb09d2b95b655ca84_master_a355e34f82344c2eb5eea2e4da0d68ff_master.jpg" alt="" onclick="show_images('https://product.hstatic.net/1000268128/product/5_705df9f093fb4f8cb09d2b95b655ca84_master_a355e34f82344c2eb5eea2e4da0d68ff_master.jpg');">
                                        </div>
                                        <div class="col-12 item-image">
                                            <img src="https://product.hstatic.net/1000268128/product/7_0b6114656472499a877b6079f7ceb60d_master_417fb4d7e7b6498ebba660e74cbe36c7_master.jpg" alt="" onclick="show_images('https://product.hstatic.net/1000268128/product/7_0b6114656472499a877b6079f7ceb60d_master_417fb4d7e7b6498ebba660e74cbe36c7_master.jpg');">
                                    </div>
                                        
                                </div>
                            </div>
                            <div class="row slider-mobile">
                                <div class="col-12">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <img src="https://product.hstatic.net/1000268128/product/anh_chinh_56c2d3189c274f6ba15e65e59d874171_master__1__ca4ec732348c4919bf0b5f5f7ce58918_master.jpg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="https://product.hstatic.net/1000268128/product/anh_chinh_56c2d3189c274f6ba15e65e59d874171_master__1__ca4ec732348c4919bf0b5f5f7ce58918_master.jpg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="https://product.hstatic.net/1000268128/product/anh_chinh_56c2d3189c274f6ba15e65e59d874171_master__1__ca4ec732348c4919bf0b5f5f7ce58918_master.jpg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="https://product.hstatic.net/1000268128/product/anh_chinh_56c2d3189c274f6ba15e65e59d874171_master__1__ca4ec732348c4919bf0b5f5f7ce58918_master.jpg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                            <img src="https://product.hstatic.net/1000268128/product/anh_chinh_56c2d3189c274f6ba15e65e59d874171_master__1__ca4ec732348c4919bf0b5f5f7ce58918_master.jpg" class="d-block w-100" alt="...">
                                          </div>
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
                                        <h2>Monaza - 194 Trần Duy Hưng</h2>
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
                                            <span class="small-title">Không gian:</span>
                                            <ul>
                                                <li>- Mang phong cách trẻ trung, hiện đại</li>
                                                <li>- Số phòng: 15 phòng</li>
                                                <li>- Sức chứa: 15 - 150 người/ phòng</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="small-title">Giới thiệu chung:</span>
                                            <p>Công ty lớn muốn đưa nhân viên đi hát mà tìm phòng có sức chứa rộng thật khó! Đó là khi bạn chưa biết đến Karaoke Monaza tại 194 Trần Duy Hưng, quận Cầu Giấy - phòng hát sang chảnh bậc nhất Hà Nội với sức chứa siêu khủng đáp ứng mọi nhu cầu của khách hàng. Với sức chứa tối đa lên đến 100 người/phòng, Karaoke Monaza chính là một trong những phòng hát chất lượng nhất tại Hà Nội, là nơi để những giây phút ca hát của bạn cùng bạn bè được thăng hoa và gắn kết.

                                                Gọi ngay 0968.66.88.44 để đặt phòng nhanh chóng!</p>
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
                                <h6>0 bình luận</h6>
                            </div>
                            <form action="" method="post">
                                <img id="avatar_binhluan" src="https://scontent-hkg4-1.xx.fbcdn.net/v/t1.6435-1/cp0/s74x74/167135767_1664656280408867_6498005943330502701_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=dbb9e7&_nc_ohc=ZEltmlS8GpMAX_ULfKW&_nc_ht=scontent-hkg4-1.xx&tp=28&oh=9b9bfb201dce8d6642967178b96225ba&oe=60DFD452" alt="">
                                <input type="text" placeholder="Thêm bình luận...">
                            </form>
                    </section>
                </div>
                

                <div class="col-md-4 col-sm-12 col-xs-12">
                    <section class="form-dat-cho ttrai">
                            <div class="row">
                                <div class="col-12">
                                    <div class="title">
                                        <h2>Monaza - 194 Trần Duy Hưng</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form">
                                    <form action="" method="post">
                                        <div class="item-form">
                                            <input type="text" placeholder="Tên">
                                        </div>
                                        <div class="item-form">
                                            <input type="text" placeholder="Số điện thoại">
                                        </div>
                                        <div class="item-form">
                                            <input type="number" placeholder="Ngày">
                                        </div>
                                        <div class="item-form">
                                            <select name="" id="">
                                                <option value="">Chọn giờ</option>
                                                <option value="00:00">00:00</option>
                                                <option value="00:30">00:30</option>
                                                <option value="01:00">01:00</option>
                                                <option value="01:30">01:30</option>
                                                <option value="02:00">02:00</option>
                                                <option value="02:30">02:30</option>
                                                <option value="03:00">03:00</option>
                                                <option value="03:30">03:30</option>
                                                <option value="04:00">04:00</option>
                                                <option value="04:30">04:30</option>
                                                <option value="05:00">05:00</option>
                                                <option value="05:30">05:30</option>
                                                <option value="06:00">06:00</option>
                                                <option value="06:30">06:30</option>
                                                <option value="07:00">07:00</option>
                                                <option value="07:30">07:30</option>
                                                <option value="08:00">08:00</option>
                                                <option value="08:30">08:30</option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:30">09:30</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:30">10:30</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:30">11:30</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:30">12:30</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:30">13:30</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:30">14:30</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:30">15:30</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:30">16:30</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:30">17:30</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:30">18:30</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:30">19:30</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:30">20:30</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:30">21:30</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:30">22:30</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:30">23:30</option>
                                               
                                            </select>
                                                
                                        </div>

                                        <div class="item-form">
                                            <select name="" id="">
                                                <option value="">Chọn số người</option>
                                                <option value="1 người">1 người </option>
                                                <option value="2 người">2 người </option>
                                                <option value="3 người">3 người </option>
                                                <option value="4 người">4 người </option>
                                                <option value="5 người">5 người </option>
                                                <option value="6 người">6 người </option>
                                                <option value="7 người">7 người </option>
                                                <option value="8 người">8 người </option>
                                                <option value="9 người">9 người </option>
                                                <option value="10 người">10 người </option>
                                                <option value="11 người">11 người </option>
                                                <option value="12 người">12 người </option>
                                            </select>
                                                
                                        </div>

                                        <div class="item-form">
                                            <textarea placeholder="Ghi chú thêm" name="" id="" cols="" rows="4"></textarea>
                                        </div>

                                        <div class="item-form submit-form">
                                            <input type="submit" value="ĐẶT CHỖ NGAY">
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

            <div class="container">
                <div class="row">
                    <?php include('lib/lienquan.php'); ?>
                </div>
            </div>
        </div>
        <?php include("lib/footer.php"); ?>
        <script src="public/js/detail.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>