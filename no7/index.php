<!-- ===================||=|Config|=||=================== -->

<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'arkademy_test';
    
    $connect = mysqli_connect($hostname, $username, $password, $database);
    if($connect){
        echo "<script>alert('Anda telah terhubung ke database')</script>";
    } else{
        echo mysqli_error($connect);
    }
?>

<!-- ===================||=|Config|=||=================== -->

<!-- ===================||=|Query|=||=================== -->

<?php
    $myQuery = "SELECT product_categories.id, product_categories.name, COUNT(product_categories.id) as jumlah_product FROM products JOIN product_categories ON products.category_id = product_categories.id GROUP BY product_categories.id";
    $getDataTable = mysqli_query($connect, $myQuery);
    if(mysqli_num_rows($getDataTable) > 0){
        echo "<script>alert('Data telah termuat')</script>";
    } else{
        echo "<script>alert('Data belum termuat tolong periksa konfigurasi anda pada section Config dalam file index.php')</script>";        
    }
?>

<!-- ===================||=|Query|=||=================== -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>No 7</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>Jumlah_product</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
    while($row = mysqli_fetch_assoc($getDataTable)) {
?>
                        <tr>
                            <td><?= $row["id"]; ?></td>
                            <td><?= $row["name"]; ?></td>
                            <td><?= $row["jumlah_product"]; ?></td>
                        </tr>
<?php
    }
?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>