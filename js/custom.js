$('.pull-center').each(function() {
    $(this).css('margin-left', ($(this).parent().outerWidth()-$(this).outerWidth())/2)
});
$('.pull-down').each(function() {
    $(this).css('margin-top', $(this).parent().height()-$(this).height())
});
$('.pull-middle').each(function() {
    $(this).css('margin-top', ($(this).parent().height()-$(this).height())/2)
});