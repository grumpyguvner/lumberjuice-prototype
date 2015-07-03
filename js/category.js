$('[name="filter-toggle"]').bootstrapSwitch();
$('[name="filter-price"]').slider();


$('.btn-color').each(function() {
    var color = $(this).text();
    $(this).css({ "background-color": color, "border-color": "transparent", "color": color });
    $(this).hover(function() {
        $(this).css("border-color", "#fff");
    }, function() {
        $(this).css("border-color", "transparent");
    })
});
$('.btn-color:hover').each(function() {
    var color = $(this).text();
    $(this).css({ "background-color": color, "border-color": color, "color": color });
});

$('[name="filter-toggle"]').on('switchChange.bootstrapSwitch', function(event, state) {
    if(state) {
        $('div.filters').show();
    } else {
        $('div.filters').hide();
    }
});