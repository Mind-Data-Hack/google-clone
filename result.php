<!DOCTYPE html>
<html>
<head>
	<title>Google Result</title>
	    <!-- Latest compiled and minified CSS -->
  <link rel="icon" href="logo/title_logo.png" style="width: 500px;" sizes="32*32" type="image/png"> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

</head>
<style>
 .result{
 	margin-left: 10%;
 	margin-right: 25%;
 	margin-top: 10px;
 }	

.input-group{
  margin : 13px auto 10px;
  border-radius: 20px;
  max-width: 550px;
  background-color: #FFF;
}
.form-control{
  border-radius: 20px;
  background-color: #FFF;
}
.input-group-text{
  background-color: #FFF;
  background: transparent;
  border-radius: 50%;
}
.input-group .fas{
    color: #007bff;
    cursor: pointer;
    background: transparent;
  border-radius: 50%;

}
.form-control:focus{
  box-shadow: none!important;
}
</style>

<body>

<div class="container-fluid">
	<form action="result.php" method="get" class="form-control">
		<div class="row" style="background-color: #fff;">
			<div class="col-sm-1" >
				<a href="index.php"><img src="logo/google_logo.png" height="60px" width="100px"></a>
			</div>

        <div class="col-sm-6">
        	<div class="input-group">
             <input type="text" name="find" class="form-control" placeholder="Search Google or Type URL">
             <button type="submit" name="search" style="border:none;background-color: #fff;"><i class="fas fa-search"></i></button>
             <span class="input-group-text"><i class="fas fa-microphone"></i></span>
          </div>
        </div>

		</div>
	</form>
</div>

  <div class="result">
  <table>
  	<tr>
  	 <?php 
         $con = mysqli_connect("localhost","root","","search_engine");

      if (isset($_GET['search'])) {
      	$search = $_GET['find'];

       if ($search=="") {
        echo "<center><h6 style='color:red;margin-top:20px;'>Please Write Something!</h6></center>";
        exit();
       }
   
       $sql = "select * from websites where keyword like '%$search%' limit 0,5  ";
        
       $result = mysqli_query($con,$sql);
       
       if (mysqli_num_rows($result)<1) {
        	echo "<center><h4 style='margin-top:50px;'>Sorry! No result Found.<br>Suggestion: You can write Github in search box. <hr>This Is happening due to this site has just limited data in databse. It Is created as a practice project.</h4></center>";
        	exit();
        } 
        echo "<font size='+1' color='#1a1aff'><h6 style='margin-top:20px;'>Images For $search</h6></font>";

        while($row = mysqli_fetch_array($result)){

          $image = $row['image'];

        echo "<td>
                <table style='margin-top:10px;'>
                  <tr>
                   <td>
                     <a target='_blank' href='images.php?id=$search'><img src='site_image/$image' height='100px' ></a>
                   </td>
                  </tr>
                </table>
              </td>";
        }
      }

  	 ?>
  	</tr>
  </table>

<?php 
echo "<a target='_blank' href='images.php?id=$search'><font size='+1' color='#1a1aff' >More Images For $search</font></a><hr>";

$sql = "select * from websites where keyword like '%$search%'  ";

$results = mysqli_query($con,$sql);

while ($rows = mysqli_fetch_array($results)) {
	$title = $rows['title'];
	$link = $rows['link'];
	$description = substr($rows['description'],0,150);

   echo "<a href='$link'><font size='4' color='#1a0dab'><b>$title</b></font><br></a>";
   echo "<a href='$link'><font size='2' color='#202124'>$link</font><br></a>";	
   echo "<font size='2' color='grey'><b>$description</b></font><hr>";	
}

?>

</div>
</body>
</html>