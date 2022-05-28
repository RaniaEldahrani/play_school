<?php
//require "dbcon.php";
$dbhost = "project_database";
$dbuser = "root";
$dbpass = "secret";
$db = "project";
$con = new mysqli($dbhost, $dbuser, $dbpass,$db);
//$con= mysqli_connect("localhost","root","","project");
$fname=$_POST["firstname"];
$sname=$_POST["secondname"];
$pass=$_POST["password"];
$repass=$_POST["repassword"];
$phonnum=$_POST["phone"];
$schoolnum=$_POST["school"];
$mail=$_POST["email"];
//$bday=$_POST["birthday"];
if($fname=="" || $sname=="" || $pass=="" || $repass=="" || $phonnum=="" || $schoolnum=="" || $mail=="" /*|| $bday==""*/){
    echo'<script> alert("Empty feild ") </script>';
    require "signup.html";
}
elseif($pass!=$repass){
    echo'<script> alert("password deosnt match") </script>';
    require "signup.html";
}
elseif(!filter_var($mail , FILTER_VALIDATE_EMAIL)){
    echo'<script> alert("Invalid email") </script>';
    require "signup.html";
}
else{
    $sql="select * from registration where email='$mail'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>=1){
        echo'<script> alert("email already taken") </script>';
        require "signup.html";
    }
    else{
        mysqli_query($con,"insert into registration values('$fname','$sname','$pass',$phonnum,'$schoolnum','$mail')");
        echo'<script> alert("registration success") </script>';
        require "login.html";
    }
    
}
mysqli_close($con);






?>