$('.spinner .btn:first-of-type').on('click', function() {
  $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
});
$('.spinner .btn:last-of-type').on('click', function() {
  if (parseInt($('.spinner input').val(), 10) > 1) {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
  }
});

// DEPENDENCY: https://github.com/flatlogic/bootstrap-tabcollapse
$('.content-tabs').tabCollapse();

// initialize tab function
$('.nav-tabs a').click(function(e) {
    e.preventDefault();
    $(this).tab('show');
});

$(document).ready(function() {

    $('.carousel-stage').jcarousel({
        itemLoadCallback: getCurrImage()
    });

    function getCurrImage(carousel, state){
        var currentImage = carousel.first-1;
    }

}
