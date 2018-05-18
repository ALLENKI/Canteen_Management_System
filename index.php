<?php

session_start();

if($_SESSION['status'] == "loggedin"){
    header('location:MainPage.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>NITRR CANTEEN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<style>
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

body {
    font-family: Verdana,sans-serif;
    margin:10px;
    font-size: 0.9em;
    background-color: #FFF;

}

header{
    padding: 10px;
    color: white;
    height: 80px;
    background-color: #5dade2;
}

footer {
    padding: 10px;
    color: white;
    background-color: #34495e;
}

section {

    padding: 10px;
    background-color: #85c1e9;
}

article {

    background-color: white;
}

aside{

}

.conatiner1{
  box-shadow: 0 0 30px black;
}

.conatinerbody{
    box-shadow: 0 0 30px black;
    margin: 10px;
}
.conatinersection{
  box-shadow: 0 0 20px black;
  margin: 8px;
}
.conatinersection1{

}

.navbar{
    background-color: #85c1e9;
}

navbar-header{

}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 100%;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.container:hover .overlay {
  width: 100%;
  left: 0;
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

</style>
</head>
<body class="conatinerbody">



  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid row">
      <div class="navbar-header col-sm-4" style="display:inline-block;align:center">
     <img src="nitrr.jpg" alt="Avatar" style="display:inline;width:40px;height:40px;margin:5px;align:center" class="w3-circle img-circle">

  </div>
      <ul class="nav navbar-nav col-sm-4">
        <li style="text-align:center"><h3 style="display:inline-block;text-align:center;font-style: bold;fony-size:20px;">NIT RAIPUR CANTEEN</h3></li>
      </ul>
    <ul class="nav navbar-nav navbar-right col-sm-4">
    <button style="float:right;text-align:center;margin-right:10px;margin-bottom:10px" type="button" 
    class="btn btn-danger btn-lg btn-inline" class="btn btn-danger" data-toggle="modal" 
    data-target="#myModal">Login</button>
    </ul>
    </div>
  </nav>

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->




      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="text-align:center;color:red;font-size:20px"><b>Login</b></h3>
        </div>
        <div class="modal-body">
                <form method="post" action="<?php echo 'serverConnLogin.php';?>" > 
                <div class="form-group">
                  <label for="username" style="color:red;font-size:15px"><b>userId :</b></label>
                  <input type="integer" class="form-control" id="username" placeholder="Enter UserId" name="username" required>
                </div>
                <div class="form-group">
                  <label for="pwd" style="color:red;font-size:15px"><b>Password:</b></label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="psw" required>
                </div>
                <div class="checkbox">
                  <label><input value="1" type="checkbox" name="Remember"> Remember me</label>
                </div>
                <input type="submit"  class="btn btn-danger btn-block" value="Submit">
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <!-------------------------->

<div class="navbar navbar-inverse">
 <img src="canteenimage.jpg" alt="Avatar" style="display:block;height:300px;min-height:200px;margin:0.5%;width:99%;overflow:hidden">
</div>

<div class="row"  style="margin:10px;align:center;min-height:624px">
  <div  class="col-sm-7" style="align:center;height=100%">
 <section  class="conatinersection" style="align:center;height=100%">
 <h2 style="overflow-y:hidden;text-align:center">National Institute of technology Raipur</h2>
 <article>

   <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
     </ol>

     <!-- Wrapper for slides -->
     <div class="carousel-inner">
       <div class="item active">
         <img src="canteenimage.jpg" alt="imag1">
       </div>

       <div class="item">
         <img src="canteenimage.jpg" alt="imag2">
       </div>

       <div class="item">
         <img src="canteenimage.jpg" alt="imag3">
       </div>
     </div>

     <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>
 


 </article>

 </section>
 </div>

<div  class="col-sm-5" >


<div style="margin-left:10px;height:100%" class="conatinersection">

  <ul class="nav nav-pills">
     <li class="active" style="width:50%"><a data-toggle="pill" href="#home">Student Login</a></li>
     <li style="width:49%"><a data-toggle="pill" href="#menu1">Staff Login</a></li>
   </ul>

   <div class="tab-content">
     <div id="home" class="tab-pane fade in active">

       <form action="signupserverconn.php" method="post" style="margin:20px;">
         <div class="modal-header">
         <h3 class="modal-title" style="text-align:center;color:red;font-size:20px"><b>Sign Up</b></h3>
          </div>

             <div class="form-group">
                <label  style="color:red;font-size:15px"><b>FirstName :</b></label>
                <input type="text" class="form-control" id="username1" placeholder="Enter UserName" name="username1" required>
              </div>
              <div class="form-group">
                <label  style="color:red;font-size:15px"><b>Email :</b></label>
                <input type="text" class="form-control" id="email1" placeholder="Enter Email" name="email1" required>
              </div>
            <div class="form-group">
                <label for="enrollmentno" style="color:red;font-size:15px"><b>EnrollmentNo :</b></label>
                <input type="integer" class="form-control" id="enrollno1" placeholder="Enter Enrollment Number" name="enrollno1" required>
              </div>
            <div class="form-group">
                <label for="pwd" style="color:red;font-size:15px"><b>Password :</b></label>
                <input type="password" class="form-control" id="password1" placeholder="Enter Password" name="password1" required>
              </div>
              <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
              </div>
              <button type="submit" class="btn btn-danger btn-block" id="reg_login1">Register</button>
          </form>
     </div>

     <div id="menu1" class="tab-pane fade">

              <form action="signupstaff.php" method="post" style="margin:20px;">
                <div class="modal-header">
                <h3 class="modal-title" style="text-align:center;color:red;font-size:20px"><b>Sign Up</b></h3>
                 </div>

                    <div class="form-group">
                       <label  style="color:red;font-size:15px"><b>UserName :</b></label>
                       <input type="text" class="form-control" id="username2" placeholder="Enter username" name="username2" required>
                     </div>
                     <div class="form-group">
                       <label  style="color:red;font-size:15px"><b>Email :</b></label>
                       <input type="email" class="form-control" id="email2" placeholder="Enter Email" name="email2" required>
                     </div>
                   <div class="form-group">
                       <label for="UserId" style="color:red;font-size:15px"><b>UserId :</b></label>
                       <input type="number" class="form-control" id="userid2" placeholder="Enter any 5 digit Number" name="enrollno2" required>
                     </div>
                   <div class="form-group">
                       <label for="pwd" style="color:red;font-size:15px"><b>Password :</b></label>
                       <input type="password" class="form-control" id="password2" placeholder="Enter Password" name="password2" required>
                     </div>
                     <div class="checkbox">
                       <label><input type="checkbox"> Remember me</label>
                     </div>
                     <button type="submit" class="btn btn-danger btn-block">Login</button>
                 </form>
     </div>
   </div>

 </div>
 </div>

 </div>

<div style="margin:20px;align:center"  class="conatiner1">
  <ul class="list-group">
    <li class="list-group-item" style="margin:10px;align:center;overflow-y:hidden;  background-color: #85c1e9;">
      <div >
       <label style="color:red;font-size:15px"><b>User1  :</b></label>
       <span class="badge">5</span>
       <p style="font-size:15px">review about canteen.............actually this will be scrolling which can be done after database development is done
         ................................................</p>
      </div>
  </li>
    <li class="list-group-item" style="margin:10px;align:center;overflow-y:hidden;  background-color: #85c1e9;">
    <div>
     <label style="color:red;font-size:15px"><b>User2  :</b></label>
     <span class="badge">5</span>
     <p style="font-size:15px">review about canteen.............................................................</p>
    </div>
  </li>
    <li class="list-group-item" style="margin:10px;align:center;margin-bottom:20px;overflow-y:hidden;  background-color: #85c1e9;">
    <div>
         <label style="color:red;font-size:15px"><b>User3  :</b></label>
         <span class="badge">5</span>
         <p style="font-size:15px">review about canteen.............................................................</p>
        </div>
      </li>
  </ul>
</div>


 <footer>
   <!-- <div class="row" style="background-color:#ffffff;width:100%;align:center">
     <div class="col-sm-6 ">
     <div style="height:100%">
   <a href="#" style="margin:5px;">First item</a><br>
   <a href="#" style="margin:5px;">Second item</a><br>
   <a href="#" style="margin:5px;">Third item</a><br>
    </div>
   </div>
   <div class="col-sm-6 ">
     <div style="height:100%">
   <a href="#" style="margin:5px;">First item</a><br>
   <a href="#" style="margin:5px;">Second item</a><br>
   <a href="#" style="margin:5px;">Third item</a><br>
    </div>
   </div>

   </div> -->
 <div>
 <p style="text-align:center">&copy; 2017 Saturday Times. @All rights reserved.</p>
</div>
 </footer>


</body>
</html>
