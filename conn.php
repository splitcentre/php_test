<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname='test';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql="select nama,nim,alamat,telepon,email FROM mahasiswa";
    $result= mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
            echo "NIM:".$row["nim"]."-Name:".$row["nama"]."-alamat: ".$row["alamat"]. "-telepon:".$row["telepon"]. " ".$row["email"]. "<br>";
        }
    }
    else {
        echo "o result";
    }
    mysqli_close($conn);
    ?>
    
</body>
</html>