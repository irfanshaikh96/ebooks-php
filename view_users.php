<html>
<head lang="en">
    
    <title>View Users</title>
	<style type="text/css">
	body{						background-image: url(images/view.jpeg);
						background-size:100%;
					}
					</style>
</head>


<body>

<div>
    <h1 align="center">All the Users</h1>

<div align="center"><!--this is used for responsive display in mobile and other devices-->


    <table style="table-layout: fixed">
        <thead>

        <tr>

            <th>User Id</th>
            <th>User Name</th>
			<th>User Pass</th>
            <th>User E-mail</th>
            <th>Delete User</th>
        </tr>
        </thead>

        <?php
        include("include/db_conection.php");
        $view_users_query="select * from users";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
		if($run == true)
		{
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $user_id=$row[0];
            $user_name=$row[1];
            $user_email=$row[2];
            $user_pass=$row[3];



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_pass;  ?></td>
           <td><a href="delete.php?del=<?php echo $user_id ?>"><input type="button" value="Delete"></a></td> 
        </tr>

        <?php } } ?>

    </table>
        </div>
</div>
<!-- book request -->

<div align="center">
    <h1 align="center">Book Request</h1>

<divalign="center"><!--this is used for responsive display in mobile and other devices-->


    <table style="table-layout: fixed">
        <thead>

        <tr>

            <th>User Id</th>
            <th>User Email</th>
			<th>Book Title</th>
            <th>Author Name</th>
            <th>Publisher</th>
			<th>Edition</th>
        </tr>
        </thead>

        <?php
        include("include/db_conection.php");
        $view_bookreq_query="select * from book_req";//select query for viewing users.
        $run1=mysqli_query($dbcon,$view_bookreq_query);//here run the sql query.
		if($run1 == true)
		{
        while($row=mysqli_fetch_array($run1))//while look to fetch the result and store in a array $row.
        {
            $user_id=$row[0];
            $user_email=$row[1];
            $book_title=$row[2];
            $book_author=$row[3];
			$book_pub=$row[4];
            $book_edit=$row[5];



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo  $book_title;  ?></td>
            <td><?php echo $book_author;  ?></td>
			 <td><?php echo $book_pub;  ?></td>
            <td><?php echo $book_edit;  ?></td> 
        </tr>

        <?php } } ?>

    </table>
        </div>
</div>


</body>

</html>
