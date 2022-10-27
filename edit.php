<?php 
include 'connection.php';
if(isset($_GET['editid'])){
  $id = $_GET['editid'];
}
$query = "SELECT * FROM student WHERE id='" .$id . "'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
              while($row = mysqli_fetch_array($result))
              {   
                $id = $row['id'];
                $name= $row['name'];
                $father_name = $row['father_name'];
                $mother_name = $row['mother_name'];
                $class = $row['class'];
                $section = $row['section'];
                $roll = $row['roll'];
             
              }
 
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
    <div class="div practice">
    <h1 class="text-center">PHP CRUD BY ABU BAKKAR SHOHAN</h1>
    </div> 
    <div class="row">  
    <form method="POST" action="update.php">
      <div class="mb-3 my-5">
        <label for="stname" class="form-label">Name</label>
        <input type="text" class="form-control" id="stname" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="id" value="<?=$id ?>">
      </div>
      <div class="mb-3 ">
        <label for="stfname" class="form-label">Father Name</label>
        <input type="text" class="form-control" id="stfname" name="father_name" value="<?php echo $father_name; ?> ">
      </div>
      <div class="mb-3 ">
        <label for="stmname" class="form-label">Mother Name</label>
        <input type="text" class="form-control" id="stmname" name="mother_name" value="<?php echo $mother_name; ?>">
      </div>
      <div class="mb-3 ">
        <label for="stclass" class="form-label">Class</label>
        <input type="text" class="form-control" id="stclass" name="class" value="<?php echo $class; ?>">
      </div>
      <div class="mb-3 ">
        <label for="stsection" class="form-label">Section</label>
        <input type="text" class="form-control" id="stsection" name="section" value="<?php echo $section; ?>">
      </div>
      <div class="mb-3 ">
        <label for="stroll" class="form-label">Roll</label>
        <input type="text" class="form-control" id="stroll" name="roll" value="<?php echo $roll; ?>">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>
  </div>
</body>
<footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</footer>
</html>