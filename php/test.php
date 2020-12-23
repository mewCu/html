<?php
$conn=mysqli_connect("localhost","php","php627375");
if(!$conn){
    die('Cold not connect:'.mysqli_error($conn));
}
echo 'connect success!';
mysqli_query($conn,"set names utf8");
mysqli_select_db($conn,'phpdbtest');
$sql = 'SELECT number, name, age FROM student_info';
$retval = mysqli_query($conn,$sql);
if(!$retval){
    dir("can't read student_info table".mysql_error($conn));
}
echo '<h2>my student_info</h2>';
echo '<table border="1"><tr><td>number</td><td>name</td><td>age</td></tr>';
while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC)){
    echo "<tr><td>{$row['number']}</td><td>{$row['name']}</td><td>{$row['age']}</td></tr>";
}
echo '</table>';
mysqli_close($conn);
?>
