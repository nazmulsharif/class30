<?php
	$conn = new mysqli("localhost","root","","team");
	if(isset($_POST['submit'])){
		$name =  $_POST['name'];
		$image_name =  $_FILES['image']['name'];
		$image_name_array = explode('.',$image_name);
		$image_ext =  end($image_name_array);
		$image_name_encrypt = time().md5($image_name);
		$image_temp_name = $_FILES['image']['tmp_name'];
		$image_final_name = $image_name_encrypt.".".$image_ext;
		
		$job =  $_POST['job'];
		$desc = $_POST['desc'];
		if(empty($name)|| empty($image_name)||empty($job) || empty($desc)){
			echo "<h1>Field must not be empty</h1>";
		}
		elseif(in_array($image_ext, ['jpg','png','jpeg','gif'])==false){
			echo "<h1>Image format is invalid</h1>";
		}
		else{
			$conn->query("insert into member_info(name,image,job,description)values('$name','$image_final_name','$job','$desc')");
			move_uploaded_file($image_temp_name, 'images/'.$image_final_name);
		}
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container mt-5">
		<div class="col-md-6 m-auto">
			<form action="" method="post" enctype = "multipart/form-data">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter member name" name="name">
				</div>
				<div class="form-group">
					<input type="file" class="form-control" name = "image">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter designation" name="job">
				</div>
				<div class="form-group">
					<textarea id="" rows="5" class="form-control" placeholder="enter description" name="desc"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary"  name="submit">
				</div>
			</form>
		</div>
	</div>





	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
</body>
</html>
