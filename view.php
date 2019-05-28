<!DOCTYPE html>
<html>
<head>
<?php include("config.php");?>
<title>Rumah Donasi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <nav>
        <ul>
            <li><a href="input.php">Input</a></li>
            <li><a href="view.php">View</a></li>
            <li><a href="pedit.php">Edit</a></li>
            <li><a href="pdelete.php">Delete</a></li>
            <a href="index.php"><img src="images/icons/favicon.ico"></a>
        </ul>   
    </nav>
    <?php $no=1;  ?>
    <table class="table1">
    <tr bgcolor='#CCCCCC'>
        <td>No</td>
        <td>Nama</td>
        <td>Email</td>
        <td>Telepon</td>
        <td>Alamat</td>
        <td>Donasi</td>
    </tr>
    <?php     
    foreach ($result as $res) {
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$res['nama']."</td>";
        echo "<td>".$res['email']."</td>";    
        echo "<td>".$res['telepon']."</td>";  
        echo "<td>".$res['alamat']."</td>";
        echo "<td>Rp ".$res['donasi']."</td>";
    }
    ?>
    </table>
</body>
</html>