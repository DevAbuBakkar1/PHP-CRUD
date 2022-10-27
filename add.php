<?php 
include 'connection.php';
if($_SERVER['REQUEST_METHOD']== 'POST'){
     $name = $_POST['name'];
     $father_name = $_POST['father_name'];
     $mother_name = $_POST['mother_name'];
     $class = $_POST['class'];
     $section = $_POST['section'];
     $roll = $_POST['roll'];

     if(!empty($name) && !empty($father_name)   && !empty($mother_name) && !empty($class) && !empty($section) && !empty($roll) ){
            $sql = "INSERT INTO student(name, father_name , mother_name , class , section , roll) VALUES('$name','$father_name', '$mother_name' , '$class','$section','$roll' ) ";
            
            $result = mysqli_query($conn , $sql );

            if($result){
                header('location:index.php');
            }else{
                echo "Password Not Match";
            }
        
        }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Animated Dynamic Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>

<!-- Coded With Love By Mutiullah Samim-->
<body>
	<dvi class="container h-100">
	<div class="d-flex justify-content-center">
		<div class="card mt-5 col-md-4 animated bounceInDown myForm">
			<div class="card-header">
				<h4>Students Contact Details</h4>
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div id="dynamic_container">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-user-graduate"></i></span>
							</div>
							<input type="text" placeholder="Student Name" class="form-control" name = "name">
						</div>
                        <div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-male"></i></span>
							</div>
							<input type="text" placeholder="Father Name" class="form-control" name = "father_name">
						</div>
                        <div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-female"></i></span>
							</div>
							<input type="text" placeholder="Mother Name" class="form-control" name = "mother_name">
						</div>
                        <div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-building"></i></span>
							</div>
							<input type="text" placeholder="Class" class="form-control" name = "class">
						</div>
                        <div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-book"></i></span>
							</div>
							<input type="text" placeholder="Section" class="form-control" name = "section">
						</div>
                        <div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-info"></i></span>
							</div>
							<input type="text" placeholder="Roll No" class="form-control" name = "roll">
						</div>
					</div>
                <div class="card-footer">
				<button type="submit" name="submit" class="btn btn-success btn-sm float-right submit_btn"><i class="fas fa-arrow-alt-circle-right"></i> Submit</button>
			    </div>
				</form>
			</div>
			
		</div>
	</div>
	</dvi>
</body>
</html>