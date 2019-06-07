<?php
    include("../managers/database_manager.php");
    
    $categoryId= $_POST['categoryId'];
    $sql = "SELECT Id, Name, Description, LogoUrl, Rating FROM Business WHERE Approved = 1 AND IdBusinessType = ".$categoryId.";";
    $business_list = sqlSelect($sql);

    $html = '';
    foreach($business_list as $row) {
        $html .= '<h3 align="center" class="business-title">Seleccione el negocio deseado: </h3>';
        $html .= '<div class="business">';
        $html .= '<div class="business-section">';
        $business_image = $row['LogoUrl'];
        $html .= '<img class="business-image" src="'.$business_image.'" style="width:100%;">';
        $html .= '</div>';
        $html .= '<div class="business-section">';
        $html .= '<h3 class="business-name">'.$row['Name'].'</h3>';
        
        $html .= '<button data-index="'.$row['Id'].'" class="btn btn-warning business-button">Seleccionar</button>';
        $html .= '<div>';
        $html .= '<br>';
        $html .= '<p class="business-stars">Rating:';
        $rating = (int)$row['Rating'];
        for($i = 0; $i < $rating; $i++){
            $html .= '<span class="glyphicon glyphicon-heart" style="color:pink"></span>';
        }
        $html .= '</p>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
    }
    
    echo $html;
?>