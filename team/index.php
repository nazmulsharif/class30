<?php 
	$server_name = "localhost";
	$user_name = "root";
	$password = "";
	$dbname = "team";
	$conn = new mysqli($server_name,$user_name,$password,$dbname);
	$data = $conn->query("select * from member_info");




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
		<h2 class="my-5 text-center">Our Team Members</h2>
		<div class="row">
			<?php  while($dt = $data->fetch_assoc()){?>
			<div class="col-md-4">
				<div class="card">
					<img src="images/<?php  echo $dt['image']?>"alt="" class="card-img-fluid" style="height:300px ">
					<div class="card-header">
						<div class="card-title">
							<h4><?php echo $dt['name']?></h4>
							<h6><?php echo $dt['job']?></h6>
						</div>
					</div>
					<div class="card-body">
						<p><?php echo $dt['description']?></p>
					</div>
				</div>
			</div>
			<?php } ?>		
		</div>

	</div>


	






	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
</body>
</html>
