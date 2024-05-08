<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arthamatic</title>
</head>
<body>
    <h1>Addition using php</h1>
    <?php 
    $a=20;
    $b=30;
    echo "The sum of {$a} and {$b} is ".($a+$b);?>
    
    <br/><br/>
    <h2>Subtraction</h2>
    <?php  
        $c=$a-$b;
        echo "{$a} - {$b} = {$c}";
    ?>
    <h3>Multiplication</h3>
    <?php 
        $d=$a*$b;
        echo "{$a} x {$b} = {$d}";
    ?><br/>
    <h4>Division</h4>
    <?php 
        $e=$a / $b;
        echo "{$a} / {$b} = {$e}";
    ?><br><br>
    <?php
          $f=$a % $b;
          echo "{$a} % {$b}: {$f}"
         ?>
    
    
</body>
    
</body>
</html>