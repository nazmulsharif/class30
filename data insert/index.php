<?php 
	$server_name = "localhost";
	$user_name = "root";
	$password = "";
	$dbname = "bazar";
	$conn = new mysqli($server_name,$user_name,$password,$dbname);
	if(isset($_POST['submit'])){
		$product =  $_POST['product'];
		$price =  $_POST['price'];
		$check = $conn->query("INSERT INTO bazar_list(product, price) VALUES ('$product',$price)");
		if($check){
			echo "inseted";
		}
		else{
			echo "not inseted";
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
	<div class="container">
		<form action="" class="w-50" style="margin: 50px auto" method="post">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Enter product" name="product">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Enter price" name="price">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success"  name="submit">
			</div>
		</form>
	</div>





	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
</body>
</html>
