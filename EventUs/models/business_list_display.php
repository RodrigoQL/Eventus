<?php
    include("../managers/database_manager.php");
    
    $categoryId= $_POST['categoryId'];
    $sql = "SELECT Id, Name, Description, LogoUrl, Rating FROM Business WHERE Approved = 1 AND IdBusinessType = ".$categoryId.";";
    $business_list = sqlSelect($sql);

    $html = '';
    foreach($business_list as $row) {
        $html .= '<div class="business col-4 col-sm-3 col-md-2">';
        $html .= '<h3 class="business-title">'.$row['Name'].'</h3>';
        $business_image = $row['LogoUrl'];
        $html .= '<img class="business-image" src="'.$business_image.'" style="width:100%;">';
        $html .= '<button data-index="'.$row['Id'].'" class="btn btn-ok business-button">Seleccionar</button>';
        $html .= '<div class="business-stars">';
        $rating = (int)$row['Rating'];
        for($i = 0; $i < $rating; $i++){
            $html .= "* ";
        }
        $html .= '</div>';
        $html .= '</div>';
    }
    
    echo $html;
?>