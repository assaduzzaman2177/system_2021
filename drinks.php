<?php


$drinks=['coca_cola','orange','lemon','coffee','vodka'];


$count=count($drinks);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<li><?=$drinks[0]?></li>
<li><?=$drinks[1]?></li>
<li><?=$drinks[2]?></li>
<li><?=$drinks[3]?></li>
<li><?=$drinks[4]?></li>

    <h2>COUNT</h2>
    <p><?=$count?>pis</p>
</body>
</html>

