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
    $html = '<table class="table package">
        <thead>
            <tr>
                <th>Paquete</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>';
    foreach($package_list as $row) {
        $html .= '<tr>';
        $html .= '<td class="package-name">'.$row['Name'].'</td>';
        $html .= '<td class="package-description">'.$row['Description'].' </td>';
        $html .= '<td class="package-price">'.'$'.$row['Price'].'.00 </td>';
        $html .= '<td><button data-index="'.$row['Id'].'" class="btn btn-danger package-button">Eliminar Paquete
        </button></td>';
        $html .= '</tr>';
    }
    $html .= '</tbody>
            </table>';
    
    echo $html;
?>