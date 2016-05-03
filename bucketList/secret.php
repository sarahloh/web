<?php
    require("php/config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
?>

<!DOCTYPE html>
<html>
<body>
	<h4>Access granted</h4>
	<h5><a href="logout.php">Log out</a></h5>
</body>
</html>
