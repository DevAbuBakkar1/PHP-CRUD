<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
  
    $sql = "DELETE FROM student WHERE id = '$id' ";
    $result = mysqli_query($conn , $sql);
    if($result){
        header('location:index.php?dashboardid');
    }else{
        "There is something error";
    }

}


?>