<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: index.php");//redirect to login page to secure the welcome page without login access.
}

?>
  <!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin-left: 58px;
	margin-right: 58px;
    overflow: hidden;
    background-color: slategray;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: black;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
body{
						background-image: url(images/contact1.jpg);
						background-size:100%;
						background-repeat : no-repeat;
						background-position:0px -12px;
						}
</style>
</head>
<body>
<div style="margin-left:4.5%;">
	<h1 style="color : aliceblue">eBooks Hub</h1><small style="margin-left:13% ; position:absolute; margin-top:-35px; color : aliceblue; font-size:18px">Learn Anythings ,AnyTime,AnyWhere</small>
</div>
<ul>
  <li><a href="home.php">Home</a></li>

  <li class="dropdown">
  

      <li><a href="Computer.php">Computers & Technology</a></li>
      <li><a href="Biography.php">Biographies & Memoirs</a></li>
	  
    </div>
  </li>
    
      <li><a href="bookrequest.php">Book Request</a></li>

  <li class="dropdown" style="float: right;">
    <a href="javascript:void(0)" class="dropbtn"><?php echo "Hello,  ".$_SESSION['email']; ?></a>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
    </div>
  </li>
  <li style="float: right;"><a href="contact.php">Contact us</a></li>
  <li style="float: right;"><a href="about.php">About Us</a></li>
  

</ul>
<h1 align="center" style="color :aliceblue">Contact Us</h1>
<div id="main" align="center">
<br><br><br><br><br><br>



<form  action="contact.php" align="center" method="POST">
	Name : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="name" placeholder="Enter Your Name"><br><br>
	Your Email : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email" placeholder="Enter Email Address" ><br><br>
	Message(purpose) : &nbsp&nbsp&nbsp <input type="text" name="message" placeholder="Enter Your Message"><br><br>
	
	
	<center><input type="submit" name="submit" value="Submit"></center>
	</form>
</div>
<br><br><br><br><br><br><br><br><br>
<div>
<?php include("footer.html") ?>
</div>

<?php

include("include/db_conection.php");//make connection here
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
    $email=$_POST['email'];//here getting result from the post array after submitting the form.
    $message = $_POST['message'];//same
   
	 if($name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
exit();//this use if first is not work then other will not show
    }
    if($email=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the email')</script>";
exit();//this use if first is not work then other will not show
    }

    if($message=='')
    {
        echo"<script>alert('Please enter the message ')</script>";
exit();
    }


//insert the user into the database.
    $insert_contact="insert into contact (name,email,message) VALUE ('$name','$email','$message')";
    if(mysqli_query($dbcon,$insert_contact))
    {
        echo"<script>alert('Your Request is Successfully Done...! We Will Contact As soon as Fast..! ')</script>";
		echo"<script>window.open('home.php','_self')</script>";
		
    }

}

?>