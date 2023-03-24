<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location: ../login/index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- css file -->
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
    <div class="main-group__container">
        <!-- sidebar -->
        <?php require 'sidebar.php';?>

        <!-- loading animation. -->
        <section class="content-container" id="content-container">
            <!-- controller -->
            <?php require 'controller.php';?>
        </section>
    </div>


    <!-- Js Files -->
</body>

</html>