<!DOCTYPE html>
<html>
<head>
	<title>Google Clone</title>
    
 <link rel="icon" href="logo/title_logo.png" style="width: 500px;" sizes="32*32" type="image/png"> 

<!-- Latest compiled and minified CSS -->
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
*{
  margin: 0;
  padding: 0;
}
.google-header{
	width: 100%;
	max-height: 500px;
	float: right;
	font-family: sans-serif;
}
.google-header img{
	max-width: 100%;
	border-radius: 50%;
}
.gmail-img{
	border-radius: 50%;
	width: 40px;
	float:right;
	margin-right: 15px;
	margin-top: 20px;
    cursor: pointer;
}
.header-icons{
	float: right;
	width: 200px;
	margin-top: 28px;
	margin-right: 10px;
}
.header-icons .fa-th{
    font-size:20px;
    margin-top: 5px;
    color: gray;
    float: right;
    margin-right: 20px;
    cursor: pointer; 
}
.header-icons .fa-th:hover{
	color: #000;
}
.header-icons .fa-bell{
	width: 20px;
	height: 20px;
	float: right;
	background-color: #737373;
	border-radius: 50%;
	font-size: 10px;
	color: #fff;
	margin-top: 5px;
	text-align: center;
	padding-top: 5px;
    cursor: pointer;
}
.header-icons .fa-bell:hover{
	background-color: #000;
}
.header-icons a{
	float: right;
	margin-right: 15px;
	color: #333;
	text-decoration: none;
	font-size: 14px;
}
.header-icons a:hover{
	color: gray;
}
.google-search{
	font-family: sans-serif;
	padding: 20px;
}
.google-image img{
	margin: 100px auto 10px;
	width: 250px;
	cursor: pointer;
}
.input-group{
	margin : 13px auto 10px;
	border-radius: 20px;
	max-width: 550px;
	background-color: #f5f5f5;
}
.form-control{
	border:none!important;
	border-radius: 20px!important;
    background-color: #f5f5f5!important;
}
.input-group-text{
	background: transparent !important;
	border: none!important;
}
.input-group .fas{
    color: #007bff;
    cursor: pointer;
}
.form-control:focus{
	box-shadow: none!important;
}
</style>

<body>

    <div class="google-header">
    	<div class="gmail-img">
    		<img src="profile_img/profile.png">
    	</div>

        <div class="header-icons">
        	<i class="fas fa-bell"></i>
        	<i class="fas fa-th"></i>
        	<a href="#">Images</a>
        	<a href="#">Gmail</a>
        </div>

    </div>

    <div class="google-search">
    	<div class="google-image text-center">
    		<img src="logo/google_logo.png">
    	</div>

    	<form action="result.php" name="find">
    	<div class="input-group text-center">
             <input type="text" name="find" class="form-control" placeholder="Search Google or Type URL">
             <button type="submit" name="search" style="border:none;"></button>
    	   <div class="input-group-append">
    	   	 <span class="input-group-text"><i class="fas fa-microphone"></i></span>
    	   </div>
    	</div>
        </form>
    
    </div>
</body>
</html>