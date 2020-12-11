<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $n = 4;
    $s = 0;

   /* for ($i = 1; $i <= $n; $i++) {         //оператор цикла с параметром 
        $s = $s + $i;
    }
    echo $s;*/

   /* $i = 1;
    while ($i <= $n) {
        $s = $s + $i;                        //оператор цикла с предусловием    
        $i=$i+1;
    }
    echo $s;*/
   
    $i = 1;
    do { $s = $s + $i;                        //оператор цикла с постусловием  
        $i=$i+1;}
    while ($i <= $n); 
    echo $s;

    ?>

</body>

</html>