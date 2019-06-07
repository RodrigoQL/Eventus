<?php
    include("../managers/database_manager.php");
    
    $businessId= $_POST['businessId'];
    $sql = "SELECT Id, Name, Description, Price, ImageUrl FROM Package WHERE IdBusiness = $businessId;";
    $package_list = sqlSelect($sql);

    $html = '';

    $html = '<table class="table package">
        <thead>
            <tr>
                <th>Paquete</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>';
    foreach($package_list as $row) {
        $html .= '<td class="package-name">'.$row['Name'].'</td>';
        $html .= '<td class="package-description">'.$row['Description'].'</td>';
        $html .= '<td class="package-price">'.'$'.$row['Price'].'</td>';
        $html .= '<td><button data-index="'.$row['Id'].'" class="package-button col-4 col-sm-3"> Agregar a Carrito
        </button></td>';
        $html .= '</tr>';
        $html .= '</tbody>
            </table>';
    }
    
    echo $html;
?>