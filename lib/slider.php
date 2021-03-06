<style>
.slider {
  text-align: center;
  font-size: 18px;
  background-size: cover;
  color: #fff;
  font-family: 'Roboto', sans-serif;
  margin: 0;
  padding-top: 0;
}

.slider h1 {
  font-size: 48px;
}

.slider h4 {
  font-size: 24px;
}

.slider a {
  padding: 10px 25px;
  background-color: #4ca74c;
  color: #fff;
  border-radius: 25px;
  text-decoration: none;
  width: 200px;
}

.slider #mySlider {
  overflow: hidden;
  position: relative;
  width: 100%;
  height: 400px;
}

.singleSlide {
  background-size: cover;
  height: auto;
  position: absolute;
  left: 100%;
  width: 100%;
  top: 0px;
}

.slider .slideOverlay {
  background-color: rgba(0, 0, 0, 0.5);
  padding: 50px;
}

#sliderNav {
  position: relative;
  top: -235px;
}

#sliderNav:hover {
  cursor: pointer;
}

#sliderPrev {
  position: relative;
  float: left;
  left: 50px;
}

#sliderNext {
  position: relative;
  float: right;
  right: 50px;
}

#sliderNext img,
#sliderPrev img {
  width: 32px;
}

@-webkit-keyframes slideIn {
  100% {
    left: 0;
  }
}

@keyframes slideIn {
  100% {
    left: 0;
  }
}

.slideInRight {
  left: -100%;
  -webkit-animation: slideIn 1s forwards;
  animation: slideIn 1s forwards;
}

.slideInLeft {
  left: 100%;
  -webkit-animation: slideIn 1s forwards;
  animation: slideIn 1s forwards;
}

@-webkit-keyframes slideOutLeft {
  100% {
    left: -100%;
  }
}

@keyframes slideOutLeft {
  100% {
    left: -100%;
  }
}

.slideOutLeft {
  -webkit-animation: slideOutLeft 1s forwards;
  animation: slideOutLeft 1s forwards;
}

@-webkit-keyframes slideOutRight {
  100% {
    left: 100%;
  }
}

@keyframes slideOutRight {
  100% {
    left: 100%;
  }
}

.slideOutRight {
  -webkit-animation: slideOutRight 1s forwards;
  animation: slideOutRight 1s forwards;
}
@media (max-width: 575.98px) { 
    .slider #mySlider {
        height: 350px;
    }
    .slider .slideOverlay {
    height: 350px;
    }
    #sliderNav {
    top: -193px;
    }
}

@media (min-width: 768px){
    .slider .slideOverlay {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 150px;
    display: flex;
    flex-direction: column;
    grid-row-gap: 1rem;
    align-items: center;
}
}
</style>
<div class="slider">
<div id="mySlider"></div>
<div id="sliderNav">
  <div id="sliderPrev" onclick="prevSlide();"><img src="https://nguyenvanhieu.vn/wp-content/uploads/2020/09/left-arrow.png"></div>
  <div id="sliderNext" onclick="nextSlide();"><img src="https://nguyenvanhieu.vn/wp-content/uploads/2020/09/right-arrow.png"></div>
</div>
</div>
<script>
    // M???i slide s??? c?? m???t ch??? s??? c???a ri??ng n??, ????? ????n gi???n ch??ng ta s??? g??n ch??? s??? m???ng cho c??c slide
var slideIndex = 0;
// Cho ta bi???t ch??ng ta ??ang ??? slide n??o
var currentSlideIndex = 0;
// M???ng l??u c??c slide c???a ch??ng ta
var slideArray = [];

// H??m n??y s??? gi??p ch??ng ta t???o ra c??c ?????i t?????ng slide
// bao g???m: ti??u ?????, m?? t???, ???nh, ???????ng d???n khi nh???p v??o button tr??n slide, 
// v?? id c???a m???i slide
function Slide(title, subtitle, background, link) {
  this.title = title;
  this.subtitle = subtitle;
  this.background = background;
  this.link = link;
  // we need an id to target later using getElementById
  this.id = "slide" + slideIndex;
  // Add one to the index for the next slide number
  slideIndex++;
  // Add this Slide to our array
  slideArray.push(this);
}


// T???o c??c ?????i t?????ng slide, b???n c?? th??? t???o nhi???u h??n
<?php slider(); ?>
// var walkingDead = new Slide(
//   "Lion 1 - 109 Kim Ng??u",
//   "C???u gi???y - H?? N???i",
//   "https://xaydungvieta.com/images/banner-phong-cach-hoang-gia.jpg",
//   "http://www.amc.com/shows/the-walking-dead"
// );

// var bigBang = new Slide(
//   "The Big Bang Theory",
//   "A show about Sheldon",
//   "https://xaydungvieta.com/images/banner-phong-cach-hoang-gia.jpg",
//   "http://www.cbs.com/shows/big_bang_theory/"
// );

// var LastMan = new Slide(
//   "The Last Man on Earth",
//   "A show about loneliness",
//   "https://xaydungvieta.com/images/banner-phong-cach-hoang-gia.jpg",
//   "http://www.fox.com/the-last-man-on-earth"
// );

// T??? m???ng slide ???? t???o, ta ti???n h??nh ????a n?? v??o source HTML
function buildSlider() {
  // A variable to hold all our HTML
  var myHTML;

  // Go through the Array and add the code to our HTML
  for (var i = 0; i < slideArray.length; i++) {
    myHTML +=
      "<div id='" +
      slideArray[i].id +
      "' class='singleSlide' style='background-image:url(" +
      slideArray[i].background +
      ");'>" +
      "<div class='slideOverlay'>" +
      "<h1>" +
      slideArray[i].title +
      "</h1>" +
      "<h4>" +
      slideArray[i].subtitle +
      "</h4>" +
      "<a href='" +
      slideArray[i].link +
      "' target='_blank'>?????t ngay</a>" +
      "</div>" +
      "</div>";
  }

  // ????a HTML ch??ng ta v???a t???o v??o id #mySlider
  document.getElementById("mySlider").innerHTML = myHTML;

  // ?????ng th???i hi???n th??? slide ?????u ti??n
  document.getElementById("slide" + currentSlideIndex).style.left = 0;
}

// G???i h??m th???c thi
buildSlider();

// X??? l?? b???m n??t chuy???n slide tr?????c ????
function prevSlide() {
  // T??m slide tr?????c ????
  var nextSlideIndex;
  // N???u ch??? s??? slide l?? 0, v??? slide cu???i
  if (currentSlideIndex === 0) {
    nextSlideIndex = slideArray.length - 1;
  } else {
    // N???u kh??ng th?? gi???m ch??? s??? ??i 1
    nextSlideIndex = currentSlideIndex - 1;
  }

  // ???n slide hi???n t???i, hi???n slide "currentSlideIndex"
  document.getElementById("slide" + nextSlideIndex).style.left = "-100%";
  document.getElementById("slide" + currentSlideIndex).style.left = 0;

  // Th??m class ????? chuy???n slide c?? animation ???? ?????nh ngh??a ??? b?????c 3
    document
    .getElementById("slide" + nextSlideIndex)
    .setAttribute("class", "singleSlide slideInLeft");
  document
    .getElementById("slide" + currentSlideIndex)
    .setAttribute("class", "singleSlide slideOutRight");

  // C???p nh???t gi?? tr??? slide hi???n t???i
  currentSlideIndex = nextSlideIndex;
}

// X??? l?? b???m n??t chuy???n slide ti???p theo
// C??ch x??? l?? t????ng t??? nh?? prevSlide ???? tr??nh b??y ??? tr??n
function nextSlide() {
  var nextSlideIndex;
  if (currentSlideIndex === slideArray.length - 1) {
    nextSlideIndex = 0;
  } else {
    nextSlideIndex = currentSlideIndex + 1;
  }

  document.getElementById("slide" + nextSlideIndex).style.left = "100%";
  document.getElementById("slide" + currentSlideIndex).style.left = 0;

  document
    .getElementById("slide" + nextSlideIndex)
    .setAttribute("class", "singleSlide slideInRight");
  document
    .getElementById("slide" + currentSlideIndex)
    .setAttribute("class", "singleSlide slideOutLeft");

  currentSlideIndex = nextSlideIndex;
}

</script>