$(document).ready(function() {

    $.post("../models/category_display.php",
    {},
    function(data, status)
    {
        $("#category-list").html(data);
        category_methods();
    });
});

function category_methods(){
    $('.category-button').click(function() {
        var index = $(this).data('index');
        $.post("../models/business_list_display.php",
        {
            categoryId: index,
        },
        function(data, status)
        {
            $("#business-list").html(data);
            business_methods();
        });
    });
}

function business_methods(){
    $('.business-button').click(function() {
        var index = $(this).data('index');
        window.location.href = "business.php?BusinessId=" + index;
    });
}

