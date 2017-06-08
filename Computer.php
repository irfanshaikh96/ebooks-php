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
			
 

    <td><a href="computers/linux-command-line-and-shell-scripting.php" target="_blank"><img src="images/linux-command-line-and-shell-scripting-richard-blum(www.ebook-dl.com).jpg">	</a></td>
    <td><a href="computers/java_a_beginner_guide_sixth_edition_herbert_schildt.php" target="_blank"><img src="computers/java_a_beginner_guide_sixth_edition_herbert_schildt(www.ebook-dl.com).jpg"></a></td>
    <td><a href="computers/operating_system_concepts.php" target="_blank"><img src="computers/operating_system_concepts_8th_edition_abraham_silberschatz_peter_b_galvin(www.ebook-dl.com).jpg">	</a></td>
	<td><a href="computers/computer_networks.php" target="_blank"><img src="computers/computer_networks_fifth_edition_a_systems_approach_larry_l_peterson_bruce_s_davie(www.ebook-dl.com).jpg">	</a></td>
	<td><a href="computers/php_and_mysql_web_development.php" target="_blank"><img src="computers/php_and_mysql_web_development_4th_edition_luke_welling_laura_thomson(www.ebook-dl.com).jpg"></a></td>

  </tr>
   <tr align="center">
    <td onclick="login();"><img src="computers/oracle-12c-sql-3rd-edition-joan-casteel(www.ebook-dl.com).jpg"></td>
    <td onclick="login();"><img src="images/c-programming-in-linux-learn-how-cerberus3909(www.ebook-dl.com).jpg"></td>
    <td onclick="login();"><img src="images/javascript-the-ultimate-beginners-andrew-johansen9663(www.ebook-dl.com).jpg"></td>
	<td onclick="login();"><img src="images/seo-fitness-workbook-2017-edition-jason-mcdonald-phd7078(www.ebook-dl.com).jpg"></td>
    <td onclick="login();"><img src="images/data-mining-the-textbook-2015th-charu-c-aggarwal(www.ebook-dl.com).jpg"></td>
  </tr>
 
		
	</table>
</div>
<div>
<?php include("footer.html") ?>
</div>
