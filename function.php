<?php  
include'connection.php'; 
$con = db_connection ();


if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$months = $_POST['buwan'];
    
    $sql = "INSERT INTO `user_db` (`user_email`, `user_password`, `user_months`) VALUES ('$email', '$pass', '$months')";
    $con->query($sql) or die ($con->error);
    echo header("Location: index.php?success");
    $row = mysql_fetch_array($sql);
    if($row['email'] == $email && $row['pass'] == $pass){
    	echo "Log in success!! welcome" . $row[''];
    	
    }
    $con->close();

}



?>