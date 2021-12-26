<style>

    .grid {
        display: flex;
        justify-content: space-around;
        margin: 1.5rem 0;
    }
    .grid img{
        width: 125px;
    }
    .grid .step_number_abs, .grid #hoac{
        width: 35px;
        height: 35px;
        align-self: center;
    }
    .step_number {
    border: 1px solid #c1bdbd;
    width: 40px;
    margin: auto;
    height: 40px;
    margin-top: 15px;
    line-height: 40px;
    font-weight: 700;
    font-size: 17px;
    border-radius: 50%;
    text-align: center;
    }
    .grid__item {
    display: flex;
    align-items: center;
    flex-direction: column;
    width: 100%;
    }
    .text-step{
        margin-bottom: 5px !important;
        font-weight: 700;
        color: #000 !important;
        font-size: 16px;
    }
    .grid__item .sub-step{
        font-size: 14px;
    }
    .grid__item .sub-step a{
        text-decoration: none;
        color: #e0bd65;
        font-weight: bold;
        outline: none;
    }

    .imghuongdan.active{
        transform: rotate(360deg);
        transition: .5s all ease;
    }
    @media (max-width: 575.98px) { 
        .grid {
        flex-direction: column;
        }
        .grid .step_number_abs{
            margin: 10px 0;
        transform: rotate(90deg);
        }
    }
    .step_number:hover{
        background: green;
        cursor: pointer;
        color: #fff;
    }
</style>

    <div class="container">
        <div class="row">
            <h3>Hướng dẫn đặt phòng</h3>
            <div class="grid">
                    <div class="grid__item">
                        <img class="imghuongdan" src="//theme.hstatic.net/1000268128/1000725295/14/step_img1.png?v=34"
                            alt="CHỌN PHÒNG HÁT" />
                        <p class="text-step">CHỌN PHÒNG HÁT</p>
                        <p class="small--hide sub-step">Hàng ngàn địa điểm hát ưu đãi</p>
                        <div class="step_number">1</div>
                    </div>

                    <img src="//theme.hstatic.net/1000268128/1000725295/14/left-black-arrow.png?v=34"
                            class="step_number_abs"/>

                    <div class="grid__item">
                        <img class="imghuongdan" src="https://theme.hstatic.net/1000268128/1000725295/14/step_img2.png?v=34"
                            alt="CHỌN PHÒNG HÁT" />
                        <p class="text-step">GỌI ĐẶT CHỖ</p>
                        <p class="small--hide sub-step"><a href="tel:+84333165255">0968.66.88.44</a></p>
                        <div class="step_number">2</div>
                    </div>

                    <span id="hoac"><b>hoặc</b></span>

                    <div class="grid__item">
                        <img class="imghuongdan" src="https://theme.hstatic.net/1000268128/1000725295/14/step_img3.png?v=34"
                            alt="CHỌN PHÒNG HÁT" />
                        <p class="text-step">ĐẶT BÀN ONLINE</p>
                        <p class="small--hide sub-step">Truy cập Website www.ko2.com</p>
                        <div class="step_number">2</div>
                    </div>

                    <img src="//theme.hstatic.net/1000268128/1000725295/14/left-black-arrow.png?v=34"
                            class="step_number_abs" />

                    <div class="grid__item">
                        <img class="imghuongdan" src="https://theme.hstatic.net/1000268128/1000725295/14/step_img4.png?v=34"
                            alt="CHỌN PHÒNG HÁT" />
                        <p class="text-step">XÁC NHẬN</p>
                        <p class="small--hide sub-step">Xác nhận từ CSKH Ko2</p>
                        <div class="step_number">3</div>
                    </div>

                    <img src="//theme.hstatic.net/1000268128/1000725295/14/left-black-arrow.png?v=34"
                            class="step_number_abs" />

                    <div class="grid__item">
                        <img class="imghuongdan" src="https://theme.hstatic.net/1000268128/1000725295/14/step_img5.png?v=34"
                            alt="CHỌN PHÒNG HÁT" />
                        <p class="text-step">TRẢI NGHIỆM</p>
                        <p class="small--hide sub-step">Trải nghiệm dịch vụ tại phòng hát

</p>
                        <div class="step_number">4</div>
                    </div>
            </div>
        </div>
    </div>

    <script>
        var stepnumber = document.querySelectorAll('.step_number');
        var imgitem = document.querySelectorAll('.grid__item img');
            stepnumber.forEach(e => {
                e.addEventListener('click', (e)=>{
                    imgitem.forEach(a => {
                        a.classList.toggle('active');
                    });
                });
            }); 
    </script>