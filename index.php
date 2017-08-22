<!DOCTYPE html>
<html>
<body>

<?php

	function familyName($fname) {
	    $rand = rand(6, 15);  // here we generating random no from 6 to 15
	    echo $fname . $rand; // here we printing name along with random no.
	}
    
   familyName("Hardcoded");  // here we calling function with name parameter for print name localhost/index.php this is hardcoded

	familyName($_REQUEST["name"]);  // here we calling function with dynamic route variable we  for print name localhost/index.php/?name=name ////
?>

</body>
</html>


