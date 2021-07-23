//onLoad show first question
$(window).load(function() {
  $('.questionClass').eq(0).show();
});
//e = event - prevent from default form action
//show next question
function nextQestion(e,index) {
  e.preventDefault();
  $('.questionClass').eq(index - 1).hide();
  $('.questionClass').eq(index).show();
}
 