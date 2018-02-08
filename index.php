<!DOCTYPE html>
<?php 
 $title = "sanctuary"; 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title><?php echo $title ?></title>
</head>
<body>

<div class="content">



    <form method="GET" action="results.php">
        <label for="apor">APOR</label>
        <input type="text" name="apor"/><br>
        <label for="giraffer">GIRAFFER</label>
        <input type="text" name="giraffer"/><br>
        <label for="tigrar">TIGRAR</label>
        <input type="text" name="tigrar"/><br>
        <button type="submit">Skicka</button>
    </form>

   <!-- <div class="klasser">
   
</div>-->

</div>
    
</body>
</html>