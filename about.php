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
<h1 align="center" style="color :aliceblue">About Us</h1>
<div id="main" align="center">
<br><br><br><br><br><br>
<pre style="color :bisque">
Hello!
Welcome to ebookshub.com
A site that brings both authors and 
readers into the world of free legal ebooks. Authors with their ebooks will benefit 
greatly from the large community of readers and the 
readers will in return, of course, will have lots of materials 
to read to their hearts’ content.
</pre>



</div>
<br><br><br><br><br><br><br><br><br>
<div>
<?php include("footer.html") ?>
</div>

