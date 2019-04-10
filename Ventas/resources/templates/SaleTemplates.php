<?php
    function ProductsDropdown($products){
        $html = '<select name="selectedProduct" class="form-control">';
        foreach($products as $row) {
            $html .= '<option value="';
            $html .= $row['ID'].'">'.$row['Name'].'</option>';
        }
        $html .= '</select>';
        return $html;
    }

    function ComissionsTable($comissions){
        $html = '';
        foreach($comissions as $row)
        {
            $html .= '<tr>';
            $html .= '<td>'.$row['vendedor'].'</td>';
            $html .= '<td>'.$row['total'].'</td>';
            $html .= '</tr>';
        }
        return $html;
    }
?>