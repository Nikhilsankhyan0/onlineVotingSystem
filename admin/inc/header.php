<?php
session_start();
require_once("config.php");
if($_SESSION['key'] != 'AdminKey')
{
    echo "<script> location.assign('logout.php') </script>";
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Online Voting System</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head><style>
    .container-fluid{
        position:fixed;
    }

</style>
<body>
    
   <div class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="col-1 mt-2 mb-2 ">
                <img src="../assets/images/download.jpeg" width="80px">
            </div>
            <div class="col-11 my-auto mt-1 " >
                <h3>      Online Voting system -  Nikhil Sankhyan<small> <?php /* echo $_SESSION['username']; */ ?>   </small>  </h3>
            </div>
            
        </div>
</body>
</html>
