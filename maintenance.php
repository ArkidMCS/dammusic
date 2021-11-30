<html>
<body>

<p>

<a href="search/search_1.php">Search songs with a minimum duration</a><br>
<a href="search/search_2.php">Search songs with a minimum rating and a specific genre</a><br>
<a href="search/search_3.php">Search songs produced in a range of years</a><br>
<a href="search/search_4.php">Search songs from 1 or 2 genres</a><br>
</p>
	
<a href="index.html">Back</a><br><br>
	
	
	<p><a>Register</a> | <a href="maintenance.php">Login</a> | <a href="insert_page.php">Already logged in?</a></p>
	<h3>Login Form</h3>  
	<form action="" method="POST">  
	Username: <input type="text" name="user"><br />  
	Password: <input type="password" name="pass"><br />   
	<input type="submit" value="Login" name="submit" />  
	</form>  
	<?php  
	include("main/db_connection.php");
	
	if(isset($_POST["submit"])){  
		if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
			$user=$_POST['user'];  
			$pass=$_POST['pass'];  

			$conn = OpenCon();

			$query=mysqli_query($conn, "SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'"); 
			$numrows=$query->num_rows;

			if($numrows!=0)
			{  
				while($row=mysqli_fetch_assoc($query))  
				{  
				$dbusername=$row['username'];  
				$dbpassword=$row['password'];  
				}  


				if($user == $dbusername && $pass == $dbpassword)  
				{  
				session_start();  
				$_SESSION['sess_user']=$user;  

				/* Redirect browser */  
				header("Location: insert_page.php");  
				}  
			} else {  
                echo "Invalid username or password!";
                error_log("User put invalid credentials.", 0);
			}  

			} else {  
				echo "All fields are required!";  
                error_log("User submit empty credentials.", 0);
			}  
		}  
	?> 

</body>
</html>