const next = document.querySelector('.next')
const prev = document.querySelector('.prev')
const comment = document.querySelector('#list-comment')
const commentItem = document.querySelectorAll('#list-comment .item')
var translateY = 0
var count = commentItem.length
// Danh sách bình luận
next.addEventListener('click', function (event) {
  event.preventDefault()
  if (count == 1) {
    // Xem hết bình luận
    return false
  }
  translateY += -400
  comment.style.transform = `translateY(${translateY}px)`
  count--
});
prev.addEventListener('click', function (event) {
  event.preventDefault()
  if (count == 4) {
    // Xem hết bình luận
    return false
  }
  translateY += 400
  comment.style.transform = `translateY(${translateY}px)`
  count++
}); 
// Chuyển đổi màu nền ở dưới footer chưa xong
// setInterval(function() {
//     var colors = ["red", "green", "blue", "orange"];
//     var randomColor = colors[Math.floor(Math.random() * colors.length)];
//     document.getElementById("footer").style.backgroundColor = randomColor;
//   }, 2000);
//Thêm một list danh sách sản phẩm
$('#click--more').on('click', function () {
  if ($('#click--more').text() === 'Xem thêm...') {
      //hiện thêm 1  hàng sản phẩm nữa
      // This block is executed when
      // you click the show button
      $('#click--more').text('Thêm nữa');
      $('.product--show_more').css('display', 'flex');
  }
  else {
      //Chuyển tới trang sản phẩm của shop
      // This block is executed when
      // you click the hide button
      window.location.href = 'product.html';
      $('#click--more').text('Xem thêm...');
      $('.product--show_more').css('display', 'none');
  }
});
//Slieder chuyển đổi hình ảnh trên trang chủ 
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  autoplay:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})