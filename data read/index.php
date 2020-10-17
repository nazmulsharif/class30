<?php
	$server_name = "localhost";
	$user_name = "root";
	$password = "";
	$dbname = "iphone";
	$conn = new mysqli($server_name,$user_name,$password,$dbname);
	$data = $conn->query("SELECT * FROM model_info");
	
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
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Sl</th>
				    <th>Model Name</th>
				    <th>Price</th>
				    <th>Published date</th>
				</tr>
				
			</thead>
			<tbody>
				<?php
					$i=1;
					while($dt = $data->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $i++;?></td>
						    <td><?php echo $dt['model_name'] ?></td>
						    <td><?php echo "$".$dt['price'] ?></td>
						    <td><?php echo $dt['publish_date'] ?></td>
						</tr>
					<?php
					
				}

				?>
				
				

			</tbody>

		</table>
	</div>






	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
</body>
</html>
