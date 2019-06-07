<?php
    include("../managers/database_manager.php");
    include("../models/session.php");
    $userId = GetSessionUserId();
    $sql = "SELECT P.Id, P.Name, P.Description, P.Price, P.ImageUrl FROM Cart as C JOIN Package as P ON C.PackageId = P.Id WHERE C.UserId = ".$userId.";";
    $package_list = sqlSelect($sql);

    $html = '';
    if (sizeof($package_list) == 0){
        $html .= '<h3 class="empty-list"> El carrito de compras está vacío </h3>';
    }
    foreach($package_list as $row) {
        $html .= '<div class="package row">';

        $html .= '<h4 class="package-name col-4 col-sm-3">'.$row['Name'].'</h4>';;
        $html .= '<h4 class="package-price col-4 col-sm-2"> $'.$row['Price'].'.00 </h4>';
        $html .= '<button data-index="'.$row['Id'].'" class="package-remove btn btn-danger"> Quitar del Carrito </button>';
        $html .= '<p class="package-description col-12">'.$row['Description'].'</p>';

        $html .= '</div>';
    }
    
    echo $html;
?>