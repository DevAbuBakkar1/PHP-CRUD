<?php 
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="container">
  <?php if(isset($_GET['dashboardid'])){
	echo "<h3 class ='text-light;'> DELETE SUCCESSFULLY DONE</h3>";
  }?>  
  <div class="div practice">
    <h1 class="text-center">PHP CRUD BY ABU BAKKAR SHOHAN</h1>
   
    </div>
    
    <div class="row">
    <!-- Editable table -->
      <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
          STUDENT DATA TABLE
        </h3> <button class="btn btn-danger add-user"> <a href="add.php" class="text-light">Add User</a> </button>
        <div class="card-body">
          <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"
              ><a href="#!" class="text-success"
                ><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a
            ></span>
            <table class="table table-bordered table-responsive-md table-striped text-center">
              <thead>
                <tr>
                  <th class="text-center">Student Name</th>
                  <th class="text-center">Father Name</th>
                  <th class="text-center">Mother Name </th>
                  <th class="text-center">Class</th>
                  <th class="text-center">Section</th>
                  <th class="text-center">Roll No</th>
                  <th class="text-center">Operations</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                    $sql = 'SELECT * FROM `student`';
                    $result = mysqli_query($conn , $sql);
                    if($result){
                      while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name= $row['name'];
                        $father_name = $row['father_name'];
                        $mother_name = $row['mother_name'];
                        $class = $row['class'];
                        $section = $row['section'];
                        $roll = $row['roll'];
                        echo '
                        <tr>
                          <td  class="pt-3-half">'.$name.'</td>
                          <td  class="pt-3-half" >'.$father_name.'</td>
                          <td  class="pt-3-half" >'.$mother_name.'</td>
                          <td  class="pt-3-half" >'.$class.'</td>
                          <td  class="pt-3-half" >'.$section.'</td>
                          <td  class="pt-3-half" >'.$roll.'</td>    
                          <td>
                          <span class="table-remove"
                          ><button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light">DELETE</a></button>
                          <button class="btn btn-danger"><a href="edit.php?editid='.$id. '"class="text-light">EDIT</a></button>
                          </span>
                         </td>
                      </tr>
                      ';

                      }
                    
                    }
                    ?>
              </tbody>
              
            </table>
          </div>
        </div>
      </div>
      <!-- Editable table -->
          </div>
  </div>
</body>
<footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</footer>
</html>