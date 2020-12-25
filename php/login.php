<?php
$username = $_POST["username"];
$password = $_POST["password"];

$conn=mysqli_connect("localhost","php","php627375");
if(!$conn){
    echo('database is close');
}
mysqli_query($conn,"set names utf8");
mysqli_select_db($conn,'cucumber_db');
$sql = "SELECT username, password FROM user_info where username='$username'";
$retval = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($retval,MYSQLI_ASSOC);
if($row['username']!=''){
    if($row['password']==$password){
        echo("欢迎进入后台!");
    }else{
        setcookie("username",$username,time()+604800,"/");
        setcookie("check_password","Password_error!",time()+2,"/");
        echo("<script>location.href='../greenhouse.html'</script>");
    }
}else{
    setcookie("username",$username,time()+604800,"/");
    setcookie("check_username","User_not_exist!",time()+2,"/");
    echo("<script>location.href='../greenhouse.html'</script>");
}

// $username = $password ="";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if ($username == "627"){
//         echo("yes");
//     }else{
//         setcookie("username",$username,time()+60,"/");
//         echo("<script>location.href='../greenhouse.html'</script>");
//     }
// }
?>