<!DOCTYPE html>
<html>
<head>
	<title>More Image From Google</title>

	    <!-- Latest compiled and minified CSS -->

  <link rel="icon" href="logo/title_logo.png" style="width: 500px;" sizes="32*32" type="image/png"> 
      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
	 .result{
 	margin-left: 10%;
 	margin-right: 25%;
 	margin-top: 10px;
 }	
</style>

</head>
<body>

<div class="container-fluid">
	 <?php 

     $con = mysqli_connect("localhost","root","","search_engine");

     $search = $_GET['id'];
      
      $sql = "select * from websites where keyword like '%$search%' ";
 
      $result = mysqli_query($con,$sql);

      while ($row = mysqli_fetch_array($result)) {
      	$image = $row['image'];
      	echo "<a href='site_image/$image' download><img src='site_image/$image' height='200px'></a>&nbsp;&nbsp;&nbsp;&nbsp;";
       }
	 ?>
</div>

</body>
</html>