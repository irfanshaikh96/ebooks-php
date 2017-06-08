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
						background-repeat : repeat;
						background-position:0px -12px;
						}
</style>
 <script type="text/javascript">
    function login()
    {
      alert("Coming Soon.!!");
    }
  </script>
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
<div>
	<table align="center" style=" margin-top:20px">

	
			 <tr align="center">
			
 

    <td><a href="Biographies/alan-turing.php" target="_blank"><img src="Biographies/alan-turing-the-enigma-the-book-andrew-hodges(www.ebook-dl.com).jpg"></a></td>
    <td><a href="Biographies/blood-feud-the-clintons.php" target="_blank"><img src="Biographies/blood-feud-the-clintons-vs-the-edward-klein4440(www.ebook-dl.com).jpg"></a></td>
    <td><a href="Biographies/duty-memoirs-of-a-secretary-at-robert-m-gates.php" target="_blank"><img src="Biographies/duty-memoirs-of-a-secretary-at-robert-m-gates2623(www.ebook-dl.com).jpg">	</a></td>
	<td><a href="Biographies/straight-to-hell.php" target="_blank"><img src="Biographies/straight-to-hell-true-tales-of-john-lefevre1532(www.ebook-dl.com).jpg"></a></td>
	<td><a href="Biographies/unbroken-laura-hillenbrand.php" target="_blank"><img src="Biographies/unbroken-laura-hillenbrand(www.ebook-dl.com).jpg"></a></td>

  
 
		
	</table>
	<table align="center" style=" margin-top:20px">

	
			 <tr align="center">
			
 
	<td><a href="Biographies/unbroken-laura-hillenbrand.php" target="_blank"><img src="Biographies/unbroken-laura-hillenbrand(www.ebook-dl.com).jpg"></a></td>
  
    
    <td><a href="Biographies/duty-memoirs-of-a-secretary-at-robert-m-gates.php" target="_blank"><img src="Biographies/duty-memoirs-of-a-secretary-at-robert-m-gates2623(www.ebook-dl.com).jpg">	</a></td>
	<td><a href="Biographies/straight-to-hell.php" target="_blank"><img src="Biographies/straight-to-hell-true-tales-of-john-lefevre1532(www.ebook-dl.com).jpg"></a></td>
	<td><a href="Biographies/blood-feud-the-clintons.php" target="_blank"><img src="Biographies/blood-feud-the-clintons-vs-the-edward-klein4440(www.ebook-dl.com).jpg"></a></td>
	
	  <td><a href="Biographies/alan-turing.php" target="_blank"><img src="Biographies/alan-turing-the-enigma-the-book-andrew-hodges(www.ebook-dl.com).jpg"></a></td>

  
 
		
	</table>
</div>
<div>
<?php include("footer.html") ?>
</div>