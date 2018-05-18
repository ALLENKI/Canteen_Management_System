<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
    echo "sucess";
}

//retrieving login details from userspage
$username1 = $_POST["username2"];
$email1 = $_POST['email2'];
$enrolno1  = $_POST['enrollno2'];
$password1 = $_POST["password2"];
echo $username1.$email1.$enrolno1 .$password1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//retrieving data from server table

$sql = "INSERT INTO staffusers (UserName, email, enrollno,password)
VALUES ('".$username1 ."','".$email1 ."','".$enrolno1 ."','".$password1."')";
$sql1 = "INSERT INTO users (UserName, email, enrollno,password)
VALUES ('".$username1 ."','".$email1 ."','".$enrolno1 ."','".$password1."')";
if ( $conn->query($sql1) === TRUE) {
    if($conn->query($sql) === TRUE){
    $conn->close();
    $_SESSION['status']="loggedin";
    $_SESSION['username']=$username1;
    $_SESSION['emailid']=$email1;
    $_SESSION['userid']=$enrolno1 ;
    $_SESSION['password']=$password1;
        header("location:MainPage.php");
    }
} else {
    $conn->close();
        header("location:index.php");
}

}




//if (preg_match('/^[0-9]{5}$/', $username ) && preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z@$]{8,12}$/', $password)) {
// if($username == $useridserver && $password == $passwordserver){
// 	$conn->close();
// 	$_SESSION['status']="loggedin";
// 	$_SESSION['username']=$usernameserver;
// 	$_SESSION['userid']=$useridserver;
//     $_SESSION['emailserver']=$emailserver;
//     $_SESSION['password']=$passwordserver;
// 		header("location:MainPage.php");

// }else{
// 		$conn->close();
// 		header("location:index.php");

// }//else{
// 	$conn->close();
// 		header("location:index1.php");

// }
?>