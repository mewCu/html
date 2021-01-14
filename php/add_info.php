<?php
    $email = $_GET["email"];
    $username = $_GET["username"];
    $flag = $_GET["flag"];
    $fp = fopen(include $_SERVER['DOCUMENT_ROOT']."/php/dst_info_event",'a');
    fwrite($fp,PHP_EOL.$email.":".$username.":".$flag);
    fclose($fp);
    echo("success")
?>