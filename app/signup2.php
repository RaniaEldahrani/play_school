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
$qual=$_POST["qualifications"];
$mail=$_POST["email"];
//$bday=$_POST["birthday"];
if($fname=="" || $sname=="" || $pass=="" || $repass=="" || $phonnum=="" || $qual=="" || $mail=="" /*|| $bday==""*/){
    echo'<script> alert("Empty feild ") </script>';
    require "signup2.html";
}
elseif($pass!=$repass){
    echo'<script> alert("password deosnt match") </script>';
    require "signup2.html";
}
elseif(!filter_var($mail , FILTER_VALIDATE_EMAIL)){
    echo'<script> alert("Invalid email") </script>';
    require "signup2.html";
}
else{
    $sql="select * from registration2 where email='$mail'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>=1){
        echo'<script> alert("email is already taken") </script>';
        require "signup2.html";
    }
    else{
        mysqli_query($con,"insert into registration2 values('$fname','$sname','$pass',$phonnum,'$qual','$mail')");
        echo'<script> alert("Insertion success") </script>';
        require "login.html";
    }
    
}
//mysqli_close($con);






?>