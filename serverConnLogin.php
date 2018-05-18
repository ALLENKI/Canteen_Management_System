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
} 

//retrieving login details from userspage
$username = $_POST["username"];
$password = $_POST["psw"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//retrieving data from server table
$sql = "SELECT * FROM users where enrollno='".$username."' and password='".$password."'";
$result = $conn->query($sql);
}

//server variables
        $usernameserver =  "";
        $emailserver =  "";
        $useridserver = "";
        $passwordserver = "";

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        $GLOBALS['usernameserver'] =  $row["UserName"];
        $GLOBALS['emailserver'] =  $row["email"];
        $GLOBALS['useridserver'] = $row["enrollno"];
        $GLOBALS['passwordserver'] = $row["password"];
    }

} else {
   		 echo "0 results";
}
//if (preg_match('/^[0-9]{5}$/', $username ) && preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z@$]{8,12}$/', $password)) {
if($username == $useridserver && $password == $passwordserver){
	$conn->close();
	$_SESSION['status']="loggedin";
	$_SESSION['username']=$usernameserver;
	$_SESSION['userid']=$useridserver;
    $_SESSION['emailid']=$emailserver;
    $_SESSION['password']=$passwordserver;
		header("location:MainPage.php");

}else{
		$conn->close();
		header("location:index.php");

}//else{
// 	$conn->close();
// 		header("location:index1.php");

// }
?>