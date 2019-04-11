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

    function ProductsTable($products){
        $html = '<table class="table"> <tr> <th> Nombre </th> <th> Comisión </th> </tr>';

        foreach($products as $row) {
            $html .= "<tr> <td>";
            $html .= $row['Name'];
            $html .= "</td> <td>";
            $html .= $row['Comission'];
            $html .= "</td> </tr>";
        }
        $html .= "</table>";
        return $html;
    }
?>