<?php

session_start();

if($_SESSION['status'] == "loggedin")
	{
		
	}
	else
	{
		header("location:index.php");
	}
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>NITRR CANTEEN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Lato: 100,300,400,700|Luckiest+Guy|Oxygen:300,400" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<![endif]-->
<style type="text/css">
	.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    border-radius: 5px;
    margin:30px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.container {
    padding: 2px 16px;
}
</style>
</head>
<?php 

  $check=$_POST['check'];
    print_r($check);
// $check_value = isset($_POST['idle']) ? 1 : 0;
// echo $check_value;
if (isempty($_POST['check[0]']) == 'sai1') {
	echo "<h1>idle</h1>";
}else{
	echo "<h1>not idle</h1>";
}
// if(isset($_POST['checkbox'])) {
//   print_r($_POST); //print all checked elements
//   $number = count($_POST['checkbox']);
//   echo $number;
// }
?>
<body class="card">

<h1>Your order menu</h1>
  
  <div class="container">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>

</body>
</html>