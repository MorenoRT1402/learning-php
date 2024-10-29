<?php
function get_param_id() {
    if (isset($_GET['id'])) {
        return $_GET['id'];
    } else {
        echo "ID no válido.";
    }
}
?>