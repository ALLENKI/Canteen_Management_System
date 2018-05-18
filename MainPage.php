

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
	
body {
      position: relative; 
  }
  #food {
  	padding-top:50px;
  }
  #info {
  	padding-top:30px;
    margin-right: 20px;
  }
  #map {
  	padding:0px;
  }

  section {

    padding: 10px;
    background-color: #85c1e9;
}

article {

    background-color: white;
}

div.foodcards {
  width: 100%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  padding: 10px 20px;
  width: 100%
}

footer {
    padding: 10px;
    color: white;
    background-color: #34495e;
}
 .jumbotron {
      background-color: #2E4053;
      color: #fff;
      padding: 100px 25px;
  }
  .container-fluid1 {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #D6DBDF;
  }
</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="0">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropnav">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span>                       
      </button>
       <img src="nitrr.jpg" alt="Avatar" style="display:inline;width:40px;height:40px;margin:5px;align:center" class="w3-circle img-circle">
    </div>
    <div>
      <div class="collapse navbar-collapse" id="dropnav">
        <ul class="nav navbar-nav">
          <li><a href="#food">food</a></li>
          <li><a href="#info">info</a></li>
          <li><a href="#contact">contact</a></li>
          <li><a href="#maps">map</a></li>
        </ul>
          <ul class="nav navbar-nav" style="float: right;">
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['username']?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="UserProfile.php">UserProfile</a></li>
              <li><a href="UserProfile.php">Settings</a></li>
              <li><a href="UserProfile.php">Help</a></li>
             <li><a href='logout.php'>Logout</a></li>
            </ul>
          </li>
          </ul>
      </div>
    </div>
  </div>
</nav>    

<div class="jumbotron text-center">
  <h1>NITRR CANTEEN</h1> 
  <p>U get the Best food from Specialized one</p> 
</div>

<div id="food" class="container-fluid">
<!-------------->

<div class="container-fluid1 text-center bg-grey">
  <h2>Food Items</h2><br>
  <h4>avaiable items</h4>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="canteenimage.jpg" alt="idle" width="400" height="300">
        <p style="padding-top: 10px;"><strong>idle</strong></p>
          <form action="userorderingpage.php" method="post">
             <input type="submit" class="btn btn-primary btn-block" value="order Rs 201/-" >
      <label class="checkbox-inline" style="margin-top: 10px"><input type="checkbox" value="sai1" name="idle">take this</label>
        </form>
      </div>
    </div>
      <div class="col-sm-4">
      <div class="thumbnail">
        <img src="canteenimage.jpg" alt="idle" width="400" height="300">
        <p style="padding-top: 10px;"><strong>idle</strong></p>
            <form action="userorderingpage.php" method="post">
             <input type="submit" class="btn btn-primary btn-block" value="order Rs 201/-" >
       <label class="checkbox-inline" style="margin-top: 10px"><input type="checkbox" name="check[]" value="sai2">take this</label>
        </form>
      </div>
    </div>
     <div class="col-sm-4">
      <div class="thumbnail">
        <img src="canteenimage.jpg" alt="idle" width="400" height="300">
        <p style="padding-top: 10px;"><strong>idle</strong></p>
      <form action="userorderingpage.php" method="post">
             <input type="submit" class="btn btn-primary btn-block" value="order Rs 201/-" >
        <label class="checkbox-inline" style="margin-top: 10px"><input type="checkbox" value="sai3" name="check[]">take this</label>
        </form>
      </div>
    </div>
  </div>

 <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="canteenimage.jpg" alt="idle" width="400" height="300">
        <p style="padding-top: 10px;"><strong>idle</strong></p>
      <form action="userorderingpage.php" method="post">
             <input type="submit" class="btn btn-primary btn-block" value="order Rs 201/-" >
       <label class="checkbox-inline" style="margin-top: 10px"><input type="checkbox" value="sai4"  name="check[]"> take this</label>
        </form>
      </div>
    </div>
      <div class="col-sm-4">
      <div class="thumbnail">
        <img src="canteenimage.jpg" alt="idle" width="400" height="300">
        <p style="padding-top: 10px;"><strong>idle</strong></p>
      <form action="userorderingpage.php" method="post">
             <input type="submit" class="btn btn-primary btn-block" value="order Rs 201/-" >
       <label class="checkbox-inline" style="margin-top: 10px"><input type="checkbox" value="sai5" name="check[]">take this</label>
        </form>
      </div>
    </div>
     <div class="col-sm-4">
      <div class="thumbnail">
        <img src="canteenimage.jpg" alt="idle" width="400" height="300">
        <p style="padding-top: 10px;"><strong>idle</strong></p>
      <form action="userorderingpage.php" method="post">
             <input type="submit" class="btn btn-primary btn-block" value="order Rs 201/-" >
        <label class="checkbox-inline" style="margin-top: 10px"><input type="checkbox" value="sai6" name="check[]">take this</label>
        </form>
      </div>
    </div>
  </div>

   <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="canteenimage.jpg" alt="idle" width="400" height="300">
        <p style="padding-top: 10px;"><strong>idle</strong></p>
            <form action="userorderingpage.php" method="post">
             <input type="submit" class="btn btn-primary btn-block" value="order Rs 201/-" >
          <label class="checkbox-inline" style="margin-top: 10px"><input type="checkbox" value="sai7" name="check[]">take this</label>
        </form>
      </div>
    </div>
      <div class="col-sm-4">
      <div class="thumbnail">
        <img src="canteenimage.jpg" alt="idle" width="400" height="300">
        <p style="padding-top: 10px;"><strong>idle</strong></p>
      <form action="userorderingpage.php" method="post">
             <input type="submit" class="btn btn-primary btn-block" value="order Rs 201/-" >
          <label class="checkbox-inline" style="margin-top: 10px"><input type="checkbox" value="sai8" name="check[]">take this</label>
        </form>
      </div>
    </div>
     <div class="col-sm-4">
      <div class="thumbnail">
        <img src="canteenimage.jpg" alt="idle" width="400" height="300">
        <p style="padding-top: 10px;"><strong>idle</strong></p>
        <form action="userorderingpage.php" method="post">
             <input type="submit" class="btn btn-primary btn-block" value="order Rs 201/-" >
          <label class="checkbox-inline" style="margin-top: 10px"><input type="checkbox" value="sai9" name="check[]">take this</label>
        </form>
         
      </div>
    </div>
  </div>

</div>


</div>

<!-------------->

<div id="info"  style="background-color: #85c1e9;box-shadow:2px 3px 2px;margin: 10px;">
  
    <div class="row" style="margin: 0px;">
      <div class="col-sm-4" style="background-color: #D6DBDF;">
      <img src="canteenimage.jpg" alt="idle" style="width:100%;padding: 10px">
    </div>

      <div class="col-sm-8" >
      <div style="margin:10px">
      <p style="color:white;">The first President of India, Rajendra Prasad laid the foundation stone of the college building on 14 September 1956. Construction was completed in 1962 and the college was inaugurated on 14 March 1963 by the first Prime Minister of India, Jawaharlal Nehru.
Until as late as 1956, there were only three technical institutes in the country devoted to mining and metallurgical engineering. In view of this fact and also with the aim of harnessing the ample mineral resources in the region, the institute was set up on 1 May 1956 as Government College of Mining and Metallurgy. The first session of the college commenced on 1 July 1956 with the admission of 15 students each in mining and metallurgical engineering.
In 1958-59 with the commencement of additional courses in civil, mechanical and electrical engineering, the college came to be known as Government College of Engineering and Technology. Later graduate courses in chemical engineering (1965), architecture (1984), electronics (1985), information technology, computer science and technology (2000), biotechnology and biomedical Engineering (2003) were started. It was declared a National Institute of Technology (NIT) by the Government of India on 1 December 2005 and then declared an Institute of National Importance with the passing of the National Institutes of Technology Act, 2007, in May 2007.
</p>
      </div>
      </div>

      </div>
  
  <div style="background-color: #D5D8DC;padding: 10px">

   <div style="background-color: #F8F9F9;margin:5px;padding: 10px;">
  Later graduate courses in chemical engineering (1965), architecture (1984), electronics (1985), information technology, computer science and technology (2000), biotechnology and biomedical Engineering (2003) were started. It was declared a National Institute of Technology (NIT) by the Government of India on 1 December 2005 and then declared an Institute of National Importance with the passing of the National Institutes of Technology Act, 2007, in May 2007.
  
  </div>
  </div>
</div>

<div id="contact" class="container-fluid">
<div class="container-fluid1 " style="background-color: #AED6F1">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Nitrr,Raipur</p>
      <p><span class="glyphicon glyphicon-phone"></span> 9912884184</p>
      <p><span class="glyphicon glyphicon-envelope"></span> charansai850@gmail.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-danger pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div id="map" class="container-fluid">
 <footer>
 <div>
 <p style="text-align:center">&copy; 2017 Saturday Times. @All rights reserved.</p>
</div>
 </footer>

</div>

</body>
</html>
