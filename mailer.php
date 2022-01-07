<?php 

	$post = $_POST;

	// var_dump($post);
 ?>	

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Liens</title>
        <link rel="stylesheet" href="stylee.css"/>
    </head>

    <body> 


<?php
	echo "<h1>".$post["fname"]."</h1><h2>".$post["lname"]."</h2><h3>".$post["email"]."</h3><p>".$post["message"]."<p>";
?>

</body>
</html>

 
<?php


	// $get = $_GET;
	// var_dump($get);
	// echo $get["fname"];
	// echo("<br>");
	// echo $get["lname"];
	// echo("<br>");
	// echo $get["email"];
	// echo("<br>");
	// echo $get["message"];
	// echo("<br>");
?>