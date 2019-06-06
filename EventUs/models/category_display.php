<?php
    include("../managers/database_manager.php");
    
    $sql = "SELECT Id,Name,Description,ImageUrl  FROM BusinessType";
    $categories = sqlSelect($sql);

    $html = '';
    foreach($categories as $row) {
        $html .= '<div class="category col-6 col-sm-3 col-md-2">';
        $html .= '<h3 class="category-title">'.$row['Name'].'</h3>';
        $category_image = $row['ImageUrl'];
        if ($category_image === NULL){
            $category_image = "http://plustexting.com/equipo1/EventUs/assets/img/party.png";
        }
        $html .= '<img class="category-image" src="'.$category_image.'" style="width:100%;">';
        $html .= '<button data-index="'.$row['Id'].'" class="btn btn-ok category-button">Seleccionar</button>';
        $html .= '</div>';
    }
    
    echo $html;
?>