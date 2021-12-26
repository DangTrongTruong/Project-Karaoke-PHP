window.onscroll = function () {form_dat_choBIG()};

var form_dat_cho = document.querySelector('.form-dat-cho');
var form_dat_cho__gioihan = form_dat_cho.offsetTop;
function form_dat_choBIG() {
    if (window.pageYOffset > form_dat_cho__gioihan && window.pageYOffset < 1200) {
        form_dat_cho.classList.add('active');
    } else {
        form_dat_cho.classList.remove('active');
    }

    if (window.pageYOffset > 1200) {
        form_dat_cho.classList.add('active_giu');
    }else{
        form_dat_cho.classList.remove('active_giu');
    }
}

var anhok = document.querySelectorAll('.anhok');
anhok.forEach(e => {
    e.addEventListener('click', ()=>{
        document.querySelector('.images_BIG').src = e.src;
    });
});
// document.body.scrollTop > 20 || document.documentElement.scrollTop > 20