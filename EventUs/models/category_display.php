<?php
    include("../managers/database_manager.php");
    
    $sql = "SELECT Id,Name,Description,ImageUrl  FROM BusinessType";
    $categories = sqlSelect($sql);

    $html = '';
    foreach($categories as $row) {
        $html .= '<div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text category">';
        $category_image = $row['ImageUrl'];
        if ($category_image === NULL){
            $category_image = "http://plustexting.com/equipo1/EventUs/assets/img/party.png";
        }
        $html .= '<img class="category-image" src="'.$category_image.'" style="max-width:100%;">';
        $html .= '<div class="portfolio_images_overlay text-center ">';
        $html .= '<h6 class="clrd-font category-title">'.$row['Name'].'</h6>';
        $html .= '<button data-index="'.$row['Id'].'" class="btn btn-primary category-button">Seleccionar</button>';
        $html .= '</div>';
        $html .= '</div>';
    }
    
    echo $html;
?>