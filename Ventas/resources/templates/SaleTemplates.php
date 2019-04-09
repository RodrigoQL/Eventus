<?php
    function ProductsDropdown($products){
        $html = '<select id="selectedProduct" name="selectedProduct" class="form-control">';
        foreach($products as $row) {
            $html .= '<option value="';
            $html .= $row['ID'].'">'.$row['Name'].'</option>';
        }
        $html .= '</select>';
        return $html;
    }
?>