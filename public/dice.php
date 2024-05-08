<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Roll</title>
</head>
<body>
    <h1>Dice Roll  | PHP</h1>  
    <input value="Roll the Dice" type="button" onclick="window.location.reload()">
   <p>
   <img src="../images/<?php echo rand(1,6); ?>.png"/>
   </p>
<body>
</html>