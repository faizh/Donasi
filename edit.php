<?php
use \MongoDB\BSON\ObjectID as MongoId;
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $user = array (
                'nama' => $_POST['name'],
                'email' => $_POST['email'],
                'telepon' => $_POST['phone'],
                'alamat' => $_POST['alamat'],
                'donasi' => $_POST['donasi'],
            );
    
    // checking empty fields
    $errorMessage = '';
    foreach ($user as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . ' field is empty<br />';
        }
    }
            
    if ($errorMessage) {
        // print error message & link to the previous page
        echo '<span style="color:red">'.$errorMessage.'</span>';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";    
    } else {
        //updating the 'users' table/collection
        $db->tdata->updateOne(
                        array('_id' => new MongoId($id)),
                        array('$set' => $user)
                    );
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: view.php");
    }
} // end if $_POST
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = $db->tdata->findOne(array('_id' => new MongoId($id)));


$nama = $result['nama'];
$email = $result['email'];
$telepon = $result['telepon'];
$alamat = $result['alamat'];
$donasi = $result['donasi'];

?>
<html>
<head>    
    <title>Edit Data</title>
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
</head>
 
<body>
    
    <div class="wrap-contact100">
            <form class="contact100-form validate-form" act method="POST" action="edit.php">
                <span class="contact100-form-title">
                    Update
                </span>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Nama</span>
                    <input class="input100" type="text" name="name" value="<?php echo $nama;?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" value="<?php echo $email;?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <span class="label-input100">Telepon</span>
                    <input class="input100" type="text" name="phone" value="<?php echo $telepon;?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <span class="label-input100">Alamat</span>
                    <input class="input100" type="text" name="alamat" value="<?php echo $alamat;?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <span class="label-input100">Donasi</span>
                    <input class="input100" type="text" name="donasi" value="<?php echo $donasi?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                        <input class="contact100-form-btn" type="submit" name="update" value="Update"></input>
                    </div>
                </div>
            </form>
        </div>
    </div>




</body>
</html>