<?php 
    ob_start(); // store markup in a buffer so we can replace things like 'title' dynamically 
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title><!--TITLE--> | ST2D 2017</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Bitter:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- UCF Header
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="http://universityheader.ucf.edu/bar/js/university-header.js"></script>

</head>
<body class="">
<div class="container">

<header>
    <div class="row">
        <img class="column twelve" src="images/title.jpg">
    </div>

    <?php
    // Include nav
    require_once('includes/nav.php');
    ?>
</header>