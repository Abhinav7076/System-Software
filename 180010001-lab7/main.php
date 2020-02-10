<!docytype=html>
<head>
<title> 180010024
</title>
<?php
	require_once 'login.php';
	$conn = mysqli_connect($db_hostname, $db_user, $db_password);
	if (!$conn) {
        die('<p>Connection failed: <p>' . mysqli_connect_error());
    	}
	$query="Create database publications";
	$result=mysqli_query($conn,$query);
	if($result){
		$query="use publications";
		$result=mysqli_query($conn,$query);
		$query = "Create table authors(author varchar(120) DEFAULT 'NOT NULL',publisher varchar(30))";				
		$result=mysqli_query($conn,$query); 
		$query = "Create table titles(title varchar(120) DEFAULT 'NOT NULL',author varchar(120),year smallint(6))";				
		$result=mysqli_query($conn,$query); 
	}

?>
</head>
<body>
    <form action="supp1.php" method="post"> 
    	Display all Authors : <input type="submit" name = "ALL" value="click!" > <br><br>
    	Add a new author : <br>
    	<input type="text" name="a" placeholder="enter author"><br>
    	<input type="text" name="b" placeholder="enter publisher"><br>
    	<input type="submit" name = "ADD_AUTHOR" value="Add author" >
    	<br><br>
    	Add a new title : <br>
    	<input type="text" name="c" placeholder="enter title"><br>
    	<input type="text" name="d" placeholder="enter author"><br>
    	<input type="text" name="e" pattern="[0-9.]+" placeholder="enter year"><br>
    	<input type="submit" name = "ADD_TITLE" value="Add title" ><br><br>
    	Delete a author : <br>
    	<input type="text" name="f" placeholder="enter author"><br>
    	<input type="submit" name = "DELETE_AUTHOR" value="Delete a author" ><br><br>
    	Delete a title : <br>
    	<input type="text" name="g" placeholder="enter title"><br>
    	<input type="submit" name = "DELETE_TITLE" value="Delete a title" ><br><br>
    	Update year : <br>
    	<input type="text" name="h" placeholder="enter title"><br>
    	<input type="text" name="i" pattern="[0-9.]+" placeholder="enter new year"><br>
    	<input type="submit" name = "UPDATE" value="update!" ><br><br>
    	Find book  : <br>
    	<input type="text" name="j" placeholder="enter title"><br>
    	<input type="submit" name = "FIND_BOOK" value="find" ><br><br>
    	Find publisher  : <br>
    	<input type="text" name="k" placeholder="enter title"><br>
    	<input type="submit" name = "FIND_PUB" value="find" ><br><br>
    </form>
</body>
</html>

