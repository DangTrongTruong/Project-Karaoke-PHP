<style>
    .koko_datphong h2, .koko_datphong p, .koko_datphong span{
        padding: 0 !important;
        margin: 0 !important;
    }
    .koko_datphong{
        display: none;
    }
    .koko_datphong.active{
        width: 600px;
        height: 540px;
        background: #fff;
        border-radius: 1rem;
        position: fixed;
        top: 15%;
        left: 30%;
        box-shadow: 1px 1px 10px 1px rgb(226, 217, 130);
        display: flex;
        align-items: center;
        justify-content: start;
        flex-direction: column;
        color: rgb(94, 94, 94);
        z-index: 1;
    }
    .koko_datphong .h4_css{
        font-size: 1rem;
        font-weight: bold;
    }
    .koko_top{
        border-bottom: 0.5px solid #cfcfcf;
        padding: 10px;
    }
    .koko_top_content{
        display: flex;
        align-items: center;
        grid-column-gap: .5rem;
        font-size: 13px;
    }
    .koko_title{
        font-size: 18px;
        color: #000000;
        padding: 10px 0;
    }
    .koko_content{
        width: 100%;
    }
    .koko_content h2{
        font-size: 25px !important;
        color: #000000;
        padding: 10px 0 !important;
        text-transform: uppercase;
        text-align: center;
    }
    .koko_content_top{
        padding: 0 20px;
        width: 100%;
        display: flex;
        justify-content: space-between;
    }
    .koko_khachhang_va_QR{
        display: flex;
        justify-content: space-between;
    }
    .qr{
        padding: 10px 20px;
        text-align: center;
    }
    .koko_khachhang_va_QR .qr img{
        width: 100px;
        height: 100px;
    }
    .koko_khachhang{
        display: flex;
        flex-direction: column;
        padding: 10px 20px;
        grid-row-gap: 4px;
    }
    .koko_content_footer{
        padding: 10px;
        text-align: center;
    }
    #copyvcb{
        border: none;
        text-align: center;
        outline: none;
    }
    #copy_vcb{
        cursor: pointer;
    }
    @media (max-width: 575.98px) { 
        .koko_datphong.active {
        position: absolute;
        width: 94%;
        height: auto;
        background: #fff;
        border-radius: 1rem;
        top: 10%;
        left: 0%;
        margin: 10px;
        box-shadow: 1px 1px 10px 1px rgb(226 217 130);
        display: flex;
        align-items: center;
        justify-content: start;
        flex-direction: column;
        color: rgb(94, 94, 94);
        }
        .koko_khachhang_va_QR {
        flex-direction: column;
    }
    }
    .dongform{
        cursor: pointer;
        color: #333;
        font-size: 40px;
        position: absolute;
        top: 0%;
        right: 0%;;
    }
    .dongform:hover{
        color:rgb(226, 217, 130);
    }
</style>
<body>
    <div class="koko_datphong">
        <div class="koko_top">
            <h3 class="koko_title">C??ng ty TNHH KoKo Karaoke</h3>
            <div class="koko_top_content">
                <div class="koko_top_left">
                    <?php
                    $hoten = $_POST['hoten'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email_kh'];
                    $soluongnguoi = $_POST['soluongnguoi'];
                    $ngay = $_POST['ngay'];
                    $thoigian = $_POST['thoigian'];
                    $ghichu =$_POST['ghichu'];
                    $ngaygio = getdate();
                    echo '<img width="80px" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Time:%20'.$ngaygio['mday'].'-'.$ngaygio['mon'].'-'.$ngaygio['year'].'_KoKo%20Karaoke%20-%20%C4%90%C6%A1n%20%C4%91%E1%BA%B7t%20ph%C3%B2ng%20-%20M%C3%A3:%20xxx%20-%20H%E1%BB%8D%20T%C3%AAn%20KH:%20'.$hoten.'%20-%20S%C4%90T:%20'.$sdt.'%20-%20S%E1%BB%91%20l%C6%B0%E1%BB%A3ng%20ng%C6%B0%E1%BB%9Di:%20'.$soluongnguoi.'%20-%20Th%E1%BB%9Di%20gian:%20'.$ngay.'_'.$thoigian.'" alt="">';
                    ?>
                </div>
                <div class="koko_top_right">
                    <p>S??? ??i???n tho???i: 0968.66.88.44</p>
                    <p>Email: contact@Ko2.com</p>
                    <p>?????a ch???: 107A Nguy???n Phong S???c, Ph?????ng D???ch V???ng H???u, Qu???n C???u Gi???y, H?? N???i</p>
                    <p onclick="window.print()"><i class="fas fa-print"></i></p>
                </div>
            </div>
        </div>
        <div class="koko_content">
            <h2>????n ?????t ph??ng</h2>
            <div class="koko_content_top">
                <span>Ng??y: <span id="ngaygiohientai"></span></span>
                <span>M?? ????n ?????t ph??ng: <?php madondatphong() ?></span>
            </div>
            <div class="koko_khachhang_va_QR">
                <div class="koko_khachhang">
                    <h4 class="h4_css">Th??ng tin kh??ch h??ng</h4>
                    <span>H??? t??n: <span id="hoten_hienthi">Tr???n Ti???n</span></span>
                    <span>S??T: <span id="sdt_hienthi">0333669564</span></span>
                    <span>S??? l?????ng: <span id="soluongnguoi_hienthi">5 Ng?????i</span> Ng?????i</span>
                    <span>Th???i gian ?????t ph??ng: <span id="ngay_hienthi">21/07/2021</span> - <span id="thoigian_hienthi">21:00</span></span>
                    <span>Ghi ch??: <span id="ghichu_hienthi">Ghi ch??</span></span>
                </div>
                <div class="qr">
                    <img src="public/image/QR.svg" alt="">
                    <h5 class="h4_css"><input id="copyvcb" type="text" value="1000012128482843" readonly> <i id="copy_vcb" class="fas fa-copy"></i></h5>
                    <h4 class="h4_css">QR Code VietComBank</h4>
                </div>
            </div>
            <div class="koko_content_footer">
                <p>Vui l??ng thanh to??n tr?????c <b>500.000 VN??</b> ????? gi??? ph??ng</p>
                <p>(b???n c?? th??? thanh to??n online ho???c offline t???i c??c chi nh??nh)</p>
                <br>
                <span>*CSKH s??? g???i ??i???n x??c nh???n ????n ?????t ph??ng trong v??ng 1h t???i. C???m ??n b???n ???? l???a ch???n d???ch v??? c???a <b>KoKo</b></span>
            </div>
        </div>

        <i class="fas fa-times-circle dongform"></i>
    </div>
    <script>
        document.querySelector('.dongform').addEventListener('click', ()=>{
            document.querySelector(".koko_datphong").classList.remove("active");
        });
        var copyvcb = document.querySelector('#copyvcb');
        document.querySelector('#copy_vcb').addEventListener('click', ()=>{
            copyvcb.select();
            document.execCommand("copy");
            alert('Copy th??nh c??ng s??? t??i kho???n Vietcombank');
        });
    </script>
    <?php 
        if (isset($_POST['datchongay'])) {
            echo '<script>document.querySelector(".koko_datphong").classList.add("active");
                          document.querySelector("#hoten_hienthi").innerHTML = "'.$hoten.'";
                          document.querySelector("#sdt_hienthi").innerHTML = "'.$sdt.'";
                          document.querySelector("#soluongnguoi_hienthi").innerHTML = "'.$soluongnguoi.'";
                          document.querySelector("#ngay_hienthi").innerHTML = "'.$ngay.'";
                          document.querySelector("#thoigian_hienthi").innerHTML = "'.$thoigian.'";
                          document.querySelector("#ghichu_hienthi").innerHTML = "'.$ghichu.'";

                          document.querySelector("#ngaygiohientai").innerHTML = "'.$ngaygio['mday'].'-'.$ngaygio['mon'].'-'.$ngaygio['year'].'";
                  </script>';
                  
                  $idphong = $_GET['idphong'];
                  insert_form_dat_phong($hoten,$sdt,$email,$ngay,$thoigian,$soluongnguoi,$ghichu,$idphong);
        }
    ?>
    