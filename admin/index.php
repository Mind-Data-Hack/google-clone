<?php
 $con = mysqli_connect("localhost","root","","search_engine");
 session_start();
 if(!isset($_SESSION['email'])){
  echo "<script>window.open('login.php','_self')</script>";
 }else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Website To GOOGLE</title>

    <!-- Latest compiled and minified CSS -->

 <link rel="icon" href="../logo/google_logo.png" style="width: 500px;" sizes="32*32" type="image/png"> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>

 <div class="container">
 	<br>
 	<center><h3>Give Details About Website</h3></center>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
      
      <div class="form-group">
      	<div class="row">
      		<label for="stitle" class="col-sm-2" >Site Title</label>
      		<div class="col-sm-10">
      			<input type="text" name="title" placeholder="Enter Site Title" class="form-control" id="stitle" required>
      		</div>
      	</div>
      </div>

      <div class="form-group">
      	<div class="row">
      		<label for="slink" class="col-sm-2" >Site Link</label>
      		<div class="col-sm-10">
      			<input type="text" name="link" placeholder="Enter Site Link" class="form-control" id="slink" required>
      		</div>
      	</div>
      </div>

      <div class="form-group">
      	<div class="row">
      		<label for="skey" class="col-sm-2" >Site Keywords</label>
      		<div class="col-sm-10">
      			<input type="text" name="keywords" placeholder="Enter Site keyword" class="form-control" id="skeyword" required>
      		</div>
      	</div>
      </div>

      <div class="form-group">
      	<div class="row">
      		<label for="sdescription" class="col-sm-2" >Site Description</label>
      		<div class="col-sm-10">
      			<textarea type="text" name="description" placeholder="Enter Site Description" class="form-control" id="sdescription" required> </textarea>
      		</div>
      	</div>
      </div>

      <div class="form-group">
      	<div class="row">
      		<label for="simage" class="col-sm-2" >Site Image</label>
      		<div class="col-sm-10">
    <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" required>
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          		</div>
      	</div>
      </div>

     <div class="form-group">
      <div class="container">
      	<center>
     	<input type="submit" class="btn btn-outline-success" name="submit" value="Add Website">
     	&nbsp;
     	</center>
     </div>
     </div>

    </form>
<center>
  <form method="post">
    <button type="submit" class="btn btn-outline-danger" name="cancel">Cancel</button>
  </form>
</center>    
 </div>  
 
</body>
</html>

<?php 
   if (isset($_POST['submit'])) {
   	$title = addslashes($_POST['title']);
   	$link = addslashes($_POST['link']);
   	$keyword = addslashes($_POST['keywords']);
   	$description = addslashes($_POST['description']);
    $image = $_FILES['image']['name'];

    if (move_uploaded_file($_FILES['image']['tmp_name'],"../site_image/". $_FILES['image']['name'])) {
        $sql = "insert into websites (title,link,keyword,description,image) values ('$title','$link','$keyword','$description','$image')";
        
        $query = mysqli_query($con,$sql);

        if ($query) {
        	echo "<script>alert('Uploaded')</script>";
        	}

    }
    

   }elseif (isset($_POST['cancel'])) {
   	   echo "<script>window.open('../index.php','_self')</script>";

   }

?>

<?php
}
?>