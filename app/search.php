<?php
//require "dbcon.php";
$dbhost = "project_database";
$dbuser = "root";
$dbpass = "secret";
$db = "project";
$con = new mysqli($dbhost, $dbuser, $dbpass,$db);
//$con= mysqli_connect("localhost","root","","project");
$grade=$_POST["grade"];
if($grade==""){
    echo'<script> alert("Empty feild ") </script>';
    require "student2.html";
}
else{
    $sql="select * from quiz where ID='$grade' ";
    $res=mysqli_query($con,$sql);
    $rows=mysqli_num_rows($res);
    if($rows>0){
        print "<table border=1> <tr> <th> ID </th> <th> Name </th> <th> Math </th> <th> Arabic </th> <th> English </th> <th> Art </th></tr>";
        /*for($r=1 ;*/
        $r=1;
        while($r<$rows)  ; /*$r++)*/{
            $ro=mysqli_fetch_array($res);
            print "<tr><td>".$ro["ID"];
            print "</td><td>".$ro["Name"];
            print "</td><td>".$ro["Math"];
            print "</td><td>".$ro["Arabic"];
            print "</td><td>".$ro["English"];
            print "</td><td>".$ro["Art"];
            print "</td></tr>";
            $r++;
        }
        print "</table>";
    }
    else{
        echo'<script> alert("Not Exist ") </script>';
        require "student2.html";
    }
}
mysqli_close($con);
?>