<?php
include 'db_connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql="DELETE FROM crud WHERE id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        // echo "Deleted successful";
        header('Location: display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>