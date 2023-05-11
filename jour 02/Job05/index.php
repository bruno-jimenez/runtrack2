<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J2job4</title>
</head>
<body>
    <!-- display prime number 0 to 1000 -->
    <?php
        // check for prime number or not
		function estPremier($i){
			for ($x= 0; $x < $i; $x++){
				if ($i % $x == 0){
					return false;
				}
			}
			return true;
		}

		// display prime number
		for ($x= 2; $x <=1000; $x++){
			if (estPremier($x)){
				echo $x . "<br/>";
			}
		}
    ?>
</body>
</html>