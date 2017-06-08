
<html>
<head>
    
    <title>Admin Login</title>
	<style type="text/css">
	body{						background-image: url(images/admin.jpg);
						background-size:100%;
					}
					</style>
</head>

<body>
<div align="center">
	<h1 style="color : red">Admin Page</h1>
                    <form method="post" action="admin_login.php">
                                                  
                                <input  placeholder="Name" name="admin_name" type="text" ><br><br>
								
                            
                                <input  placeholder="Password" name="admin_pass" type="password" value=""><br><br>
                       


                            <input  type="submit" value="login" name="admin_login" >
</div>


</body>

</html>

<?php

include("include/db_conection.php");

if(isset($_POST['admin_login']))
{
    $admin_name=$_POST['admin_name'];
    $admin_pass=$_POST['admin_pass'];

    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";

    $run_query=mysqli_query($dbcon,$admin_query);

    if(mysqli_num_rows($run_query)>0)
    {

        echo "<script>window.open('view_users.php','_self')</script>";
    }
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}

}

?>