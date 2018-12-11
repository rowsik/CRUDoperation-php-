<?php 

include 'conn.php';


if (isset($_POST['submit'])) {

	$id=$_GET['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];


	$query=" UPDATE crudtable SET id=$id ,username='$username', password='$password' WHERE id =$id ";

	

	$con->query($query);
	header('LOCATION:insert.php');
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

 		 			<h1 class="text-white text-center">
 		 			 Update Operation</h1>
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
</body>
 </html>