<?php
$uname=$pass=$cpass=$emails=$fname=$lname=$mobiles=$addresses=$_city=$_country=$_zip_code=$_question=$_answer="";
$_dob='00-00-0000';
$unameErr=$passErr=$cpassErr=$emailsErr=$fnameErr=$lnameErr=$mobilesErr=$addressesErr=$_cityErr=$_countryErr=$_zip_codeErr=$_questionErr=$_answerErr="";
$_dobErr='00-00-0000';?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign UP</title>
	<style >
	    body{
	    	background-image:<img src=Background.jpg alt="Background">; 
	    }
		div.EP{
			background-color:blue; 
			color: white;
		}
		div.EPZ{
			background-color:black; 
			color: white;
		}
		span.error{color: red;}
	</style>
</head>
<body>

    <pre>
        <h1>ACCOUNT SIGN UP</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    	<div class="EP">
        ACCOUNT INFORMATION                                                         

             *USERNAME: <input type="text" name="username">                
              <span class="error">* <?php echo $unameErr; ?></span>

             *PASSWORD: <input type="password" name="password"> 
              <span class="error">* <?php echo $passErr; ?></span>

     *CONFIRM PASSWORD: <input type="password" name="confirm_password">                  
              <span class="error">* <?php echo $cpassErr; ?></span>

        *EMAIL ADDRESS: <input type="email" name="email">  
              <span class="error">* <?php echo $emailsErr; ?></span>
<hr>

         USER INFORMATION

           *FIRST NAME: <input type="text" name="first_name">
              <span class="error">* <?php echo $fnameErr; ?></span>

            *Last Name: <input type="text" name="last_name"> 
              <span class="error">* <?php echo $lnameErr; ?></span>

        *Date Of Birth: <input type="Date" name="dob">  
              <span class="error">* <?php echo $_dobErr; ?></span>

                 Phone: <input type="text" name="mobile">  
              <span class="error">* <?php echo $mobilesErr; ?></span>

              *ADDRESS: <input type="text" name="address">
                 

    *ADDRESS(2nd Line): <input type="text" name="address2">
              <span class="error">* <?php echo $addressesErr; ?></span>

                 *CITY: <input type="text" name="city">
              <span class="error">* <?php echo $_cityErr; ?></span>

              *COUNTRY: <input type="text" name="country">
             <span class="error">* <?php echo $_countryErr; ?></span>


             *ZIP CODE: <input type="text" name="zip_code">
              <span class="error">* <?php echo $_zip_codeErr; ?></span>

    	</div>
    	<div class="EPZ">
    		
        Security Section

            *Question: <select name="question">                   
                        <option value="what is your favourite color">what is your favourite color ?</option>
                        <option value="what is your favourite fruit">what is your favourite fruit ?</option>
                        <option value="what is your favourite flower">what is your favourite flower ?</option>
                        <option value="what is your favourite food">what is your favourite food ?</option>
             </select><span class="error">*<?php echo $_questionErr; ?></span>  Are you done finishing the form ?  <input type="submit" name="sign" value="signup">
             
              *Answer: <input type="text" name="answer">                         Already hvae an account ?         <input type="submit" name="sign" value="signin">
               <span class="error">* <?php echo $_answerErr; ?></span>

       

        </div>
</form>
    </pre>
</body>
</html>

<?php
$uname=$pass=$cpass=$emails=$fname=$lname=$mobiles=$addresses=$_city=$_country=$_zip_code=$_question=$_answer="";
$_dob='00-00-0000';
$unameErr=$passErr=$cpassErr=$emailsErr=$fnameErr=$lnameErr=$mobilesErr=$addressesErr=$_cityErr=$_countryErr=$_zip_codeErr=$_questionErr=$_answerErr="";
$_dobErr='00-00-0000';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["username"]))
	{
		$unameErr="USERNAME REQUIRED";  
	}
	else
		{
			$uname=test_input($_POST["username"]);
		}
	if(empty($_POST["username"]))
	{
		$passErr="PASSWORD REQUIRED"; 
	}
	else
		{
			$pass=test_input($_POST["password"]);	
		}	
	if(empty($_POST["confirm_password"]))
	{
		$cpassErr="plz retype your PASSWORD";
  
	}
	else
	    {
	    	$cpass=test_input($_POST["confirm_password"]);
	    }
    if(empty($_POST["email"]))
	{
		$emailsErr="EMAIL REQUIRED";
  
	}
	else
      { 
      	$emails=test_input($_POST["email"]);
      }
    if(empty($_POST["first_name"]))
	{
		$fnameErr="first name REQUIRED";
  
	}
	else
        {
        	$fname=test_input($_POST["first_name"]);
        }
    if(empty($_POST["last_name"]))
	{
		$lnameErr="last name REQUIRED";
  
	}
	else
        {
        	$lname=test_input($_POST["last_name"]);
        }
    if(empty($_POST["mobile"]))
	{
		$mobilesErr="mobile Number REQUIRED";
  
	}
	else
       {
       	$mobiles=test_input($_POST["mobile"]);
       }
    if(empty($_POST["address"]) && empty($_POST["address2"]))
	{
		$addressesErr="Address REQUIRED";
  
	}
	else
       {
       	$addresses=test_input($_POST["address"]).test_input($_POST["address2"]);
       }
    if(empty($_POST["city"]))
	{
		$_cityErr="CITY REQUIRED";
  
	}
	else
       {
       	$_city=test_input($_POST["city"]);
       }
    if(empty($_POST["country"]))
	{
		$_countryErr="Country REQUIRED";
  
	}
	else
        {
        	$_country=test_input($_POST["country"]);
        }
    if(empty($_POST["zip_code"]))
	{
		$_zip_codeErr="zip_code REQUIRED";
  
	}
	else
        {
        	$_zip_code=test_input($_POST["zip_code"]);
        }
    if(empty($_POST["question"]))
	{
		$_questionErr="please select a question";
  
	}
	else
        {
        	$_question=test_input($_POST["question"]);
        }
    if(empty($_POST["answer"]))
	{
		$_answerErr="please provide answer to your question";
  
	}
	else
        {
        	$_answer=test_input($_POST["answer"]);
        }
    if(empty($_POST["username"]))
	{
		$_dobErr="please select your date of birth";
  
	}
	else
        {
          $_dob=test_input($_POST["dob"]);
     }

}
function test_input($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>