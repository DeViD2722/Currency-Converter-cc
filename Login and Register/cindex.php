<?php 
include('header.php');
?>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/ajax.js"></script>
<?php include('container.php');?>
<div class="container">
	<h1>Currency conversion in PHP Using Google API</h1>
	<br><br>
	<form method="post" id="currency-form"> 		
		<div class="form-group">
		&nbsp;<label>Amount : </label>	
			<input type="text" class="tex" size="50%" placeholder="Currency" name="amount" id="amount" /><br><br> 

		&nbsp;<label>From : </label>
			<select class="tex" name="from_currency">
				<option value="INR">Indian Rupee</option>
				<option value="USD" selected="1">US Dollar</option>
				<option value="AUD">Australian Dollar</option>
				<option value="EUR">Euro</option>
				<option value="EGP">Egyptian Pound</option>
				<option value="CNY">Chinese Yuan</option>
			</select>	
      <br><br>
			&nbsp;<label>To:</label>
			<select class="tex" name="to_currency">
				<option value="INR" selected="1">Indian Rupee</option>
				<option value="USD">US Dollar</option>
				<option value="AUD">Australian Dollar</option>
				<option value="EUR">Euro</option>
				<option value="EGP">Egyptian Pound</option>
				<option value="CNY">Chinese Yuan</option>
			</select>			
			&nbsp;&nbsp;
			<br><br><br><br>&nbsp;<button type="submit" name="convert" id="convert" class="btn btn-default">Convert</button>	
		</div>			
	</form>	
	
	<div class="form-group" id="converted_rate"></div>	
	<div id="converted_amount"></div>
						
</div>
<?php include('footer.php');?>




<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Welcome Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<style>
    .container{
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      
    }.container span{
        background-color: gold;
        color: white;
        padding: 15px;
        margin: 10pxpx;
        border-radius: 8px;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 5px;
        text-transform: uppercase;
    }.container p{
        margin: 20px;
    }.container .btn{
        margin-top: -30px;
        width: 150px;
        background-color: gold;
        color: white;
        font-weight: 500;
        letter-spacing: 5px;
        text-transform: uppercase;
        border-radius: 20px;
    }.container .btn:hover{
        margin-top: -30px;
        width:200px;
        background-color: darkorange;
        font-weight: 500;
        transition: 1s;
        color: white;
    }
    h3,h6,p,a{
      color: wheat;
    }
</style>
</head>

<body>
 



<div class="container">
<h3>Welcome,  <span><?=$_SESSION['name'];?></span></h3>
<p>Your Email id is : <h6><?=$_SESSION['username'];?></h6></p>
<a href="index.php" class="btn">LOGOUT</a>
</div>




  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>