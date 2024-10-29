<?php
function get_param_id() {
    $id = $_GET['id'];
    if (isset($id)) {
        return $id;
    } else {
        echo "ID no válido.";
    }
}
?>