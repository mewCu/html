<?php
$userid = $_GET["userid"];
$conn=mysqli_connect("localhost","php","php627375");
if(!$conn){
    echo('database is close');
}
mysqli_query($conn,"set names utf8");
mysqli_select_db($conn,'cucumber_db');
$sql = "SELECT userid, email FROM dst_user_info where binary userid='$userid'";
$retval = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($retval,MYSQLI_ASSOC);
if($row['userid']!=''){
    echo("YourEmail:".$row['email']);
}else{
    echo("your not regist, please add QQ 710010358");
}
?>