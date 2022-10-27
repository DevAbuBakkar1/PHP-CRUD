<?php 
include 'connection.php';
 
                $zz = $_POST['id'];
                $name= $_POST['name'];
                $father_name = $_POST['father_name'];
                $mother_name = $_POST['mother_name'];
                $class = $_POST['class'];
                $section = $_POST['section'];
                $roll = $_POST['roll'];

                $query = 'UPDATE student set name ="'.$name.'",
                father_name ="'.$father_name.'", mother_name="'.$mother_name.'",
                class="'.$class.'",section="'.$section.'", 
                roll="'.$roll.'" WHERE
				id ="'.$zz.'"';
				$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                if($result){
                    header("location:index.php");
                }
             
        
?>
