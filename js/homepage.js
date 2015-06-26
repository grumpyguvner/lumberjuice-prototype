$('.jumbotron').css('background-image', 'url("/images/jumbotron/homepage.jpg")');
$('.homepage article a').hover(function(){
    $(this).find('p').fadeIn(300)
},function(){
    $(this).find('p').delay(300).fadeOut(300)
});
