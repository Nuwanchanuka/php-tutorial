<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
 $id= $_GET['deleteid'];

$sql="delete from `nuwan` where id=$id ";
$result=mysqli_query($con,$sql);
if($result){
    //echo "Delete successful";
    header('location:display.php');
}else{
    die(mysqli_error($con));
}
}

?>