var maxHeight = Math.max.apply(null, $(".panel-body").map(function ()
{
    return $(this).height();
}).get());
$(".panel-body").height(maxHeight);