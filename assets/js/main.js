const next = document.querySelector('.next')
const prev = document.querySelector('.prev')
const comment = document.querySelector('#list-comment')
const commentItem = document.querySelectorAll('#list-comment .item')
var translateY = 0
var count = commentItem.length

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
setInterval(function() {
    var colors = ["red", "green", "blue", "orange"];
    var randomColor = colors[Math.floor(Math.random() * colors.length)];
    document.getElementById("footer").style.backgroundColor = randomColor;
  }, 2000);
