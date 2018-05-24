
let MoDal = document.getElementById('loginRegModal');

  $('.showModal').click(  
    function() {
    $('#loginRegModal').css('display', 'block');
  });
  $('#closeBtn').click(function() {
    $('#loginRegModal').css('display', 'none');
  });

  $(window).click(function(event) {
  if (event.target == MoDal) {
  MoDal.style.display = "none"; 
}});



$(".menu_cont").click(function(){
 $(".icon").toggleClass("collapse"); 
})

//document.ready function.






// drop down lang toggle function

$("#menu_cont_id").click(function(e){
    $(".drop_down").toggle();
    e.stopPropagation();
});
    $(".drop_down").click(function(e){
    e.stopPropagation();
});
$('#closebtn').click(function(){
  $('.icon').toggleClass('collapse', 'icon'); 
$('.drop_down').hide();
})


/****Subscription picture toggle***/
$(document).ready(function() {
 setInterval(function(){
    $('#newsLetPicId').toggleClass('newsLetter newsLetter2nd');
  }, 4100);


 $(".signup").click(function() {
   let subInput = $('subscriptionInput');
    $(".signup").addClass("complete");
  $(".content02").addClass("active"); 
});

 
});

