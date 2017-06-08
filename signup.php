<!DOCTYPE html>

<html>	
	<head>

		<title></title>
		<link rel="stylesheet" type="text/css" href="main.css">
		<style>
		ul{list-style:none;
		}
		ul li{
				display:inline;
				margin:5px;
				}
				.common{
				width:32px;
				
				height:32px;
				border-radius:15px;
				background-image:url(images/i.png);
				
				}
				.fb{
				background-position:377px 227px;
				}
				.fb:hover{
					background-position:376px 159px;
					}
					.twt{
				background-position:321px 227px;
				}
				.twt:hover{
					background-position:321px 159px;
					}
					.y{
				background-position:153px 226px;
				}
				.y:hover{
					background-position:153px 159px;
					}
					form{

						display: inline-table;
						height: 10px;
						width: 50%;
				margin:2px;
					}
					body{
						background-image: url(images/36238179-android-wallpaper-hd.jpg);
						background-size:100%;
					}
					#main{
						position: relative;
					}
		</style>
	</head>
<body>
<h1 id="logo">eBooks Hub <small id="sm">Learn AnyThing , AnyTime & AnyWhere </small></h1>

<div id="main" align="center">
<br><br>
<form action="signup.php"  align="center" method="POST" style="margin-top:25%">
	Name :  <input type="text" name="name"><br><br>
	Email :  <input type="text" name="email"><br><br>
	<!--Country :  <input type="text" name="country"><br><br>
Gender :  <input type="radio" name="gender" value="male">Male
		  <input type="radio" name="gender" value="female">Female<br><br>
	Date of Birth :  <input type="date" name="bdate"><br><br> -->
	Password:  <input type="password" name="pass"><br><br>
	<input type="submit" name="register" value="Register">
	</form>
	
</div>

</body>
</html>
<?php

include("include/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
    $user_pass=$_POST['pass'];//same
    $user_email=$_POST['email'];//same


    if($user_name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
exit();//this use if first is not work then other will not show
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }
//here query check weather if user already registered so can't register again.
    $check_email_query="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }
//insert the user into the database.
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>alert('Registration Done..! Login and Enjoy...!!! ')</script>";
		echo"<script>window.open('index.php','_self')</script>";
		
    }

}

?>