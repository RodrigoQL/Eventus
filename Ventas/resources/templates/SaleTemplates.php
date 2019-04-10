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