<?php 
include 'conn.php';
if (isset($_POST['submit'])) {

	$username=$_POST['username'];
	$password=$_POST['password'];


	$query=" Insert into crudtable (username, password) VALUES ('$username','$password')" ;

	$result=$con->query($query);

// 	if ($result) 
// 	{
// 	echo "data inserted";	
// 	print_r($result);
// 	}else{

// 		echo "not insertd";
// 		print_r($result);
// 	}

}



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <body>


 	<div class="=colg-lg-6 m-auto">
 		 <form method="post">


 		 	 <br> <br> <br><div class="card">
 		 		



 		 		<div class="card-header bg-dark">

 		 			<h1 class="text-white text-center">Insert Operation</h1>
 		 			<br>
 		 			<br>
 		 			<br>

 		 		</div>


 		 		<center>
 		 		<label> Username</label>
 		 		<input type="text" name="username"><br><br>


 		 		<label> Password</label>
 		 		<input type="Password" name="password"><br><br>

 		 		<button class="btn btn-sucess" name="submit" type="submit"> Submit</button>
 		 		</center>
 		 	</div>

 		 </form>
 		



 	</div>

 	<?php 
 	include 'display.php';

 	?>
 
 </body>
 </html>