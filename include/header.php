<?php
    include_once "app/functions.php";
    $obj_function = new stdFunction();

    if (isset($_GET['logout'])){
        $obj_function->logOut();
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>STD EN</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="include/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="include/css/styles.css" rel="stylesheet" />
</head>
<body>