<?php
try {
    $conn = new mysqli('localhost', 'root', '', 'std');
} catch (Exception $ex) {
    echo $ex . 'This is error';
    die('Connection failed');
}

?>
