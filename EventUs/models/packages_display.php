<?php
    include("../managers/database_manager.php");
    
    $businessId= $_POST['businessId'];
    $sql = "SELECT Id, Name, Description, Price, ImageUrl FROM Package WHERE IdBusiness = $businessId;";
    $package_list = sqlSelect($sql);

    $html = '';
    foreach($package_list as $row) {
        $html .= '<div class="package row">';

        $html .= '<h4 class="package-name col-4 col-sm-3">'.$row['Name'].'</h4>';;
        $html .= '<h4 class="package-price col-4 col-sm-2"> $'.$row['Price'].'.00 </h4>';
        $html .= '<button data-index="'.$row['Id'].'" class="package-button col-4 col-sm-3"> Agregar a Carrito </button>';
        $html .= '<p class="package-description col-12">'.$row['Description'].'</p>';

        $html .= '</div>';
    }
    
    echo $html;
?>