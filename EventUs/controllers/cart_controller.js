$(document).ready(function() {
    get_packages();

    $('#confirm').click(function() {
        $.post("../models/confirm_order.php",
        {
        },
        function(data, status)
        {
            alert("Compra realizada con éxito");
            get_packages();
        });
    });

});

function package_methods(){
    $('.package-remove').click(function() {
        var index = $(this).data('index');

        $.post("../models/remove_from_cart.php",
        {
            packageId: index
        },
        function(data, status)
        {
            get_packages();
        });
    });
}

function get_packages(){
    $.post("../models/cart_display.php",
    {},
    function(data, status)
    {
        $("#package-list").html(data);
        package_methods();
    });
}
