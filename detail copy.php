
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
                                        <h2>Monaza - 194 Tr???n Duy H??ng</h2>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-12">
                                    
                                    <ul>
                                        <li>
                                            <span class="small-title">?????t ph??ng ngay:</span><span>0968.66.88.44</span>
                                        </li>
                                        <li>
                                            <span class="small-title">Kh??ng gian:</span>
                                            <ul>
                                                <li>- Mang phong c??ch tr??? trung, hi???n ?????i</li>
                                                <li>- S??? ph??ng: 15 ph??ng</li>
                                                <li>- S???c ch???a: 15 - 150 ng?????i/ ph??ng</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="small-title">Gi???i thi???u chung:</span>
                                            <p>C??ng ty l???n mu???n ????a nh??n vi??n ??i h??t m?? t??m ph??ng c?? s???c ch???a r???ng th???t kh??! ???? l?? khi b???n ch??a bi???t ?????n Karaoke Monaza t???i 194 Tr???n Duy H??ng, qu???n C???u Gi???y - ph??ng h??t sang ch???nh b???c nh???t H?? N???i v???i s???c ch???a si??u kh???ng ????p ???ng m???i nhu c???u c???a kh??ch h??ng. V???i s???c ch???a t???i ??a l??n ?????n 100 ng?????i/ph??ng, Karaoke Monaza ch??nh l?? m???t trong nh???ng ph??ng h??t ch???t l?????ng nh???t t???i H?? N???i, l?? n??i ????? nh???ng gi??y ph??t ca h??t c???a b???n c??ng b???n b?? ???????c th??ng hoa v?? g???n k???t.

                                                G???i ngay 0968.66.88.44 ????? ?????t ph??ng nhanh ch??ng!</p>
                                        </li>
                                        <li>
                                            <span class="small-title">Kh??ng gian:</span>
                                            <ul>
                                                <li>- N??n ?????t ph??ng tr?????c 30 ph??t ????? c?? ??u ????i t???t nh???t.</li>
                                                <li>- Ch??? gi??? ph??ng t???i ??a 30 ph??t.</li>
                                                
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
                                <h6>0 b??nh lu???n</h6>
                            </div>
                            <form action="" method="post">
                                <img id="avatar_binhluan" src="https://scontent-hkg4-1.xx.fbcdn.net/v/t1.6435-1/cp0/s74x74/167135767_1664656280408867_6498005943330502701_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=dbb9e7&_nc_ohc=ZEltmlS8GpMAX_ULfKW&_nc_ht=scontent-hkg4-1.xx&tp=28&oh=9b9bfb201dce8d6642967178b96225ba&oe=60DFD452" alt="">
                                <input type="text" placeholder="Th??m b??nh lu???n...">
                            </form>
                    </section>
                </div>
                

                <div class="col-md-4 col-sm-12 col-xs-12">
                    <section class="form-dat-cho ttrai">
                            <div class="row">
                                <div class="col-12">
                                    <div class="title">
                                        <h2>Monaza - 194 Tr???n Duy H??ng</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form">
                                    <form action="" method="post">
                                        <div class="item-form">
                                            <input type="text" placeholder="T??n">
                                        </div>
                                        <div class="item-form">
                                            <input type="text" placeholder="S??? ??i???n tho???i">
                                        </div>
                                        <div class="item-form">
                                            <input type="number" placeholder="Ng??y">
                                        </div>
                                        <div class="item-form">
                                            <select name="" id="">
                                                <option value="">Ch???n gi???</option>
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
                                                <option value="">Ch???n s??? ng?????i</option>
                                                <option value="1 ng?????i">1 ng?????i </option>
                                                <option value="2 ng?????i">2 ng?????i </option>
                                                <option value="3 ng?????i">3 ng?????i </option>
                                                <option value="4 ng?????i">4 ng?????i </option>
                                                <option value="5 ng?????i">5 ng?????i </option>
                                                <option value="6 ng?????i">6 ng?????i </option>
                                                <option value="7 ng?????i">7 ng?????i </option>
                                                <option value="8 ng?????i">8 ng?????i </option>
                                                <option value="9 ng?????i">9 ng?????i </option>
                                                <option value="10 ng?????i">10 ng?????i </option>
                                                <option value="11 ng?????i">11 ng?????i </option>
                                                <option value="12 ng?????i">12 ng?????i </option>
                                            </select>
                                                
                                        </div>

                                        <div class="item-form">
                                            <textarea placeholder="Ghi ch?? th??m" name="" id="" cols="" rows="4"></textarea>
                                        </div>

                                        <div class="item-form submit-form">
                                            <input type="submit" value="?????T CH??? NGAY">
                                        </div>


                                    </form>
                                </div>
                            </div>

                            <div style="margin-top: 30px;text-align:center ;" class="row">
                               <div class="col-12">
                                Ho???c g???i t???i:<span style="color:black;font-weight:bolder;"> 0968.66.88.44</span>
                                <p>????? ?????t ch??? v?? ???????c t?? v???n.</p>
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