<?php

include __DIR__ . '/config.php';
$conn = mysqli_connect($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);

    return $result;
}
?>