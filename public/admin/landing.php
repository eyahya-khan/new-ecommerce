<?php

//if (!isset($_SESSION['email'])){
//header('location: ../login.php?mustlogin');
//exit;
//}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/users.css">


</head>

<body>
<div class="container-fluid">

	
 <?php include('layout/headerdaniel.php'); ?>
 
<div class="container">
	<div class="text-center userheadlinediv">	
		<h1>Welcome adminname </h1>
	</div>
	<div class="d-flex justify-content-around mb-5">
	<a href="product.php"><h2>Update products</h2>
 	<a href="users.php"><h2>Update users</h2>
	</div>



 <?php include('layout/footer.php');?>	
 

</body>
</html>