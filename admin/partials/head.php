<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    header("location:login.php");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="eshbeata">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Sourcing</title>

    <!--Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap-reset.css" rel="stylesheet">
    

    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/style-responsive.css" rel="stylesheet" />
    <link href="./css/font-awesome.css" rel="stylesheet" />

</head>

<body>
    <section id="container" >