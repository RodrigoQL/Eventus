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

    function SalesTable($sales){
        $html = '<table class="table"> <tr> <th> Cliente </th> <th> Empresa </th> <th> Monto </th> <th> Factura </th> </tr>';

        foreach($sales as $row) {
            $name = $row['ClientName']." ".$row['ClientLastname'];
            $html .= "<tr> <td>";
            $html .= $name;
            $html .= "</td> <td>";
            $html .= $row['ClientCompany'];
            $html .= "</td> <td>";
            $html .= $row['Amount'];
            $html .= "</td> <td>";
            $html .= $row['BillName'];
            $html .= "</td> </tr>";
        }
        $html .= "</table>";
        return $html;
    }
?>