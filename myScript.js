$(window).load(function() {
  $('.qestionClass').eq(0).show();
});

function nextQestion(e,index) {
  e.preventDefault();
  $('.qestionClass').eq(index - 1).hide();
  $('.qestionClass').eq(index).show();
}
 