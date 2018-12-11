

  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>

  	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

  	<div class="container">


  		<div class="col-lg-12">
  			
  			<h1> Display Table Data </h1>
        <?php 
       // echo $_GET['message'];
        ?>


  			<table class="table table-striped table-hover table-bordered">
  				
  				<tr>
  					
  					<th>ID</th>
  					<th>Username</th>
  					<th>Password</th>
  					<th>Delete</th>
  					<th>Edit</th>
  				</tr>


		<?php

				include 'conn.php';


	
					$query= "SELECT * FROM crudtable";


	# code...


						$result=$con->query($query);

						$data = $result->fetchAll();
					if ($result){

	// echo "data is being fetched ";
	// echo "<pre>";
	// // print_r($data);
	// die ;
}
     				foreach ($data as $key ) { ?>
						<tr>
				 		 	<td> <?php  echo $key['id']; ?></td>
				 		 	<td> <?php  echo $key['username']; ?></td>
				 		 	<td> <?php  echo $key['password']; ?></td>
				 		 	<td>  <a href="delete.php?id= <?php echo $key['id'];?>"class= "text-white"><button> DELETE </button></a> </td>
				 		 	<td> <a href="update.php?id= <?php echo $key['id'];?> "class = "text-white"><button>UPDATE</button></a> </td>
				 		 </tr>
					<?php } ?>

					





 		

 		 <?php
 		 {}


 		 ?>


  			</table>


  		</div>
  		



  	</div>
  
  </body>
  </html>