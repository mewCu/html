<?php
    $email = $_POST["email"];
    $username = $_POST["username"];
    $flag = $_POST["flag"];
    echo($flag)
    $fp = fopen(include $_SERVER['DOCUMENT_ROOT']."/php/dst_info_event",'a');
    fwrite($fp,PHP_EOL.$email.":".$username.":".$flag);
    fclose($fp);
    echo("success")
?>