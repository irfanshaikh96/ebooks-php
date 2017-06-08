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
						background-image: url(images/bookreq.jpg);
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
<h1 align="center" style="color :lime">Book Request</h1>
<div id="main" align="center">
<br><br><br><br><br><br>



<form  action="bookrequest.php" align="center" method="POST">
	Your Email : &nbsp&nbsp&nbsp&nbsp<input type="text" name="email" placeholder="Enter Your Name"><br><br>
	Book Title : &nbsp&nbsp&nbsp <input type="text" name="book_title" placeholder="Book Title"><br><br>
	Author Name :  <input type="text" name="book_author" placeholder="Author Name"><br><br>
	Publisher  : &nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="book_pub" placeholder="Publisher" ><br><br>
	Edition : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="book_edit" placeholder="Edition"><br><br>
	
	<center><input type="submit" name="submit" value="Submit"></center>
	</form>
</div>
<br><br><br><br>
<div>
<?php include("footer.html") ?>
</div>
<?php

include("include/db_conection.php");//make connection here
if(isset($_POST['submit']))
{
    $email=$_POST['email'];//here getting result from the post array after submitting the form.
    $book_title = $_POST['book_title'];//same
    $book_author =$_POST['book_author'];//same
	$book_pub =$_POST['book_pub'];//same
	$book_edit =$_POST['book_edit'];//same
	


    if($email=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the email')</script>";
exit();//this use if first is not work then other will not show
    }

    if($book_title=='')
    {
        echo"<script>alert('Please enter the Book title')</script>";
exit();
    }

    if($book_author=='')
    {
        echo"<script>alert('Please enter the Author name')</script>";
    exit();
    }
	 if($book_pub=='')
    {
        echo"<script>alert('Please enter the publication')</script>";
    exit();
    }
	 if($book_edit=='')
    {
        echo"<script>alert('Please enter the Edition')</script>";
    exit();
    }

//insert the user into the database.
    $insert_BookReq="insert into book_req (email,book_title,book_author,book_pub,book_edit) VALUE ('$email','$book_title','$book_author','$book_pub','$book_edit')";
    if(mysqli_query($dbcon,$insert_BookReq))
    {
        echo"<script>alert('Your Request is Successfully Done...! We Will Upload Your Requested Book As Soon As Fast..! ')</script>";
		echo"<script>window.open('home.php','_self')</script>";
		
    }

}

?>