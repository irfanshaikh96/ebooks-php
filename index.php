<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>eBook Reading.</title>
	
	<link rel="stylesheet" type="text/css" href="styles/w3.css">
	<link rel="stylesheet" type="text/css" href="main.css">
  <script type="text/javascript">
    function login()
    {
      alert("Please First login");
    }
	function check()
    {
      alert("Please First login");
    }
  </script>
  <style>
		ul{
      list-style:none;
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
						
						margin:2px;
					}
					
		</style>
</head>
<body>



<div id="head">
<h1 id="logo">eBooks Hub <small id="sm">Learn AnyThing , AnyTime & AnyWhere </small></h1>
<ul style="float:right" align="right" height="1px">

<li><form action="index.php" method="post"><input type="text" name="email" placeholder="Email Id">
<input type="password" name="pass" placeholder="Enter password">
<input type="submit" name="login" value="Login"></form></li>

<li><a href="signup.php"><img src="images/sign.png" height="26px" width="86px"></a></li>
	<li><a href="https://www.fb.com/irfan7068" title="facebook"><img src="images/ss.png" width="1" height="1" class="common fb"></a></li>
	<li><img src="images/ss.png" width="1" height="1" class="common twt"></li>
	<li><img src="images/ss.png" width="1" height="1"  class="common y"></li>
	
</ul>
</div>






<div id="slider">	

<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
  <img src="img_fjords.jpg" style="width:100%" height="315px">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    Learn AnyTime
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img_lights.jpg" style="width:100%" height="315px">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
   AnyWhere
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img_mountains.jpg" style="width:100%" height="315px">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 ">
   
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img_forest.jpg" style="width:100%" height="315px">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 ">
    
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img_mountains.jpg" style="width:100%" height="315px">
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
  So Let's Started TO Know Everything Frome Books..! :)
  </div>
</div>

<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</div>
<section align="center">
<div>
	<table align="center">
	
    <caption id="sp">Computers & Technology</caption>
	<tr align="center"> 
    <td onclick="login();"><img src="images/linux-command-line-and-shell-scripting-richard-blum(www.ebook-dl.com).jpg"></td>
    <td onclick="login();"><img src="images/c-programming-in-linux-learn-how-cerberus3909(www.ebook-dl.com).jpg"></td>
    <td onclick="login();"><img src="images/javascript-the-ultimate-beginners-andrew-johansen9663(www.ebook-dl.com).jpg"></td>
  	<td onclick="login();"><img src="images/seo-fitness-workbook-2017-edition-jason-mcdonald-phd7078(www.ebook-dl.com).jpg"></td>
    <td onclick="login();"><img src="images/data-mining-the-textbook-2015th-charu-c-aggarwal(www.ebook-dl.com).jpg"></td>
	</tr>
</table>
    <table align="center">
    <caption  id="sp">Biographies & Memoirs</caption>
  <tr align="center">
    <td onclick="login();"><img src="Biographies/alan-turing-the-enigma-the-book-andrew-hodges(www.ebook-dl.com).jpg"></td>
    <td onclick="login();"><img src="Biographies/straight-to-hell-true-tales-of-john-lefevre1532(www.ebook-dl.com).jpg"></td>
    <td onclick="login();"><img src="Biographies/unbroken-laura-hillenbrand(www.ebook-dl.com).jpg"></td>
	  <td onclick="login();"><img src="Biographies/duty-memoirs-of-a-secretary-at-robert-m-gates2623(www.ebook-dl.com).jpg"></td>
	  <td onclick="login();"><img src="Biographies/blood-feud-the-clintons-vs-the-edward-klein4440(www.ebook-dl.com).jpg"></td>
  </tr>
 
  </table>
   
</div>
<div>
<?php include("footer.html") ?>
</div>



</body>
</html>







<?php

include("include/db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('home.php','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>


