<?php
    function UserDropdown($users){
        $html = '<select name="selectedUser" class="form-control">';
        foreach($users as $row) {
            $user_name_lastname = $row['Name']." ".$row['Lastname'];
            $html .= '<option value="';
            $html .= $row['ID'].'">'.$user_name_lastname.'</option>';
        }
        $html .= '</select>';
        return $html;
    }
?>