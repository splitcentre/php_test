<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$list = array("apple" => "edible", "metal pipe" => "inedible", "cake" => "edible");

foreach ($list as $item => $value) {
    if ($value === "edible") {
        echo $item . " is edible.";
    } else {
        echo $item . " is not edible.";
    }
    echo "<br>"; 
}

?>
</body>
</html>
