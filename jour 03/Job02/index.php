<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J3-job2</title>
</head>
<body>
    <?php
        $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";  
        $string = '';
        $i = 0;

            while(isset($str[$i])){
                echo $str[$i];
                $i += 2;
            }
    ?>
</body>
</html>
