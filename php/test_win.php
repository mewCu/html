<?php
$conn=mysqli_connect("localhost","php","php627375");
if(!$conn){
    die('Cold not connect:'.mysqli_error($conn));
}
echo 'connect success!';
mysqli_query($conn,"set names utf8");
mysqli_select_db($conn,'cucumber_db');
$sql = 'SELECT username, password FROM user_info';
$retval = mysqli_query($conn,$sql);
if(!$retval){
    dir("can't read student_info table".mysql_error($conn));
}
echo '<h2>my user_info</h2>';
echo '<table border="1"><tr><td>username</td><td>password</td></tr>';
while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC)){
    echo "<tr><td>{$row['username']}</td><td>{$row['password']}</td></tr>";
}
echo '</table>';
mysqli_close($conn);
?>