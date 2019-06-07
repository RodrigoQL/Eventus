$(document).ready(function() {
    var url = window.location.href;
    var arguments = url.split('?').pop().split('=').pop();
    $.post("../models/packages_display.php",
    {
        businessId: arguments[0]
    },
    function(data, status)
    {
        $("#package-list").html(data);
        package_methods();
    });
});

function package_methods(){
    $('.package-button').click(function() {
        var index = $(this).data('index');

        $.post("../models/add_to_cart.php",
        {
            packageId: index
        },
        function(data, status)
        {
            alert("Paquete agregado al carrito de compras");
        });
    });
}
