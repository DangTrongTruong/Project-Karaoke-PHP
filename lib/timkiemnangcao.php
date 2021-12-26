<style>
    *{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    }
    .form-search{
        padding: 20px 0 20px 0;
        background-color: #2d2d2d;
        border-radius: .5rem;
    }
    .item-select select{
        outline: none;
        width: 90%;
        height: 40px;
        border-radius: 50px;
        padding-left: 30px;
        border: 2px solid white;
        background-color: #2d2d2d;
        color: white;
        font-weight: bold;

    }
    .button-search button{
        width: 90%;
        height: 42px;
        border: none;
        border-radius: 50px;
        color:#2d2d2d;
        background-color: #e0bd65;
        font-weight: bold;
    }
    .title_timkiemnangcao{
        margin: 1rem -10px;
    }
    @media (max-width:575.98px) {
        .form-search{
            text-align: center;
            display: flex;
            flex-direction: column;
            grid-row-gap: 1rem;
        }
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-12 title">
            <h3 class="title_timkiemnangcao">Tìm kiếm nâng cao</h3>
        </div>
    </div>
    <form action="timkiemnangcao.php" method="POST">
    <div class="row form-search">
        <div class="col-md-4 col-sm-12">
           <div class="item-select">
           <select name="idchinhanh" id="" required>
                <option value="" disabled selected>Chọn chi nhánh</option>
                <?php list_chi_nhanh_tim_kiem_nang_cao(); ?>
            </select>
           </div>
        </div>
        <div class="col-md-4 col-sm-12">
        <div class="item-select">
           <select name="soluongnguoi" id="" required>
                <option value="" disabled selected>Số lượng người</option>
                <?php list_slnguoi_tim_kiem_nang_cao(); ?>
            </select>
           </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="button-search">
                    <button type="submit" name="btnTimKiemNangCao"><i class="fa fa-search"></i><span>Tìm kiếm nhanh</span></button>
            </div>
        </div>
    </div>
    </form>
</div>