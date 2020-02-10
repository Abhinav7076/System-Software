<!Doctype=html>
<body>
<?php
    require_once 'login.php';
    

 	function check($chk){
 		if(!$chk) die('<p>error <p>' . mysqli_connect_error());
 	}

    $conn = mysqli_connect($db_hostname, $db_user, $db_password);
 
    if (!$conn) {
        die('<p>Connection failed: <p>' . mysqli_connect_error());
    }
    $cmd = "use publications";
    $result = mysqli_query($conn,$cmd);
	check($result);
    if(isset($_POST["ALL"])==TRUE){
    	$temp =0 ;
        $query="select * from authors";
    	$result=mysqli_query($conn,$query); 
 		$numrows=mysqli_num_rows($result);
 		if($numrows!=0){echo "Authors Table : <br><br>"; 
 		for($j=0;$j<$numrows;++$j){
       		$rows=mysqli_fetch_row($result); 
       		$temp=1;
        	echo "name:". $rows[0]."  ||  ";
        	echo "publisher name:". $rows[1]."<br>";
        }}
         $query="select * from titles";
        $result=mysqli_query($conn,$query); 
        $numrows=mysqli_num_rows($result);
        if($numrows!=0){ echo "<br><br><br>Title Table :<br> <br>\n";
        for($j=0;$j<$numrows;++$j){
            $rows=mysqli_fetch_row($result);
            $temp=1; 
            echo "title : ". $rows[0]."  ||  ";
            echo "Author : ". $rows[1]."   ||  ";
            echo "Year : ".$rows[2]."<br>";
        }}
        if($temp==0) echo "no data stored";
         die ("<script>setTimeout(\"location.href = './main.php';\",15000);</script>");
    } 



    if(isset($_POST["ADD_AUTHOR"])==TRUE){
        $a = $_POST["a"];
        $b = $_POST["b"];
        $query = "insert into authors(author,publisher) values ('$a','$b')";
    	$result=mysqli_query($conn,$query);
        if($result) echo "Successfully added author!";
        else echo "ERROR";
    }

    if(isset($_POST["ADD_TITLE"])==TRUE){
        $c = $_POST["c"];
        $d = $_POST["d"];
        $e = $_POST["e"];
        $query = "insert into titles(title,author,year) values ('$c','$d','$e')";
        $result=mysqli_query($conn,$query);
        if($result) echo "Successfully added title!";
        else echo "ERROR";
    }


    if(isset($_POST["DELETE_AUTHOR"])==TRUE){
        $f = $_POST["f"];
        $query = "delete from authors where author = '$f'";
        $result=mysqli_query($conn,$query);
        if($result) echo "Successfully deleted!";
        else echo "ERROR";
    }

    if(isset($_POST["DELETE_TITLE"])==TRUE){
        $g = $_POST["g"];
        $query = "delete from titles where title = '$g'";
        $result=mysqli_query($conn,$query);
        if($result) echo "Successfully deleted!";
        else echo "ERROR";
    }

    if(isset($_POST["UPDATE"])==TRUE){
        $h = $_POST["h"];
        $i = $_POST["i"];
        $query="select * from titles";
        $result=mysqli_query($conn,$query);
        $numrows=mysqli_num_rows($result);
        for($x=0;$x<$numrows;++$x){
            $rows=mysqli_fetch_row($result);
            $tmp = $rows[0];
            if(strpos(strtolower($tmp),strtolower($h))||$rows[0]==$j){
            	$temp = 1;
            	$query = "update titles set year = '$i' where title = '$tmp'";
            	$result=mysqli_query($conn,$query);
            }
        }
        $query = "update titles set year = '$i' where title = '$h'";
        $result=mysqli_query($conn,$query);
        if($result) echo "Successful!";
        else echo "ERROR";
    }

    if(isset($_POST["FIND_BOOK"])==TRUE){
        $j = $_POST["j"];
        $temp = 0; 
        $query="select * from titles";
        $result=mysqli_query($conn,$query);
        $numrows=mysqli_num_rows($result);
        for($x=0;$x<$numrows;++$x){
            $rows=mysqli_fetch_row($result);
            $tmp = $rows[0];
            if(strpos(strtolower($tmp),strtolower($j))||$rows[0]==$j){
            	$temp = 1;
            	echo "title : ". $rows[0]."  ||  ";
            	echo "Author : ". $rows[1]."  ||  ";
            	echo "Year : ".$rows[2]."<br>";
            }
        }
        if($temp==0){
        	echo "No title exists as $j!";
        	die ("<script>setTimeout(\"location.href = './main.php';\",1000);</script>");
        }
        die ("<script>setTimeout(\"location.href = './main.php';\",5000);</script>");
    }
    if(isset($_POST["FIND_PUB"])==TRUE){
        $k = $_POST["k"];
        // $query="select authors.author,titles.title,titles.year where authors.publisher='$k' from authors inner join titles on authors.author=titles.author";
        $query = " SELECT title,year,author from titles where author in ( SELECT author from authors where publisher = '$k')";
        $result=mysqli_query($conn,$query);
        if(!$result) echo "Could not find the publications";
        else{
        echo "given are the details of publications of the publisher : $k<br><br>";
        }
        $numrows=mysqli_num_rows($result);
        for($j=0;$j<$numrows;++$j){
            $rows=mysqli_fetch_row($result); 
            echo "author : ". $rows[2]."  ||  ";
            echo "title : ". $rows[0]."  ||  ";
            echo "Year : ".$rows[1]."<br>";
        }
        die ("<script>setTimeout(\"location.href = './main.php';\",5000);</script>");
    }
    die ("<script>setTimeout(\"location.href = './main.php';\",1000);</script>");

?>
</body>
</html>

