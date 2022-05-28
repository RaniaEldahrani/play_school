<?php
//require "dbcon.php";
$dbhost = "project_database";
$dbuser = "root";
$dbpass = "secret";
$db = "project";
$con = new mysqli($dbhost, $dbuser, $dbpass,$db);
//$con= mysqli_connect("localhost","root","","project");
$id= $_POST["id"];
$name= $_POST["name"];
$math= $_POST["math"];
$arabic= $_POST["arabic"];
$english= $_POST["english"];
$art= $_POST["art"];
if($id=="" || $name=="" || $math=="" || $arabic=="" || $english=="" || $art==""){
    echo'<script> alert("Empty feild ") </script>';
    require "teacherform.html";
}
//elseif(/*$id>10 || $name>10 || */$math>10 || $arabic>10 || $english>10 || $art>10){
//    echo'<script> alert("the grades should be from 0 to 10") </script>';
//    require "teacherform.html";
//}
else{
    $sql="select * from quiz where ID=$id";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>=1){
        echo'<script> alert("ID is already taken") </script>';
        require "teacherform.html";
    }
    else{
        mysqli_query($con, "insert into quiz (ID,Name,Math,Arabic,English,Art) values ($id,'$name',$math,$arabic,$english,$art)");
        echo'<script> alert("Insertion success") </script>';
        require "teacherform.html";
    }
    
}
mysqli_close($con);








?>