<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT nama, nim, alamat, telepon, email FROM mahasiswa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Document</title>
            </head>
            <body>
                <h2>List data</h2>
                <table border='1'>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>NIM</td>
                        <td>Alamat</td>
                        <td>Telepon</td>
                        <td>Email</td>
                    </tr>";

    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
            <tr>
                <td>".$no."</td>
                <td>".$row['nama']."</td>
                <td>".$row['nim']."</td>
                <td>".$row['alamat']."</td>
                <td>".$row['telepon']."</td>
                <td>".$row['email']."</td>
            </tr>";
        $no++;
    }

    echo "</table>
        </body>
        </html>";
} else {
    echo "No results";
}

mysqli_close($conn);
?>
</body>
</html>