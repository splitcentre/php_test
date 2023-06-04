<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "hello world"?>
    <?php
    $list= array
    (
        array("name"=>"john","age"=>20),
        array("name"=>"joko", "age"=>24),
        array("name"=>"mahmad","age"=>15)
    );
    foreach ($list as $l) {
        $name=$l["name"];
        $age=$l["age"];

        if ($age >=20){
            echo "$name.<br>";
        }else {
            echo "NO DATA";
        }
    }
    ?>
</body>
</html>