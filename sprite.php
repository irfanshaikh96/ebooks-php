<?php
session_start();//session starts here

?>


<html>	
	<head>

		<title></title>
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
						width: 
				margin:2px;
					}
		</style>
	</head>
<body>
<h1 id="logo">eBooks Hub <small id="sm">Learn AnyThing , AnyTime & AnyWhere </small></h1>
<ul align="right" height="1px">
<li><form action="sprite.php" method="post"><input type="text" name="email" placeholder="Email Id">
<input type="password" name="pass" placeholder="Enter password">
<input type="submit" name="login" value="Login"></form></li>
<li><a href="signup.php"><img src="images/sign.png" height="26px" width="86px"></a></li>
	<li><a href="https://www.fb.com/irfan7068" title="facebook"><img src="images/ss.png" width="1" height="1" class="common fb"></a></li>
	<li><img src="images/ss.png" width="1" height="1" class="common twt"></li>
	<li><img src="images/ss.png" width="1" height="1"  class="common y"></li>
	
</ul>

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