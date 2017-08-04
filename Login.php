<?php
$_unameError=$_passwordError="";
?>
<?php
$uname="";
$pass="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["username"])==true)
	{
		$_unameError="user name required";
	}
	else if(empty($_POST["password"])==true)
	{
		$_passwordError="Password Required";

	}
	else{
		$con=mysqli_connect("localhost","","");
		if(!$con)
		{
			echo "error connecting to DB";
		}
		else
		{
			mysqli_select_db($con,"Bank");
			$sql="select USERNAME,PASSWORD from USER WHERE USERNAME='".$_POST["username"]."'' and PASSWORD='".$_POST["password"]."'";
			//$result=mysqli_query($con,$sql);
			$i=0;
			while ($row=mysqli_fetch_array(mysqli_query($con,$sql))) {
				$i=$i+1;
			}
			if($i!=0)
			{

				echo "<script type='text/javascript'>alert('login Successful!')</script>";
				header("Location: http://localhost/WebTechProject/Dashboard.php");
			}
			else
			{
				echo "<script type='text/javascript'>alert('login failed!')</script>";
			}
		}
	}

}
?>
<html>
<head>
<title>
Login to continue
</title>
<style>
	form{
		background-color: blue;
		color: white;
		font-size: 100%;
		border: 5px solid red;
	}
	.error{color: red;}
</style>
</head>
<body>
<CENTER>
<pre>
<form method="post" action="">

 



	        Username : <input type="text" name="username" value="<?php echo $_POST["username"];?>">
            <span class="error">* <?php echo $_unameError; ?></span>
            <?php //$uname=$_POST["username"];?>
	        Password : <input type="Password" name="password" value="<?php echo $_POST["Password"];?>"> 
	         <?php //$pass=$_POST["password"];?>
            <span class="error">* <?php echo $_passwordError; ?></span>

	        <input type="checkbox" name="remember"> Remember Me           <input type="submit" name="signin" value="signin"> 
</form>

	        
<form method="post" action="Forget.php">
	        Have you forgotten your password ?  <input type="submit" name="Forget Password" value="Forget Password"> 
	        </form>   
<form method="post" action="SignUP.php">
	        Not Created an account yet ?  <input type="submit" name="SignUP" value="SignUP"> 
	        </form>                                                 
</pre>
</CENTER>
</body>
</html>


