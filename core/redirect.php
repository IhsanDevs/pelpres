<?php 

function redirect($url = null, $message = null)
{
    if (!is_null($message)) {
        echo "<script>alert('{$message}')</script>";
    }

    // if (is_null($url)) {
    //     header("Location: " . "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");
    // } else {
    //     header("Location: " . $url);
    // }
    
}