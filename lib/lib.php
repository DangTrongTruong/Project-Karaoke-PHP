<?php

    function connect_db(){
        $connect = new mysqli('localhost', 'root', '', 'koko');
        if ($connect->connect_error) {
            die('Kết nối đến Database thất bại => ').$connect->connect_error;
        }else{
            return $connect;
        }
    }

    // header
    function category_theo_luong_nguoi($min,$max){
        $connect = connect_db();
            $sql = "SELECT * FROM phong p INNER JOIN chinhanh c ON  p.diachi = c.idchinhanh WHERE soluongnguoi > $min AND soluongnguoi <= $max  ";
            $result = mysqli_query($connect,$sql);
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="col-md-3">
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
                    </div>';
            }
    }

    function category_chinhanh(){
        $connect = connect_db();
        $sql = "SELECT * FROM chinhanh";
        $result = mysqli_query($connect, $sql);
        while($row = $result->fetch_assoc()){
            echo '<li><a href="chinhanh.php?idchinhanh='.$row['idchinhanh'].'">'.$row['tenchinhanh'].'</a></li>';
        }
    }
    // header
    //chinhanh
    function category_chinhanh_detail($idchinhanh){
        $connect = connect_db();
        $sql = "SELECT * FROM chinhanh c INNER JOIN phong p ON c.idchinhanh = p.diachi WHERE idchinhanh = $idchinhanh";
        $result = mysqli_query($connect, $sql);
        while($row = $result->fetch_assoc()){
            echo '<div class="col-md-3">
            <div class="item">
                    <img src="'.$row['images'].'" alt="" class="contai__body-img">
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
            </div>';
        }
    }
    //chinhanh

    function koko_dexuat(){
        $connect = connect_db();
        $sql = "SELECT * FROM phong p INNER JOIN chinhanh c ON p.diachi = c.idchinhanh ORDER BY luotxem DESC";
        $result = mysqli_query($connect,$sql);
        while ($row = $result->fetch_assoc()) {
            echo '<div class="item css_itemmobile">
                    <img src="'.$row['images'].'" alt="" class="contai__body-img width_codinh">
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

    function koko_phuhophoplop(){
        $connect = connect_db();
        $sql = "SELECT * FROM phong p INNER JOIN chinhanh c ON p.diachi = c.idchinhanh WHERE soluongnguoi >= 10 ORDER BY idphong DESC";
        $result = mysqli_query($connect,$sql);
        while ($row = $result->fetch_assoc()) {
            echo '<div class="item">
                    <img src="'.$row['images'].'" alt="" class="contai__body-img width_codinh">
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

    function koko_caugiay(){
        $connect = connect_db();
        $sql = "SELECT * FROM phong p INNER JOIN chinhanh c ON p.diachi = c.idchinhanh WHERE c.tenchinhanh like '%Cầu Giấy%' ORDER BY idphong DESC";
        $result = mysqli_query($connect,$sql);
        while ($row = $result->fetch_assoc()) {
            echo '<div class="item">
                    <img src="'.$row['images'].'" alt="" class="contai__body-img width_codinh">
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

    function koko_timkiem($tukhoa){
        $connect = connect_db();
        $sql = "SELECT * FROM phong p INNER JOIN chinhanh c ON p.diachi = c.idchinhanh WHERE c.tenchinhanh like '%$tukhoa%' OR p.tenphong like '%$tukhoa%' ORDER BY idphong DESC";
        $result = mysqli_query($connect,$sql);
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-md-3">
                    <div class="item">
                            <img src="'.$row['images'].'" alt="" class="contai__body-img">
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
                    </div>';
        }
    }

    // tim kiem nang cao
    function list_chi_nhanh_tim_kiem_nang_cao(){
        $connect=connect_db();
        $sql="SELECT * FROM chinhanh";
        $result=mysqli_query($connect,$sql);
        while($row=$result->fetch_assoc()){
                echo "
                <option value='".$row['idchinhanh']."'>".$row['tenchinhanh']."</option>
                ";

        }
    }

    function list_slnguoi_tim_kiem_nang_cao(){
        $connect=connect_db();
        $sql="SELECT * FROM phong GROUP BY soluongnguoi";
        $result=mysqli_query($connect,$sql);
        while($row=$result->fetch_assoc()){
                echo "
                <option value='".$row['soluongnguoi']."'>".$row['soluongnguoi']." người</option>
                ";

        }
    }
    

    function koko_timkiem_nangcao($idchinhanh,$soluongnguoi){
        $connect = connect_db();
        $sql = "SELECT * FROM phong p INNER JOIN chinhanh c ON p.diachi = c.idchinhanh WHERE p.diachi=$idchinhanh AND p.soluongnguoi = $soluongnguoi  ";
        $result = mysqli_query($connect,$sql);
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-md-3">
                    <div class="item">
                            <img src="'.$row['images'].'" alt="" class="contai__body-img">
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
                    </div>';
        }
    }
    // tim kiem nang cao

    // trang detail

    // function check_truoc4h_ngay_gio_datphong($ngaydatphong_check, $giodatphong_check){
    //     $connect= connect_db();
    //     $sql = "SELECT * FROM formdatphong WHERE ngay_datphong = $ngaydatphong_check and $giodatphong_check <= gio_datphong-04:00";
    //     $result = $connect->query($sql);
    //     while($row = $result->fetch_assoc())
    //     if ($result) {
    //         echo 'thanh cong';
    //     }else{
    //         echo 'thai bai';
    //     }
    // }
    function madondatphong(){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT idform FROM formdatphong ORDER BY idform DESC LIMIT 1");
        while($row = $result->fetch_assoc()){
            echo $row['idform']+1;
        }
    }
    function detail_anh($idphong){
        $connect = connect_db();
        $sql = "SELECT * FROM anhchitiet a INNER JOIN phong p ON p.idphong = a.idphong WHERE a.idphong = $idphong";
        $result = mysqli_query($connect, $sql);
        while($row = $result->fetch_assoc()){
            echo '<div class="col-10 col-xs-12">
                        <div class="col-12 item-image">
                                <img class="images_BIG" src="'.$row['images'].'" alt="">
                        </div>
                </div>';

            echo '
                <div class="col-2">
                    <div class="col-12 item-image">
                            <img class="anhok" src="'.$row['anh1'].'" alt="">
                    </div>
                    <div class="col-12 item-image">
                            <img class="anhok" src="'.$row['anh2'].'" alt="">
                    </div>
                    <div class="col-12 item-image">
                            <img class="anhok" src="'.$row['anh3'].'" alt="">
                    </div>
                    <div class="col-12 item-image">
                        <img class="anhok" src="'.$row['anh4'].'" alt="">
                    </div>
                </div>
            ';
        }
    }

    function detail_title_h2($idphong){
        $connect = connect_db();
        $sql = "SELECT * FROM phong WHERE idphong = $idphong";
        $result = mysqli_query($connect, $sql);
        while($row = $result->fetch_assoc()){
            echo $row['tenphong'];
        }
    }

    function detail_motaphong($idphong){
        $connect = connect_db();
        $sql = "SELECT * FROM phong WHERE idphong = $idphong";
        $result = mysqli_query($connect, $sql);
        while($row = $result->fetch_assoc()){
            echo $row['mota_phong'];
        }
    }

    function detail_sophong_succhua($idphong){
        $connect = connect_db();
        $sql = "SELECT * FROM phong WHERE idphong = $idphong";
        $result = mysqli_query($connect, $sql);
        while($row = $result->fetch_assoc()){
            echo '<li>- Số phòng: '.$row['idphong'].'</li>
                  <li>- Sức chứa: '.$row['soluongnguoi'].' người/ phòng</li>';
        }
    }
    function detail_diachi($idphong){
        $connect = connect_db();
        $sql = "SELECT * FROM phong p INNER JOIN chinhanh c ON p.diachi = c.idchinhanh WHERE idphong = $idphong";
        $result = mysqli_query($connect, $sql);
        while($row = $result->fetch_assoc()){
            echo $row['tenchinhanh'];
        }
    }

    function detail_lienquan($idCN,$idphong){
        $connect = connect_db();
        $sql = "SELECT * FROM phong p INNER JOIN chinhanh c ON p.diachi = c.idchinhanh WHERE c.idchinhanh = $idCN and idphong != $idphong ORDER BY rand()";
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

    function detail_luotxem($idphong){
        $connect = connect_db();
        $sql = "UPDATE phong SET luotxem = luotxem + 1 WHERE idphong = $idphong";
        $result = mysqli_query($connect, $sql);
        return $result;
    }
    function viewsp($masp){
        $conn = connect_db();
        $result = $conn->query("UPDATE product SET viewsp = viewsp + 1 WHERE masp = '$masp'");
        return $result;
    }
    function soluongnguoi_detail(){
        $connect =connect_db();
        $sql = "SELECT * FROM phong ORDER BY soluongnguoi DESC LIMIT 1";
        $result = mysqli_query($connect, $sql);
        while($row=$result->fetch_assoc()){
            for ($i=1; $i <= $row['soluongnguoi']; $i++) { 
                echo '<option value="'.$i.'">'.$i.' người </option>';
            }
        }
    }
    function soluongnguoi_detail_gioihantheophong($idphong){
        $connect =connect_db();
        $sql = "SELECT * FROM phong WHERE idphong = $idphong ORDER BY soluongnguoi DESC LIMIT 1";
        $result = mysqli_query($connect, $sql);
        while($row=$result->fetch_assoc()){
            for ($i=1; $i <= $row['soluongnguoi']; $i++) { 
                echo '<option value="'.$i.'">'.$i.' người </option>';
            }
        }
    }
    function suatranthai_tenphong(){
        $connect =connect_db();
        $sql = "SELECT * FROM phong ORDER BY tenphong DESC";
        $result = mysqli_query($connect, $sql);
        while($row=$result->fetch_assoc()){
                echo '<option value="'.$row['idphong'].'">'.$row['tenphong'].' </option>';
        }
    }
    //detail mobile
    function detail_anh_mobile_active($idphong){
        $connect = connect_db();
        $sql = "SELECT * FROM phong p INNER JOIN anhchitiet a ON p.idphong = a.idphong WHERE a.idphong = $idphong";
        $result = mysqli_query($connect, $sql);
        while($row = $result->fetch_assoc()){
            echo '<div class="carousel-item active">
                    <img src="'.$row['images'].'" alt="...">
                </div>';
        }
    }
    function detail_anh_mobile($idphong){
        $connect = connect_db();
        $sql = "SELECT * FROM phong p INNER JOIN anhchitiet a ON p.idphong = a.idphong WHERE a.idphong = $idphong";
        $result = mysqli_query($connect, $sql);
        while($row = $result->fetch_assoc()){
            echo '<div class="carousel-item">
                    <img src="'.$row['anh1'].'" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="'.$row['anh2'].'" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="'.$row['anh3'].'" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="'.$row['anh4'].'" alt="...">
                </div>';
        }
    }

    function insert_form_dat_phong($hoten,$sdt,$email,$ngay,$thoigian,$soluongnguoi,$ghichu,$idphong){
        $connect = connect_db();
        $sql = "INSERT INTO formdatphong VALUES(null,null,'$hoten',$sdt,'$ngay','$thoigian',$soluongnguoi,1,'$ghichu',$idphong)";
        $sql_tenphong = "SELECT * FROM phong p INNER JOIN chinhanh c ON c.idchinhanh = p.diachi WHERE p.idphong = $idphong";
        
        $result_ma = mysqli_query($connect,"SELECT idform FROM formdatphong ORDER BY idform DESC LIMIT 1");
        while($row = $result_ma->fetch_assoc()){
            $madondatphong = $row['idform']+1;
        }
        mysqli_query($connect,$sql);
        $result = mysqli_query($connect, $sql_tenphong);
        while($row = $result->fetch_assoc()){
             $tenphong_ = $row['tenphong'];
             $diachi_ = $row['tenchinhanh'];
        }
        $email_to = $email;
            $subject = "Chào $hoten - KoKo Karaoke đã nhận đơn đặt phòng của bạn";
            $message = '
                        <html>
                            <img src="https://i.ibb.co/PgGhfS9/logo-new.png" width="200px" alt="">
                            <h2>Cám ơn bạn đã đặt phòng tại KoKo Karaoke!</h2>
                            <div class="content">
                                <h2>Xin Chào '.$hoten.' ,</h2>
                                <p>Cám ơn bạn đã tin tưởng KoKo Karaoke! <br>
                                KoKo Karaoke đã nhận được yêu cầu đặt phòng của bạn và đang xử lý nhé.<br>
                                CSKH sẽ sớm liên hệ với bạn trong 1 giờ tới để xác nhận đơn đặt phòng.<br></p>
                                <hr>
                                <div class="koko_top">
                                <div class="koko_top_content">
                                    <div class="koko_top_left">
                                        <img width="80px" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Time:%20'.date('d-m-Y').'_KoKo%20Karaoke%20-%20%C4%90%C6%A1n%20%C4%91%E1%BA%B7t%20ph%C3%B2ng%20-%20M%C3%A3:%20xxx%20-%20H%E1%BB%8D%20T%C3%AAn%20KH:%20'.$hoten.'%20-%20S%C4%90T:%20'.$sdt.'%20-%20S%E1%BB%91%20l%C6%B0%E1%BB%A3ng%20ng%C6%B0%E1%BB%9Di:%20'.$soluongnguoi.'%20-%20Th%E1%BB%9Di%20gian:%20'.$ngay.'_'.$thoigian.'" alt="">
                                    </div>
                                    <div class="koko_top_right">
                                        <p>Số điện thoại: 0968.66.88.44</p>
                                        <p>Email: contact@Ko2.com</p>
                                        <p>Địa chỉ: 107A Nguyễn Phong Sắc, Phường Dịch Vọng Hậu, Quận Cầu Giấy, Hà Nội</p>
                                    </div>
                                </div>
                            </div>
                                <div class="koko_content">
                                <h2>Đơn đặt phòng</h2>
                                <div class="koko_content_top">
                                    <span>Ngày: '.date('d-m-Y').'</span>
                                    <span>Mã đơn đặt phòng: '.$madondatphong.'</span> <br>
                                    <span>Tên phòng: '.$tenphong_.'</span><br>
                                    <span>Chi nhánh: '.$diachi_.'</span>
                                    
                                </div>
                                <div class="koko_khachhang_va_QR">
                                    <div class="koko_khachhang">
                                        <h4 class="h4_css">Thông tin khách hàng</h4>
                                        <span>Họ tên: '.$hoten.'</span><br>
                                        <span>SĐT: '.$sdt.'</span><br>
                                        <span>Số lượng: '.$soluongnguoi.' Người</span><br>
                                        <span>Thời gian đặt phòng: <span id="ngay_hienthi">'.$ngay.'</span> - <span id="thoigian_hienthi">'.$thoigian.'</span></span><br>
                                        <span>Ghi chú: <span id="ghichu_hienthi">'.$ghichu.'</span></span><br>
                                    </div>
                                    <div class="qr">
                                        <img src="https://phatbinhminh.com/wp-content/uploads/2019/10/qr-vcb-660x879.jpg" width="100px" alt="">
                                        <h5 class="h4_css">1000012128482843</h5>
                                        <h4 class="h4_css">QR Code VietComBank</h4>
                                    </div>
                                </div>
                                <div class="koko_content_footer">
                                    <p>Vui lòng thanh toán trước <b>500.000 VNĐ</b> để giữ phòng</p>
                                    <p>(bạn có thể thanh toán online hoặc offline tại các chi nhánh)</p>
                                    <br>
                                    <span>Cảm ơn bạn đã lựa chọn dịch vụ của <b>KoKo Karaoke</b></span>
                                </div>
                            </div>
                        </html>';

            $headers = "From:contact.kokokaraoke@gmail.com \r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html\r\n";

            mail($email_to, $subject, $message, $headers);
    }
    // dat phong
    function quanly_form_dat_phongALL(){
        $connect = connect_db();
        $sql = "SELECT * FROM formdatphong dp INNER JOIN phong p INNER JOIN trangthaidatphong tdp INNER JOIN chinhanh c ON dp.idphong = p.idphong AND dp.trangthai = tdp.idtrangthai AND c.idchinhanh = p.diachi ORDER BY idform DESC";
        $result = mysqli_query($connect,$sql);
        $stt = 1;
        while($row=$result->fetch_assoc()){
            echo '<tr>
                    <td>'.$stt++.'</td>
                    <td>'.$row['idform'].'</td>
                    <td>'.$row['thoigian_datform'].'</td>
                    <td>'.$row['hotenKH'].'</td>
                    <td>0'.$row['sdt'].'</td>
                    <td>'.$row['ngay_datphong'].' _ '.$row['gio_datphong'].'</td>
                    <td>'.$row['SLnguoi'].'</td>
                    <td id="trangthai">
                    '.$row['tentrangthai'].'
                    </td>
                    <td>
                    <a href="../detail.php?idphong='.$row['idphong'].'&idCN='.$row['idchinhanh'].'" class="contai__body-link">
                                '.$row['tenphong'].'
                            </a>
                    </td>
                    <td>'.$row['ghichu'].'</td>';
                    // <td>
                    //     <a class="btn btn btn-danger"href="">
                    //     <i class="far fa-trash-alt"></i>
                    //     </a>
                    // </td>
                    echo'<td>
                        <a href="suatrangthai.php?idform='.$row['idform'].'&idtrangthai='.$row['idtrangthai'].'"class="fas fa-tools"></a>
                    </td>
                </tr>';
        }
    }

    function quanly_form_dat_phongALL_homnay(){
        $connect = connect_db();
        $_ngay_hn = date('Y-m-d');
        $sql = "SELECT * FROM formdatphong dp INNER JOIN phong p INNER JOIN trangthaidatphong tdp INNER JOIN chinhanh c ON dp.idphong = p.idphong AND dp.trangthai = tdp.idtrangthai AND c.idchinhanh = p.diachi WHERE thoigian_datform like '$_ngay_hn%'  ORDER BY idform DESC";
        $result = mysqli_query($connect,$sql);
        $stt = 1;
        while($row=$result->fetch_assoc()){
            echo '<tr>
                    <td>'.$stt++.'</td>
                    <td>'.$row['idform'].'</td>
                    <td>'.$row['thoigian_datform'].'</td>
                    <td>'.$row['hotenKH'].'</td>
                    <td>0'.$row['sdt'].'</td>
                    <td>'.$row['ngay_datphong'].' _ '.$row['gio_datphong'].'</td>
                    <td>'.$row['SLnguoi'].'</td>
                    <td id="trangthai">
                    '.$row['tentrangthai'].'
                    </td>
                    <td>
                    <a href="../detail.php?idphong='.$row['idphong'].'&idCN='.$row['idchinhanh'].'" class="contai__body-link">
                                '.$row['tenphong'].'
                            </a>
                    </td>
                    <td>'.$row['ghichu'].'</td>';
                    // <td>
                    //     <a class="btn btn btn-danger"href="">
                    //     <i class="far fa-trash-alt"></i>
                    //     </a>
                    // </td>
                    echo'<td>
                        <a href="suatrangthai.php?idform='.$row['idform'].'&idtrangthai='.$row['idtrangthai'].'"class="fas fa-tools"></a>
                    </td>
                </tr>';
        }
    }

    function quanly_form_dat_phong($idchinhanh,$idtrangthai_timkiem){
        $connect = connect_db();
        $sql = "SELECT * FROM formdatphong dp INNER JOIN phong p INNER JOIN trangthaidatphong tdp INNER JOIN chinhanh c ON dp.idphong = p.idphong AND dp.trangthai = tdp.idtrangthai AND c.idchinhanh = p.diachi WHERE c.idchinhanh = $idchinhanh AND tdp.idtrangthai = $idtrangthai_timkiem";
        $result = mysqli_query($connect,$sql);
        $stt = 1;
        while($row=$result->fetch_assoc()){
            echo '<tr>
                    <td>'.$stt++.'</td>
                    <td>'.$row['idform'].'</td>
                    <td>'.$row['thoigian_datform'].'</td>
                    <td>'.$row['hotenKH'].'</td>
                    <td>0'.$row['sdt'].'</td>
                    <td>'.$row['ngay_datphong'].' _ '.$row['gio_datphong'].'</td>
                    <td>'.$row['SLnguoi'].'</td>
                    <td id="trangthai">
                    '.$row['tentrangthai'].'
                    </td>
                    <td>
                    <a href="../detail.php?idphong='.$row['idphong'].'&idCN='.$row['idchinhanh'].'" class="contai__body-link">
                                '.$row['tenphong'].'
                            </a>
                    </td>
                    <td>'.$row['ghichu'].'</td>';
                    // <td>
                    //     <a class="btn btn btn-danger"href="">
                    //     <i class="far fa-trash-alt"></i>
                    //     </a>
                    // </td>
                    echo'<td>
                        <a href="suatrangthai.php?idform='.$row['idform'].'&idtrangthai='.$row['idtrangthai'].'"class="fas fa-tools"></a>
                    </td>
                </tr>';
        }
    }
    function quanly_form_dat_phong2($idchinhanh){
        $connect = connect_db();
        $sql = "SELECT * FROM formdatphong dp INNER JOIN phong p INNER JOIN trangthaidatphong tdp INNER JOIN chinhanh c ON dp.idphong = p.idphong AND dp.trangthai = tdp.idtrangthai AND c.idchinhanh = p.diachi WHERE c.idchinhanh = $idchinhanh";
        $result = mysqli_query($connect,$sql);
        $stt = 1;
        while($row=$result->fetch_assoc()){
            echo '<tr>
                    <td>'.$stt++.'</td>
                    <td>'.$row['idform'].'</td>
                    <td>'.$row['thoigian_datform'].'</td>
                    <td>'.$row['hotenKH'].'</td>
                    <td>0'.$row['sdt'].'</td>
                    <td>'.$row['ngay_datphong'].' _ '.$row['gio_datphong'].'</td>
                    <td>'.$row['SLnguoi'].'</td>
                    <td id="trangthai">
                    '.$row['tentrangthai'].'
                    </td>
                    <td>
                    <a href="../detail.php?idphong='.$row['idphong'].'&idCN='.$row['idchinhanh'].'" class="contai__body-link">
                                '.$row['tenphong'].'
                            </a>
                    </td>
                    <td>'.$row['ghichu'].'</td>';
                    // <td>
                    //     <a class="btn btn btn-danger"href="">
                    //     <i class="far fa-trash-alt"></i>
                    //     </a>
                    // </td>
                    echo'<td>
                        <a href="suatrangthai.php?idform='.$row['idform'].'&idtrangthai='.$row['idtrangthai'].'"class="fas fa-tools"></a>
                    </td>
                </tr>';
        }
    }
    function quanly_form_dat_phong3($idtrangthai_timkiem){
        $connect = connect_db();
        $sql = "SELECT * FROM formdatphong dp INNER JOIN phong p INNER JOIN trangthaidatphong tdp INNER JOIN chinhanh c ON dp.idphong = p.idphong AND dp.trangthai = tdp.idtrangthai AND c.idchinhanh = p.diachi WHERE tdp.idtrangthai = $idtrangthai_timkiem";
        $result = mysqli_query($connect,$sql);
        $stt = 1;
        while($row=$result->fetch_assoc()){
            echo '<tr>
                    <td>'.$stt++.'</td>
                    <td>'.$row['idform'].'</td>
                    <td>'.$row['thoigian_datform'].'</td>
                    <td>'.$row['hotenKH'].'</td>
                    <td>0'.$row['sdt'].'</td>
                    <td>'.$row['ngay_datphong'].' _ '.$row['gio_datphong'].'</td>
                    <td>'.$row['SLnguoi'].'</td>
                    <td id="trangthai">
                    '.$row['tentrangthai'].'
                    </td>
                    <td>
                    <a href="../detail.php?idphong='.$row['idphong'].'&idCN='.$row['idchinhanh'].'" class="contai__body-link">
                                '.$row['tenphong'].'
                            </a>
                    </td>
                    <td>'.$row['ghichu'].'</td>';
                    // <td>
                    //     <a class="btn btn btn-danger"href="">
                    //     <i class="far fa-trash-alt"></i>
                    //     </a>
                    // </td>
                    echo'
                    <td>
                        <a href="suatrangthai.php?idform='.$row['idform'].'&idtrangthai='.$row['idtrangthai'].'"class="fas fa-tools"></a>
                    </td>
                </tr>';
        }
    }

    function suatrangthai($idform,$idtrangthai){
        $connect = connect_db();
        $sql = "SELECT * FROM formdatphong dp INNER JOIN phong p INNER JOIN trangthaidatphong tdp INNER JOIN chinhanh c ON dp.idphong = p.idphong AND dp.trangthai = tdp.idtrangthai AND c.idchinhanh = p.diachi WHERE dp.idform = $idform";
        $sql2 = "SELECT * FROM trangthaidatphong WHERE idtrangthai != $idtrangthai";
        $result = mysqli_query($connect,$sql);
        $result2 = mysqli_query($connect,$sql2);
        while($row=$result->fetch_assoc()){
            echo '<tr>
                    <td>'.$row['idform'].'</td>
                    <td><select name="select_tranthai" id="select_suatrangthai">
                    <option value="'.$row['idtrangthai'].'">'.$row['tentrangthai'].' </option>';
                    while($row2=$result2->fetch_assoc()){
                        echo '<option value="'.$row2['idtrangthai'].'">'.$row2['tentrangthai'].' </option>';
                    }
                    echo'
                </select></td>
                <td><input type="date" id="ngay" name="ngay_datphong" value="'.$row['ngay_datphong'].'"> <input id="gio" name="gio_datphong" type="time" value="'.$row['gio_datphong'].'"></td>
                <td><select name="soluongnguoi__" id="soluongnguoi__" required>
                <option value="'.$row['SLnguoi'].'">'.$row['SLnguoi'].' người</option>';
                soluongnguoi_detail();
                echo'</select></td>
                <td><select name="tenphong" id="tenphong__" required>
                <option value="'.$row['idphong'].'">'.$row['tenphong'].'</option>';
                suatranthai_tenphong();
                echo'</select></td>
                </tr>';
        }
    }

    function update_suatrangthai($trangthaidatphong,$idform,$ngaydatphong__,$giodatphong__,$soluongnguoi__,$idphong__){
        $connect = connect_db();
        mysqli_query($connect, "UPDATE formdatphong SET trangthai = $trangthaidatphong, ngay_datphong = '$ngaydatphong__' , gio_datphong = '$giodatphong__',SLnguoi = $soluongnguoi__, idphong = $idphong__ WHERE idform = $idform");
    }

    function chinhanh(){
        $connect = connect_db();
        $sql = "SELECT * FROM chinhanh";
        $result = mysqli_query($connect, $sql);
        while($row = $result->fetch_assoc()){
            echo '<button type="submit" name="btnChinhanh" value="'.$row['idchinhanh'].'" class="btn btn-info">'.$row['tenchinhanh'].'</button> ';
        }
    }
    function trangthaibtn(){
        $connect = connect_db();
        $sql = "SELECT * FROM trangthaidatphong";
        $result = mysqli_query($connect, $sql);
        while($row = $result->fetch_assoc()){
            echo '<option value="'.$row['idtrangthai'].'">'.$row['tentrangthai'].'</option>';
        }
    }

    // dang nhap
    function login($username,$password){
        $connect = connect_db();
        $sql = "SELECT * FROM user1 WHERE username = '$username' AND password = MD5('$password')";
        $result = mysqli_query($connect,$sql);
        if ($result->num_rows>0) {
            $_SESSION['taikhoan'] = $username;
            header('location: cpanel/extras-profile.php');
        }else{
            echo '<script>alert("Tài khoản mật khẩu không chính xác");</script>';
        }
    }
    function insert_vc_dk($ma_vc,$giatri_vc){
        $connect=connect_db();
        mysqli_query($connect, "INSERT INTO voucher VALUES(null,'$ma_vc',$giatri_vc,1);");
    }
    function timkiem_vc($ma_vc){
        $connect=connect_db();
        $sql = "SELECT * FROM voucher WHERE ma_vc LIKE '%$ma_vc'";
        $result = mysqli_query($connect,$sql);
        $stt=1;
        while($row = $result->fetch_assoc()){
            echo '<tr>
            <td>'.$stt++.'</td>
            <td>'.$row['ma_vc'].'</td>
            <td>'.number_format($row['giatri_vc_']).' VNĐ</td>
            <td>';
            if ($row['tinhtrang']!=0) {
                echo '<span id="chuasudung">Chưa sử dụng</span>';
            }else{
                echo '<span id="dasudung">Đã sử dụng</span>';
            }
            echo '</td>
            <td>
                <a class="btn btn btn-danger"href="voucher.php?idvc='.$row['id'].'">
                <i class="far fa-trash-alt"></i>
                </a>
            </td>
            <td>
                <a class="btn" href="voucher.php?idvc_sua='.$row['id'].'">
                <i class="fas fa-tools"></i>
                </a>
            </td>
        </tr> ';
        }
    }
    // Dang ky
    function dangky($username,$password,$email){
        $connect = connect_db();
        $radom_gia_tri = mysqli_query($connect,"SELECT * FROM giatri_vc ORDER BY rand() LIMIT 1");
        while($row = $radom_gia_tri->fetch_assoc()){
            $giatri_vc = $row['giatri'];
        }
        $sql = "INSERT INTO user1 VALUES(null,'$username',MD5('$password'),'$email','./cpanel/assets/images/users/avatar-null.gif','','','0',0)";
        $result = mysqli_query($connect,$sql);
        if ($result) {
            echo '<span class="thongbao">đăng ký thành công</span>';
            $_SESSION['taikhoan'] = $username;

            $email_to = $email;
            $subject = "Chào Mừng Bạn Đến Với KoKo Karaoke";
            $message = '
                        <html>
                            
                            <img src="https://i.ibb.co/PgGhfS9/logo-new.png" width="200px" alt="">
                            <h2>Chào Mừng Bạn Đến Với KoKo Karaoke</h2>
                            <div class="content">
                                <p>Bạn Đã Đăng Ký Thành Công Tài Khoản Trên KoKo Karaoke.<br>
                                    Bây giờ bạn có thể thỏa sức đặt phòng Karaoke trên hệ thống của KoKo Karaoke</p>
                                <i><p>Tài Khoản: '.$username.' <b></b></p></i>
                                <i><p>Mật Khẩu: '.$password.' <b></b></p></i>
                                <p><b>Voucher giảm giá</b><br>Tặng bạn một mã voucher giảm giá</p>
                                <span><b>CODE: '.($ma_vc = rand()).'</b> Trị giá '.$giatri_vc.' VNĐ</span>
                                <br>
                                <br>
                                <a href="http://localhost/web_karaoke/">Đặt Ngay</a>
                            </div>
                        </html>';

            $headers = "From:contact.kokokaraoke@gmail.com \r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html\r\n";
            insert_vc_dk($ma_vc,$giatri_vc);
            mail($email_to, $subject, $message, $headers);
            header('location: index.php');
        }else{
            echo '<span class="thongbao"> đăng ký thất bại </span>';
        }
    }

    function avt($username){
        $connect = connect_db();
        $sql = "SELECT * FROM user1 WHERE username = '$username'";
        $result = mysqli_query($connect,$sql);
        while($row = $result->fetch_assoc()){
            echo $row['avatar'];
        }
    }
    function email($username){
        $connect = connect_db();
        $sql = "SELECT * FROM user1 WHERE username = '$username'";
        $result = mysqli_query($connect,$sql);
        while($row = $result->fetch_assoc()){
            echo $row['email'];
        }
    }
    function about_me($username){
        $connect = connect_db();
        $sql = "SELECT * FROM user1 WHERE username = '$username'";
        $result = mysqli_query($connect,$sql);
        while($row = $result->fetch_assoc()){
            echo $row['about_me'];
        }
    }
    function hoten($username){
        $connect = connect_db();
        $sql = "SELECT * FROM user1 WHERE username = '$username'";
        $result = mysqli_query($connect,$sql);
        while($row = $result->fetch_assoc()){
            echo $row['hoten'];
        }
    }
    function sdt($username){
        $connect = connect_db();
        $sql = "SELECT * FROM user1 WHERE username = '$username'";
        $result = mysqli_query($connect,$sql);
        while($row = $result->fetch_assoc()){
            echo $row['sdt_user'];
        }
    }
    // check quyen admin
    function check_quyenadmin($username){
        $connect = connect_db();
        $sql = "SELECT * FROM user1 WHERE username = '$username' AND isAdmin = 2";
        $sql2 = "SELECT * FROM user1 WHERE username = '$username' AND isAdmin = 1";
        $result = mysqli_query($connect,$sql);
        $result2 = mysqli_query($connect,$sql2);
        if ($result->num_rows>0) {
            echo '<ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>
    
                    <li>
                        <a href="index.php" class="waves-effect">
                            <i class="fa fas fa-chart-pie"></i>
                            <span href="index.php">Bảng thống kê</span>
                        </a>
                     
                    </li>
    
                    <li>
                        <a href="./dondatphong.php" class="waves-effect">
                            <i class=" fas fa-shopping-basket"></i>
                            <span> Quản lý đơn đặt phòng </span>
                        </a>
                    </li>

                    <li>
                        <a href="./quanlybinhluan.php" class="waves-effect">
                            <i class="fa fas fa-comment"></i>
                            <span> Quản lý bình luận </span>
                        </a>
                    </li>

                    <li>
                        <a href="./voucher.php" class="waves-effect">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <span> Quản lý voucher </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="./phong.php" class="waves-effect">
                            <i class=" fas fa-theater-masks"></i>
                            <span> Quản lý phòng </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="chi_nhanh.php" class="waves-effect">
                            <i class=" fas fa-map-marker-alt"></i>
                            <span> Quản lý chi nhánh </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="info.php" class="waves-effect">
                            <i class=" remixicon-settings-3-fill"></i>
                            <span> Quản lý hệ thống</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="slider.php" class="waves-effect">
                            <i class=" remixicon-slideshow-fill"></i>
                            <span> Quản lý slider</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="images_product.php" class="waves-effect">
                            <i class="bi bi-images"></i>
                            <span> Ảnh chi tiết</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="user.php" class="waves-effect">
                            <i class="remixicon-user-3-fill"></i>
                            <span> Quản lý user</span>
                        </a>
                    </li>

                    <li>
                        <a href="./blog.php" class="waves-effect">
                            <i class="fab fa-blogger-b"></i>
                            <span> Quản lý blog </span>
                        </a>
                    </li>
    
    
                    
                </ul>';
        }else if($result2->num_rows>0){
            echo '<ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>
    
                    <li>
                        <a href="index.php" class="waves-effect">
                            <i class="remixicon-dashboard-line"></i>
                            <span href="index.php">Bảng thống kê</span>
                        </a>
                     
                    </li>
    
                    <li>
                        <a href="./dondatphong.php" class="waves-effect">
                            <i class="bi bi-bar-chart"></i>
                            <span> Quản lý đơn đặt phòng </span>
                        </a>
                    </li>

                    <li>
                        <a href="./voucher.php" class="waves-effect">
                            <i class="bi bi-bar-chart"></i>
                            <span> Quản lý voucher </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="./phong.php" class="waves-effect">
                            <i class="bi bi-border-all"></i>
                            <span> Quản lý phòng </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="images_product.php" class="waves-effect">
                            <i class="bi bi-images"></i>
                            <span> Ảnh chi tiết</span>
                        </a>
                    </li>
                </ul>';
        }
    }

    //update thông tin cá nhân
    function update_avatar($name,$tmp_name,$username){
        $connect = connect_db();
        $path = "./public/image/anhphong"; // Ảnh sẽ lưu vào thư mục images
        move_uploaded_file($tmp_name, "../public/image/anhphong/".$name);   
        $avatar_link = $path .'/'. $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        $sql = "UPDATE user1 SET avatar = '$avatar_link' WHERE username = '$username'";
        mysqli_query($connect,$sql);
    }
    function update_hoten($username,$hoten){
        $connect = connect_db();
        $sql = "UPDATE user1 SET hoten = '$hoten' WHERE username = '$username'";
        mysqli_query($connect,$sql);
    }
    function update_about_me($username,$about_me){
        $connect = connect_db();
        $sql = "UPDATE user1 SET about_me = '$about_me' WHERE username = '$username'";
        mysqli_query($connect,$sql);
    }
    function update_sdt($username,$sdt){
        $connect = connect_db();
        $sql = "UPDATE user1 SET sdt_user = '$sdt' WHERE username = '$username'";
        mysqli_query($connect,$sql);
    }
    function update_password($username,$password){
        $connect = connect_db();
        $sql = "UPDATE user1 SET password = MD5('$password') WHERE username = '$username'";
        mysqli_query($connect,$sql);
    }

    //quan ly chi nhanh

    function quanlychinhanh(){
        $connect=connect_db();
        $sql="SELECT * FROM chinhanh";
        $result=mysqli_query($connect,$sql);
        $stt=0;
        while($row=$result->fetch_assoc()){
           echo' <tr>
            <td>'.$stt++.'</td>
            <td>'.$row['idchinhanh'].'</td>
            <td>'.$row['tenchinhanh'].'</td>
            <td>
                <a class="btn btn btn-danger" href="chi_nhanh.php?idchinhanh='.$row['idchinhanh'].'">
                <i class="far fa-trash-alt"></i>
                </a>
            </td>
            <td>
                <a class="btn"href="edit_chinhanh.php?idchinhanh='.$row['idchinhanh'].'&tenchinhanh='.$row['tenchinhanh'].'">
                <i class="fas fa-tools"></i>
                </a>
            </td>
        </tr> ';
        }
    }

    function suatenchinhanh($idchinhanh,$tenchinhanhmoi){
        $connect=connect_db();
        $sql="UPDATE chinhanh SET tenchinhanh = '$tenchinhanhmoi' WHERE idchinhanh = $idchinhanh  ";
        mysqli_query($connect,$sql);
    }

    function themchinhanh($tenchinhanh){
        $connect=connect_db();
        $sql="INSERT INTO chinhanh VALUES (null,'".$tenchinhanh."')  ";
        mysqli_query($connect,$sql);
    }
    function xoachitietanh_(){
        $idchinhanh=$_GET['idchinhanh'];
        $connect = connect_db();
        $sql = "SELECT * FROM phong WHERE diachi = $idchinhanh";
        $result = mysqli_query($connect,$sql);
        while($row=$result->fetch_assoc()){
            $idphong = $row['idphong'];
            mysqli_query($connect,"DELETE FROM anhchitiet WHERE idphong = $idphong");
        }
            
    }
    function xoaformdatphong(){
        $idchinhanh=$_GET['idchinhanh'];
        $connect = connect_db();
        $sql = "SELECT * FROM phong WHERE diachi = $idchinhanh";
        $result = mysqli_query($connect,$sql);
        while($row=$result->fetch_assoc()){
            $idphong = $row['idphong'];
            mysqli_query($connect,"DELETE FROM formdatphong WHERE idphong = $idphong");
        }
            
    }
    function xoachinhanh(){
        $idchinhanh=$_GET['idchinhanh'];
        $connect=connect_db();
        $sql2="DELETE FROM phong WHERE diachi=$idchinhanh";
        $sql="DELETE FROM chinhanh WHERE idchinhanh=$idchinhanh";
        $result2 = mysqli_query($connect,$sql2);
        $result = mysqli_query($connect,$sql);
        if ($result2&&$result) {
            header('location: chi_nhanh.php');
        }
    }

    // cpanel phong
    function danhsach_phong(){
        $connect = connect_db();
        $result = mysqli_query($connect,"SELECT * FROM phong p INNER JOIN chinhanh c ON c.idchinhanh = p.diachi ORDER BY idphong ASC");
        $stt =1;
        while($row = $result->fetch_assoc()){
            echo '<tr>
            <td>'.$stt++.'</td>
            <td>'.$row['idphong'].'</td>
            <td>'.$row['tenphong'].'</td>
            <td>
                <a href="images_product.php?idphong='.$row['idphong'].'"> <img src=".'.$row['images'].'" alt="" width="80px"> </a>
            </td>
            <td>'.$row['soluongnguoi'].'</td>
            <td>'.$row['giaphong'].' VNĐ/1h</td>
            <td>'.$row['luotxem'].'</td>
            <td>'.$row['tenchinhanh'].'</td>
            <td>
                <a class="btn btn btn-danger"href="phong.php?idphong='.$row['idphong'].'">
                <i class="far fa-trash-alt"></i>
                </a>
            </td>
            <td>
                <a class="btn"href="themphong.php?idphong_update='.$row['idphong'].'">
                <i class="fas fa-tools"></i>
                </a>
            </td>
        </tr> ';
        }
    }
    function check_update_them($idphong_update){
        $connect =connect_db();
        $result = mysqli_query($connect,"SELECT * FROM phong p INNER JOIN chinhanh c ON p.diachi = c.idchinhanh WHERE idphong = $idphong_update");
        if (isset($_GET['idphong_update'])) {
            echo '<script>document.querySelector(".update_title").innerHTML = "Update phòng"</script>';
                while($row = $result->fetch_assoc()){
                echo '<form method="POST" enctype="multipart/form-data" class="card">
                <div class="card-body themphongcss">
                    <label for="">
                        <span>Tên phòng</span>
                        <input type="text" name="tenphong" value="'.$row['tenphong'].'" id="" placeholder="Tên phòng">
                    </label>
                    <label for="">
                        <span>Ảnh phòng</span>
                        <img src=".'.$row['images'].'" alt="" width="100%">
                        <input type="file" name="upload" id="upload" accept=".jpg, .jpeg, .png, .gif, .webp">
                    </label>
                    <label for="">
                        <span>Số lượng người</span>
                        <input type="number" value="'.$row['soluongnguoi'].'" name="soluongnguoi" min="1" id="" placeholder="Số lượng người">
                    </label>
                    <label for="">
                        <span>Giá phòng</span>
                        <input type="number" value="'.$row['giaphong'].'" name="giaphong" id="" placeholder="Giá phòng">
                    </label>
                    <label for="">
                        <span>Chi nhánh</span>
                        <select value="" name="chinhanh" id="">
                        <option value="1">'.$row['tenchinhanh'].'</option>';
                            list_chi_nhanh_tim_kiem_nang_cao();
                        echo '</select>
                    </label>
                    <label for="">
                        <span>Mô tả phòng</span>
                        <textarea name="motaphong" id="" cols="10" rows="10">'.$row['mota_phong'].'</textarea>
                    </label>
                    <label for="">
                        <button type="submit" class="btn btn-info" name="btnUpdate">Update phòng</button>
                    </label>
                </div>
                </form>';
            }
        }else{
            echo '<form method="POST" enctype="multipart/form-data" class="card">
            <div class="card-body themphongcss">
                <label for="">
                    <span>Tên phòng</span>
                    <input type="text" name="tenphong" id="" placeholder="Tên phòng">
                </label>
                <label for="">
                    <span>Ảnh phòng</span>
                    <input type="file" name="upload" id="upload" accept=".jpg, .jpeg, .png">
                </label>
                <label for="">
                    <span>Số lượng người</span>
                    <input type="number" name="soluongnguoi" min="1" id="" placeholder="Số lượng người">
                </label>
                <label for="">
                    <span>Giá phòng</span>
                    <input type="number" name="giaphong" id="" placeholder="Giá phòng">
                </label>
                <label for="">
                    <span>Chi nhánh</span>
                    <select name="chinhanh" id="">';
                         list_chi_nhanh_tim_kiem_nang_cao();
                    echo '</select>
                </label>
                <label for="">
                    <span>Mô tả phòng</span>
                    <textarea name="motaphong" id="" cols="10" rows="10"></textarea>
                </label>
                <label for="">
                     <button type="submit" class="btn btn-info" name="btnThem">Thêm phòng</button>
                </label>
            </div>
            </form>';
        }
    }
    function sua_phong($tenphong, $tmp_name, $name, $soluongnguoi,$giaphong,$diachi,$motaphong,$idphong_update){
        $connect = connect_db();
        if (empty($tmp_name) || empty($name)) {
            $sql = "UPDATE phong SET tenphong = '$tenphong', soluongnguoi = $soluongnguoi, giaphong = $giaphong, diachi = $diachi, mota_phong = '$motaphong' WHERE idphong = $idphong_update";
        }else{
            $path = "./public/image/anhphong";
            move_uploaded_file($tmp_name, "../public/image/anhphong/".$name);   
            $image_url = $path .'/'. $name;
            $sql = "UPDATE phong SET tenphong = '$tenphong', images = '$image_url', soluongnguoi = $soluongnguoi, giaphong = $giaphong, diachi = $diachi, mota_phong = '$motaphong' WHERE idphong = $idphong_update";
        }
        $result = mysqli_query($connect,$sql);
        if ($result) {
            header('location: phong.php');
        }
    }
    function ds_anhchitiet_phong(){
        $connect = connect_db();
        $sql = "SELECT * FROM anhchitiet a inner join phong p ON p.idphong = a.idphong";
        $result = mysqli_query($connect,$sql);
        $stt =1;
        while($row = $result->fetch_assoc()){
            echo '<tr>
            <td>'.$stt++.'</td>
            <td>'.$row['tenphong'].'</td>
            <td>
                <img src=".'.$row['anh1'].'" alt="" width="80px">
            </td>
            <td>
                <img src=".'.$row['anh2'].'" alt="" width="80px">
            </td>
            <td>
                <img src=".'.$row['anh3'].'" alt="" width="80px">
            </td>
            <td>
                <img src=".'.$row['anh4'].'" alt="" width="80px">
            </td>
            <td>
                <a class="btn btn btn-danger"href="images_product.php?idphongxoa='.$row['idphong'].'">
                <i class="far fa-trash-alt"></i>
                </a>
            </td>
            <td>
                <a class="btn" href="images_product.php?idphong='.$row['idphong'].'">
                <i class="fas fa-tools"></i>
                </a>
            </td>
        </tr> ';
        }
    }
    function xoa_anhchitiet_phong($idphongxoa){
        $conn = connect_db();
        $sql = "DELETE FROM anhchitiet WHERE idphong = $idphongxoa";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            header('location: images_product.php');
        }
    }
    function them_anhchitiet_phong($anh1_name,$anh1_tmp,$anh2_name,$anh2_tmp,$anh3_name,$anh3_tmp,$anh4_name,$anh4_tmp,$idphong){
        $connect = connect_db();
        $path = "./public/image/anhphong"; // Ảnh sẽ lưu vào thư mục images/anhphong
        move_uploaded_file($anh1_tmp, "../public/image/anhphong/".$anh1_name);   
        $image_url1 = $path .'/'. $anh1_name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        move_uploaded_file($anh2_tmp, "../public/image/anhphong/".$anh2_name);   
        $image_url2 = $path .'/'. $anh2_name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        move_uploaded_file($anh3_tmp, "../public/image/anhphong/".$anh3_name);   
        $image_url3 = $path .'/'. $anh3_name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        move_uploaded_file($anh4_tmp, "../public/image/anhphong/".$anh4_name);   
        $image_url4 = $path .'/'. $anh4_name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        $sql = "INSERT INTO anhchitiet VALUES(null,'$image_url1','$image_url2','$image_url3','$image_url4',$idphong)";
        $result = mysqli_query($connect,$sql);
        if ($result) {
            header('location: images_product.php');
        }
    }

    function update_anhchitiet_phong($anh1_name,$anh1_tmp,$anh2_name,$anh2_tmp,$anh3_name,$anh3_tmp,$anh4_name,$anh4_tmp,$idphong){
        $connect = connect_db();
        $path = "./public/image/anhphong"; // Ảnh sẽ lưu vào thư mục images/anhphong
        move_uploaded_file($anh1_tmp, "../public/image/anhphong/".$anh1_name);   
        $image_url1 = $path .'/'. $anh1_name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        move_uploaded_file($anh2_tmp, "../public/image/anhphong/".$anh2_name);   
        $image_url2 = $path .'/'. $anh2_name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        move_uploaded_file($anh3_tmp, "../public/image/anhphong/".$anh3_name);   
        $image_url3 = $path .'/'. $anh3_name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        move_uploaded_file($anh4_tmp, "../public/image/anhphong/".$anh4_name);   
        $image_url4 = $path .'/'. $anh4_name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        $sql = "UPDATE anhchitiet SET anh1 = '$image_url1',anh2 = '$image_url2',anh3 = '$image_url3',anh4 = '$image_url4' WHERE idphong = $idphong";
        $result = mysqli_query($connect,$sql);
        if ($result) {
            header('location: images_product.php');
            echo '<script> alert("update thành công");</>';
        }
    }

    function check_iphong_anhchitiet($idphong){
        $conn = connect_db();
        $sql = "SELECT * FROM anhchitiet a INNER JOIN phong p ON a.idphong = p.idphong WHERE a.idphong = $idphong";
        $result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, "SELECT * FROM phong WHERE idphong = $idphong");
        if ($result->num_rows>0) {
            while($row = $result->fetch_assoc()){
                echo '<script>
                      document.querySelector(".doitieude").innerHTML = "Update ảnh chi tiết phòng ('.$row['tenphong'].')";</script>';
                echo '<form method="POST" enctype="multipart/form-data" class="card">
                    <div class="card-body themphongcss">
                        <label for="">
                            <span>Ảnh 1</span>
                            <img src=".'.$row['anh1'].'" alt="" height="50">
                            <input type="file" name="upload1" id="upload" accept=".jpg, .jpeg, .png">
                        </label>
                        <label for="">
                            <span>Ảnh 2</span>
                            <img src=".'.$row['anh2'].'" alt="" height="50">
                            <input type="file" name="upload2" id="upload" accept=".jpg, .jpeg, .png">
                        </label>
                        <label for="">
                            <span>Ảnh 3</span>
                            <img src=".'.$row['anh3'].'" alt="" height="50">
                            <input type="file" name="upload3" id="upload" accept=".jpg, .jpeg, .png">
                        </label>
                        <label for="">
                            <span>Ảnh 4</span>
                            <img src=".'.$row['anh4'].'" alt="" height="50">
                            <input type="file" name="upload4" id="upload" accept=".jpg, .jpeg, .png">
                        </label>
                        <label for="">
                            <button type="submit" class="btn btn-info" name="btnUpdate_anh">Update ảnh</button>
                        </label>
                    </div>
                </form>';
            }
        }else{
            while($row2 = $result2->fetch_assoc()){
                echo '<script>
                      document.querySelector(".doitieude").innerHTML = "Thêm ảnh chi tiết phòng ('.$row2['tenphong'].')";</script>';
                echo '<form method="POST" enctype="multipart/form-data" class="card">
                        <div class="card-body themphongcss">
                            <label for="">
                                <span>Ảnh 1</span>
                                <input type="file" name="upload1" id="upload" accept=".jpg, .jpeg, .png">
                            </label>
                            <label for="">
                                <span>Ảnh 2</span>
                                <input type="file" name="upload2" id="upload" accept=".jpg, .jpeg, .png">
                            </label>
                            <label for="">
                                <span>Ảnh 3</span>
                                <input type="file" name="upload3" id="upload" accept=".jpg, .jpeg, .png">
                            </label>
                            <label for="">
                                <span>Ảnh 4</span>
                                <input type="file" name="upload4" id="upload" accept=".jpg, .jpeg, .png">
                            </label>
                            <label for="">
                                <button type="submit" class="btn btn-info" name="btnThem_anh">Thêm ảnh</button>
                            </label>
                        </div>
                    </form>';
            }
            
        }
    }
    function xoaphong(){
        $idphong=$_GET['idphong'];
        $connect=connect_db();
        $result = mysqli_query($connect,"DELETE FROM phong WHERE idphong=$idphong");
        if ($result) {
            header('location: phong.php');
        }
    }
    function xoaformdatphong2(){
        $idphong=$_GET['idphong'];
        $connect=connect_db();
        mysqli_query($connect,"DELETE FROM formdatphong WHERE idphong=$idphong");
            
    }

    function themphong($tenphong,$tmp_name, $name, $soluongnguoi,$giaphong,$diachi,$motaphong){
        $connect = connect_db();
        $path = "./public/image/anhphong"; // Ảnh sẽ lưu vào thư mục images
        move_uploaded_file($tmp_name, "../public/image/anhphong/".$name);   
        $image_url = $path .'/'. $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        $sql = "INSERT INTO phong VALUES(null,'$tenphong','$image_url',$soluongnguoi,$giaphong,0,$diachi,1,'$motaphong')";
        mysqli_query($connect,$sql);
    }

    //voucher
    function danhsach_voucher(){
        $connect = connect_db();
        $result = mysqli_query($connect,"SELECT * FROM voucher");
        $stt =1;
        while($row = $result->fetch_assoc()){
            echo '<tr>
            <td>'.$stt++.'</td>
            <td>'.$row['ma_vc'].'</td>
            <td>'.number_format($row['giatri_vc_']).' VNĐ</td>
            <td>';
            if ($row['tinhtrang']!=0) {
                echo '<span id="chuasudung">Chưa sử dụng</span>';
            }else{
                echo '<span id="dasudung">Đã sử dụng</span>';
            }
            echo '</td>
            <td>
                <a class="btn btn btn-danger"href="voucher.php?idvc='.$row['id'].'">
                <i class="far fa-trash-alt"></i>
                </a>
            </td>
            <td>
                <a class="btn" href="voucher.php?idvc_sua='.$row['id'].'">
                <i class="fas fa-box-open openbox"></i>
                </a>
            </td>
        </tr> ';
        }
    }
    function xoa_voucher(){
        $idcv=$_GET['idvc'];
        $connect=connect_db();
        $result = mysqli_query($connect,"DELETE FROM voucher WHERE id=$idcv");
        if ($result) {
            header('location: voucher.php');
        }
    }
    function sua_vc(){
        $idcv_sua = $_GET['idvc_sua'];
        $connect = connect_db();
        $result = mysqli_query($connect, "UPDATE voucher SET tinhtrang = 0 WHERE id = $idcv_sua");
        if ($result) {
            header('location: voucher.php');
        }
        
    }
    function them_vc($giatri){
        $ma_vc = rand();
        $connect=connect_db();
        $result = mysqli_query($connect,"INSERT INTO voucher VALUES(null,'$ma_vc', $giatri, 1)");
        if ($result) {
            header('location: voucher.php');
        }
    }
    //chart
    function dondatphong_count(){
        $connect = connect_db();
        $result = mysqli_query($connect,"SELECT COUNT(idform) FROM formdatphong");
        while($row = $result->fetch_assoc()){
            echo $row['COUNT(idform)'];
        }
    }
    function user_count(){
        $connect = connect_db();
        $result = mysqli_query($connect,"SELECT COUNT(userid) FROM user1");
        while($row = $result->fetch_assoc()){
            echo $row['COUNT(userid)'];
        }
    }
    function phong_count(){
        $connect = connect_db();
        $result = mysqli_query($connect,"SELECT COUNT(idphong) FROM phong");
        while($row = $result->fetch_assoc()){
            echo $row['COUNT(idphong)'];
        }
    }
    function cn_count(){
        $connect = connect_db();
        $result = mysqli_query($connect,"SELECT COUNT(idchinhanh) FROM chinhanh");
        while($row = $result->fetch_assoc()){
            echo $row['COUNT(idchinhanh)'];
        }
    }
    function chart_fcn_1(){
        $connect = connect_db();
        $result = mysqli_query($connect,"SELECT COUNT(c.idchinhanh) FROM formdatphong f INNER JOIN phong p INNER JOIN chinhanh c ON p.idphong = f.idphong AND p.diachi = c.idchinhanh WHERE c.idchinhanh = 1");
        while($row = $result->fetch_assoc()){
            echo $row['COUNT(c.idchinhanh)'];
        }
    }
    function chart_fcn_2(){
        $connect = connect_db();
        $result = mysqli_query($connect,"SELECT COUNT(c.idchinhanh) FROM formdatphong f INNER JOIN phong p INNER JOIN chinhanh c ON p.idphong = f.idphong AND p.diachi = c.idchinhanh WHERE c.idchinhanh = 2");
        while($row = $result->fetch_assoc()){
            echo $row['COUNT(c.idchinhanh)'];
        }
    }
    function chart_fcn_3(){
        $connect = connect_db();
        $result = mysqli_query($connect,"SELECT COUNT(c.idchinhanh) FROM formdatphong f INNER JOIN phong p INNER JOIN chinhanh c ON p.idphong = f.idphong AND p.diachi = c.idchinhanh WHERE c.idchinhanh = 3");
        while($row = $result->fetch_assoc()){
            echo $row['COUNT(c.idchinhanh)'];
        }
    }
    function chart_fcn_4(){
        $connect = connect_db();
        $result = mysqli_query($connect,"SELECT COUNT(c.idchinhanh) FROM formdatphong f INNER JOIN phong p INNER JOIN chinhanh c ON p.idphong = f.idphong AND p.diachi = c.idchinhanh WHERE c.idchinhanh = 4");
        while($row = $result->fetch_assoc()){
            echo $row['COUNT(c.idchinhanh)'];
        }
    }

    //slider home
    function slider(){
        $conn = connect_db();
        $sql = "SELECT * FROM slider ORDER BY id_slider DESC LIMIT 4";
        $result = mysqli_query($conn, $sql);
        $bien = 1;
        while($row = $result->fetch_assoc()){
            echo 'var a'.$bien++.' = new Slide(
                "'.$row['title'].'",
                "'.$row['decs'].'",
                "'.$row['images'].'",
                "'.$row['link'].'"
              );';
        }
    }

    function slider_ds_quantri(){
        $conn = connect_db();
        $sql = "SELECT * FROM slider";
        $result = mysqli_query($conn, $sql);
        $stt = 1;
        while($row = $result->fetch_assoc()){
            echo '<tr>
            <td>'.$stt.'</td>
            <td>'.$row['id_slider'].'</td>
            <td>
                <img src="'.$row['images'].'" alt="" width="80px">
            </td>
            <td>'.$row['title'].'</td>
            <td>'.$row['decs'].'</td>
            <td>'.$row['link'].'</td>
            <td>
                <a class="btn btn btn-danger" href="slider.php?xoa='.$row['id_slider'].'">
                <i class="far fa-trash-alt"></i>
                </a>
            </td>
            <td>
                <a class="btn" href="themslider.php?id='.$row['id_slider'].'">
                <i class="fas fa-tools"></i>
                </a>
            </td>
        </tr> ';
        }
    }
    function slider_update_quantri($idslider){
        $conn = connect_db();
        $sql = "SELECT * FROM slider WHERE id_slider = $idslider";
        $result = mysqli_query($conn, $sql);
        $stt = 1;
        while($row = $result->fetch_assoc()){
            echo '<script>document.querySelector(".tieudetudong").innerHTML = "Update slider"</script>';
            echo '<form method="POST" enctype="multipart/form-data" class="card">
                    <div class="card-body themphongcss">
                        <label for="">
                            <span>Tiêu đề</span>
                            <input type="text" name="tieude" value="'.$row['title'].'" id="" placeholder="Tiêu đề">
                        </label>
                        <label for="">
                            <span>Mô tả</span>
                            <input type="text" name="mota" value="'.$row['decs'].'" id="" placeholder="Mô tả">
                        </label>
                        <label for="">
                            <span>Ảnh</span>
                            <img src=".'.$row['images'].'" alt="" width="150px">
                            <input type="file" name="upload" id="upload" accept=".jpg, .jpeg, .png">
                        </label>
                        <label for="">
                            <span>link</span>
                            <input type="text" value="'.$row['link'].'" name="link" id="" placeholder="Đường dẫn">
                        </label>
                        <label for="">
                            <button type="submit" class="btn btn-info" name="btnUpdate">Update slider</button>
                        </label>
                    </div>
                    </form>';
        }
    }
    function slider_xoa_quantri($idslider){
        $conn = connect_db();
        $result = mysqli_query($conn,"DELETE FROM slider WHERE id_slider = $idslider");
        if ($result) {
            header('location: slider.php');
        }
    }
    function slider_them_quantri($tieude, $tmp_name, $name, $mota,$link){
        $conn = connect_db();
        $path = "./public/image/anhphong"; // Ảnh sẽ lưu vào thư mục images
        move_uploaded_file($tmp_name, "../public/image/anhphong/".$name);   
        $images = $path .'/'. $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        $result = mysqli_query($conn,"INSERT INTO slider VALUES(null, '$images','$tieude','$mota','$link')");
        if ($result) {
            header('location: slider.php');
        }
    }
    function slider_update($tieude, $tmp_name, $name, $mota,$link,$id){
        $conn = connect_db();
        if (empty($tmp_name)||empty($name)) {
            $result = mysqli_query($conn,"UPDATE slider SET title='$tieude',decs = '$mota', link = '$link' WHERE id_slider = $id");
        }else{
            $path = "./public/image/anhphong"; // Ảnh sẽ lưu vào thư mục images
            move_uploaded_file($tmp_name, "../public/image/anhphong/".$name);   
            $images = $path .'/'. $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
            $result = mysqli_query($conn,"UPDATE slider SET images = '$images',title='$tieude',decs = '$mota', link = '$link' WHERE id_slider = $id");
        }
        
        if ($result) {
            header('location: slider.php');
        }
    }

    //hệ thống
    function list_hethong(){
        $conn = connect_db();
        $sql = "SELECT * FROM system";
        $result = mysqli_query($conn,$sql);
        while($row = $result->fetch_assoc()){
            echo '<tr>
            <td>
                <img src=".'.$row['logo'].'" alt="" width="80px">
            </td>
            <td>'.$row['hotline'].'</td>
            <td>'.$row['diachi'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['fb'].'</td>
            <td>
                <a class="btn"href="info_update.php">
                <i class="fas fa-tools"></i>
                </a>
            </td>
        </tr> ';
        }
    }
    function sua_list_hethong(){
        $connect =connect_db();
        $result = mysqli_query($connect,"SELECT * FROM system");
            while($row = $result->fetch_assoc()){
            echo '<form method="POST" enctype="multipart/form-data" class="card">
            <div class="card-body themphongcss">
                <label for="">
                    <span>Logo</span>
                    <img src=".'.$row['logo'].'" alt="" width="100%">
                    <input type="file" name="images_logo" id="upload" accept=".jpg, .jpeg, .png, .gif, .webp">
                </label>
                <label for="">
                    <span>Hotline</span>
                    <input type="tel" value="'.$row['hotline'].'" name="hotline" id="" >
                </label>
                <label for="">
                    <span>Địa chỉ</span>
                    <input type="text" value="'.$row['diachi'].'" name="diachi" id="">
                </label>
                <label for="">
                    <span>Mail</span>
                    <input type="text" value="'.$row['email'].'" name="email" id="">
                </label>
                <label for="">
                    <span>Facebook</span>
                    <input type="text" value="'.$row['fb'].'" name="facebook" id="">
                </label>
                <label for="">
                    <button type="submit" class="btn btn-info" name="btnUpdate">Update</button>
                </label>
            </div>
            </form>';
        }
    }
    function sua_hethong($images_logo,$images_logo_name,$hotline,$email,$facebook,$diachi){
        $conn = connect_db();
        if (empty($images_logo)) {
            $sql = "UPDATE system SET hotline = '$hotline',diachi = '$diachi', email = '$email', fb = '$facebook'";
        }else{
            $path = "./public/image/anhphong";
            move_uploaded_file($images_logo,"../public/image/anhphong/".$images_logo_name);
            $images_logo_url = $path.'/'.$images_logo_name;
            $sql = "UPDATE system SET logo = '$images_logo_url',diachi = '$diachi', hotline = '$hotline', email = '$email', fb = '$facebook'";
        }
        $result = mysqli_query($conn,$sql);
        if ($result) {
            header('location: info.php');
        }
    }

    function logo(){
        $conn = connect_db();
        $result=mysqli_query($conn,"SELECT logo FROM system");
        while($row=$result->fetch_assoc()){
            echo $row['logo'];
        }
    }
    function hotline(){
        $conn = connect_db();
        $result=mysqli_query($conn,"SELECT hotline FROM system");
        while($row=$result->fetch_assoc()){
            echo $row['hotline'];
        }
    }
    function email_(){
        $conn = connect_db();
        $result=mysqli_query($conn,"SELECT email FROM system");
        while($row=$result->fetch_assoc()){
            echo $row['email'];
        }
    }
    function facebook(){
        $conn = connect_db();
        $result=mysqli_query($conn,"SELECT fb FROM system");
        while($row=$result->fetch_assoc()){
            echo $row['fb'];
        }
    }
    function diachi(){
        $conn = connect_db();
        $result=mysqli_query($conn,"SELECT diachi FROM system");
        while($row=$result->fetch_assoc()){
            echo $row['diachi'];
        }
    }
    //quản trị user
    function list_user(){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM user1 u INNER JOIN phanquyen p ON u.isAdmin = p.id_pq ORDER BY userid ASC");
        $result2 = mysqli_query($conn,"SELECT * FROM phanquyen");
        $stt =1;
        while($row = $result->fetch_assoc()){
            echo '<tr>
            <td>'.$stt++.'</td>
            <td>'.$row['username'].'</td>
            <td>'.$row['email'].'</td>
            <td width="10%">
                <img class="avatar" src=".'.$row['avatar'].'" width="100%" alt="">
            </td>
            <td>'.$row['hoten'].'</td>
            <td>'.$row['about_me'].'</td>
            <td>'.$row['sdt_user'].'</td>
            <td><a href="user_phanquyen_update.php?userid='.$row['userid'].'&isAdmin='.$row['isAdmin'].'"><span class="phanquyen a'.$row['isAdmin'].'">'.$row['ten'].'</span></a></td>
            </tr>';
            // s
        
        }
    }

    function suatrangthai_user($userid,$isAdmin){
        $connect = connect_db();
        $sql = "SELECT * FROM user1 u INNER JOIN phanquyen p ON u.isAdmin = p.id_pq WHERE u.userid = $userid";
        $sql2 = "SELECT * FROM phanquyen WHERE id_pq != $isAdmin";
        $result = mysqli_query($connect,$sql);
        $result2 = mysqli_query($connect,$sql2);
        while($row=$result->fetch_assoc()){
            echo '<tr>
                    <td>'.$row['username'].'</td>
                    <td><select name="select_trangthai" id="select_suatrangthai">
                    <option value="'.$isAdmin.'">'.$row['ten'].' </option>';
                    while($row2=$result2->fetch_assoc()){
                        echo '<option value="'.$row2['id_pq'].'">'.$row2['ten'].' </option>';
                    }
                    echo'
                </select></td>
                </tr>';
        }
    }
    function suatrangthai_user_update($userid,$trangthaiuser){
        $connect = connect_db();
        mysqli_query($connect, "UPDATE user1 SET isAdmin = $trangthaiuser WHERE userid = $userid");
    };
    // binh luan
    function binhluanmoinhat(){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM binhluan b INNER JOIN user1 u ON b.userid = u.userid ORDER BY idbl DESC limit 4");
        $stt = 1;
        while($row = $result->fetch_assoc()){
            echo '<tr>
            <td>'.$stt++.'</td>
            <td>'.$row['noidung'].'</td>
            <td>'.$row['username'].'</td>
            </tr> ';
        }
    }
    function hienthi_binhluan(){
        $idphong = $_GET['idphong'];
        $conn = connect_db();
        $sql = "SELECT * FROM binhluan b INNER JOIN user1 u ON u.userid = b.userid WHERE b.idphong = $idphong ORDER BY timebl DESC";
        $result = mysqli_query($conn,$sql);
        while($row = $result->fetch_assoc()){
            echo '<div class="allnoidung" style="justify-content: flex-start;">
            <img id="avatar_binhluan" src="'.$row['avatar'].'" alt="">
            <div class="noidungbl" style=" display: flex; flex-direction: column;">
                <div class="noidungtop">
                    <h6 style="font-weight: bold; color:#385898;">'.$row['username'].'</h6>
                    <div class="thoigian">'.$row['timebl'].'</div>
                </div>
                    <span style="font-size: 15px;
                            outline: none;
                            color: rgb(59, 59, 59);
                            width: 100%;">'.$row['noidung'].'</span>
            </div>
        </div>';
        }
    }
    function guibinhluan($noidungbl,$useridall,$idphong){
        $connect = connect_db();
        $result = mysqli_query($connect,"SELECT userid FROM user1 WHERE username = '$useridall'");
        while($row = $result->fetch_assoc()){
            $userid = $row['userid'];
        }
        $resultok = mysqli_query($connect, "INSERT INTO binhluan VALUES(null, null, '$noidungbl',$userid,$idphong)");
        if ($resultok) {
            header("Refresh:0");
        }
    };
    function countbl($idphong){
        $connect = connect_db();
        $result = mysqli_query($connect,"SELECT count(idbl) FROM binhluan WHERE idphong = '$idphong'");
        while($row = $result->fetch_assoc()){
            echo $row['count(idbl)'];
        }
    };
    //quan lý bình luận
    function quanlybinhluan_list(){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT *,count(b.idphong) FROM binhluan b INNER JOIN phong p ON p.idphong = b.idphong group by b.idphong");
        $stt = 1;
        while($row = $result->fetch_assoc()){
            echo '<tr>
                    <td>'.$stt++.'</td>
                    <td>'.$row['tenphong'].'</td>
                    <td>'.$row['count(b.idphong)'].'</td>
                    <td><a class="btn btn-info"href="quanlybinhluan_chitiet.php?idphong='.$row['idphong'].'">Chi tiết</a></td>
                </tr>';
        }
    }
    function quanlybinhluan_list_detail($idphong){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM binhluan b INNER JOIN phong p INNER JOIN user1 u ON p.idphong = b.idphong AND b.userid = u.userid where b.idphong = $idphong");
        $stt = 1;
        while($row = $result->fetch_assoc()){
            echo '<script>document.querySelector(".binhluantitle").innerHTML = "Bình luận ('.$row['tenphong'].')";</script>';
            echo '<tr>
                    <td>'.$stt++.'</td>
                    <td>'.$row['noidung'].'</td>
                    <td>'.$row['username'].'</td>
                    <td width="50px">
                        <img style="border-radius: 50%;" class="avatar" src=".'.$row['avatar'].'" width="100%" alt="">
                    </td>
                    <td><a class="btn btn-danger"href="quanlybinhluan_chitiet.php?idphong='.$row['idphong'].'&idblxoa='.$row['idbl'].'"><i class="far fa-trash-alt"></i></a></td>
                </tr>';
        }
    }
    function xoabl($idbl){
        $idphong = $_GET['idphong'];
        $conn = connect_db();
        $result = mysqli_query($conn,"DELETE FROM binhluan WHERE idbl = $idbl");
        if ($result) {
            header("location: quanlybinhluan_chitiet.php?idphong='.$idphong.'");
        }
    }
    // blog
    function home_blog(){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM blog b INNER JOIN user1 u ON b.nguoiviet = u.userid ORDER BY idbaiviet DESC limit 4");
        while($row = $result->fetch_assoc()){
            echo '<div class="block_tintuc_koko">
            <div class="block_tintuc_img"><a style="text-decoration: none;color: #1e1e1e;" href="blog.php?idbaiviet='.$row['idbaiviet'].'" target="_blank"><img width="116px" height="78px" src="'.$row['images_bv'].'" alt=""></a></div>
            <div class="block_tintuc_ct">
                <h5 class="block_tintuc_ct_h5"><a style="text-decoration: none;color: #1e1e1e;" href="blog.php?idbaiviet='.$row['idbaiviet'].'" target="_blank">'.$row['tenbaiviet'].'</a></h5>
                <p class="block_tintuc_ct_p"><span class="block_tintuc_ct_span"><i class="far fa-calendar-alt"></i> '.$row['ngayviet'].' </span><span class="block_tintuc_ct_span">| <i class="far fa-user"></i> '.$row['username'].'</span></p>
            </div>
        </div>';
        }
    }

    function title_content_blog($idbaiviet){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM blog WHERE idbaiviet = $idbaiviet");
        while($row = $result->fetch_assoc()){
            echo $row['tenbaiviet'];
        }
    }
    function date_content_blog($idbaiviet){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM blog b INNER JOIN user1 u ON b.nguoiviet = u.userid WHERE idbaiviet = $idbaiviet");
        while($row = $result->fetch_assoc()){
            echo '<div class="date"><i class="far fa-calendar-alt"></i> '.$row['ngayviet'].'</div>
            <div class="author"><i class="fas fa-user"></i> '.$row['username'].'</div>';
        }
    }
    function content_blog($idbaiviet){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM blog WHERE idbaiviet = $idbaiviet");
        while($row = $result->fetch_assoc()){
            echo $row['noidung'];
        }
    }
    function dangbai($tenbaiviet, $tmp_name, $name, $noidung,$nguoiviet){
        $conn = connect_db();
        $path = "./public/image/anhphong";
        move_uploaded_file($tmp_name, "../public/image/anhphong/".$name);   
        $anhbaiviet = $path .'/'. $name;
        $truyvan = mysqli_query($conn,"SELECT userid FROM user1 WHERE username = '$nguoiviet'");
        while($row = $truyvan->fetch_assoc()){
            $nguoiviet1 = $row['userid'];
        }
        $result = mysqli_query($conn,"INSERT INTO blog VALUES(null, '$tenbaiviet', '$anhbaiviet', $nguoiviet1, null, '$noidung')");
        if ($result) {
            header('location: index.php');
        }
    }
    function danhsach_baiviet(){
        $connect = connect_db();
        $result = mysqli_query($connect,"SELECT * FROM blog b INNER JOIN user1 u ON b.nguoiviet = u.userid ORDER BY idbaiviet DESC");
        $stt =1;
        while($row = $result->fetch_assoc()){
            echo '<tr>
            <td>'.$stt++.'</td>
            <td>'.$row['tenbaiviet'].'</td>
            <td><img src=".'.$row['images_bv'].'" alt="" width="80px"></td>
            <td>'.$row['username'].'</td>
            <td>'.$row['ngayviet'].' VNĐ/1h</td>
            <td>
                <a class="btn btn btn-danger"href="blog.php?idbaivietxoa='.$row['idbaiviet'].'">
                <i class="far fa-trash-alt"></i>
                </a>
            </td>
            <td>
                <a class="btn"href="vietbai.php?idbaiviet_update='.$row['idbaiviet'].'">
                <i class="fas fa-tools"></i>
                </a>
            </td>
        </tr> ';
        }
    }
    function xoabaiviet($idbaivietxoa){
        $conn = connect_db();
        $result = mysqli_query($conn, "DELETE FROM blog WHERE idbaiviet = $idbaivietxoa");
        if ($result) {
            header('location: blog.php');
        }
    }
    function trangsuabai(){
            if (isset($_GET['idbaiviet_update'])) {
                $idbaiviet = $_GET['idbaiviet_update'];
                $conn =connect_db();
                $result = mysqli_query($conn,"SELECT * FROM blog WHERE idbaiviet = $idbaiviet");
                while($row = $result->fetch_assoc()){
                    echo '<script>document.querySelector(".tieudetudong").innerHTML = "Sửa bài"</script>';
                    echo '<div class="card-body themphongcss">
                        <label for="tenbaiviet">
                            <span>Tên bài viết</span>
                            <input type="text" name="tenbaiviet" value="'.$row['tenbaiviet'].'" id="tenbaiviet" placeholder="Tên bài viết">
                        </label>
                        <label for="">
                            <span>Ảnh bìa</span>
                            <img src=".'.$row['images_bv'].'" alt="" width="350px">
                            <input type="file" name="upload" id="upload" accept=".jpg, .jpeg, .png, .gif, .webp">
                        </label>
                        <label for="noidung">
                            <span>Nội dung</span>
                            <textarea name="noidung" id="noidung" cols="40" rows="50">'.$row['noidung'].'</textarea>
                        </label>
                        <label for="">
                            <button type="submit" class="btn btn-info" name="btnSuabai">Sửa bài</button>
                        </label>
                    </div>';
                }
            }else{
                echo '<div class="card-body themphongcss">
                    <label for="tenbaiviet">
                        <span>Tên bài viết</span>
                        <input type="text" name="tenbaiviet" id="tenbaiviet" placeholder="Tên bài viết">
                    </label>
                    <label for="">
                        <span>Ảnh bìa</span>
                        <input type="file" name="upload" id="upload" accept=".jpg, .jpeg, .png, .gif, .webp">
                    </label>
                    <label for="noidung">
                        <span>Nội dung</span>
                        <textarea name="noidung" id="noidung" cols="40" rows="50"></textarea>
                    </label>
                    <label for="">
                        <button type="submit" class="btn btn-info" name="btnDangbai">Đăng bài</button>
                    </label>
                </div>';
            }
    }
    function updatebaiviet($idbaiviet_update,$tenbaiviet, $tmp_name, $name, $noidung){
        $conn = connect_db();
        $path = "./public/image/anhphong";
        move_uploaded_file($tmp_name, "../public/image/anhphong/".$name);   
        $anhbaiviet = $path .'/'. $name;
        $result = mysqli_query($conn,"UPDATE blog SET tenbaiviet = '$tenbaiviet', images_bv = '$anhbaiviet', noidung = '$noidung'  WHERE idbaiviet = $idbaiviet_update");
        if ($result) {
            header('location: blog.php');
        }
    }

    function news_list(){
        $conn = connect_db();
        $result = mysqli_query($conn, "SELECT * FROM blog b INNER JOIN user1 u ON b.nguoiviet = u.userid ORDER BY idbaiviet DESC");
        while($row = $result->fetch_assoc()){
            echo '<div class="article-item col-md-4">
            <div class="article-img">
                <a href="/blogs/news/cung-wesing-kham-pha-7-quan-karaoke-hot-nhat-phuong-trung-hoa">
                    <img src="'.$row['images_bv'].'" alt="'.$row['tenbaiviet'].'">
                </a>
            </div>
            <div class="article-info-wrapper">
                <div class="article-title">
                    <a href="blog.php?idbaiviet='.$row['idbaiviet'].'">'.$row['tenbaiviet'].'</a>
                </div>
                <div class="article-desc">
                    
                '.substr($row['noidung'], 3, 300).' ...
                    
                </div>
                <div class="article-info">
                    <div class="article-date">
                        <i class="fas fa-calendar-alt"></i> '.$row['ngayviet'].'
                    </div>
                    <div class="article-author">
                        <i class="fas fa-user"></i> '.$row['username'].'
                    </div>
                </div>
            </div>
        </div>';
        }
    }
?>