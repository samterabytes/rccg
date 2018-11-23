<?php 
session_start();
require_once("connect.php");
function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
    $username = $_POST['username']; 
    $password = $_POST['password']; 
        $sql = mysql_query("SELECT * from admin WHERE username = '$username' And  password='$password'");
        
      if(mysql_num_rows($sql))
	{
		$_SESSION['username'] = $username;
		header("Location:adminpage.php");
	}
	else
	{
			echo "Invalid Username or Password"; 		
	}
	
?>



       