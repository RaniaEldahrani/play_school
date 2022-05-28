<?php
//require "dbcon.php";
$dbhost = "project_database";
$dbuser = "root";
$dbpass = "secret";
$db = "project";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
//$con= mysqli_connect("localhost","root","","project");
$mail=$_POST["email"];
$pass=$_POST["password"];

$query="select * from registration where email='$mail' and password='$pass'";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>=1){
    echo'<script> alert("Welcome!!") </script>';
    require "student1.html";
    
}
else{
    $query="select * from registration2 where email='$mail' and password='$pass'";
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)>=1){
    echo'<script> alert("login successfully") </script>';
    require "teacherform.html";
}
else{
    echo'<script> alert("invalid email/password") </script>';
    require "login.html";
}
 }
 mysqli_close($con);

?>