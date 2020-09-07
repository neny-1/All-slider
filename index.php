<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All slider</title>
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/logo.css">
    <link rel="stylesheet" href="css/title.css">
    <link rel="stylesheet" href="css/details.css">

<!-- style for index page -->
<style>
    body{
        background-color: #6ed9ee;
    }
    h4{
        text-align: center;
        font-weight: bold;
        font-size: 20px;
        font-family: monospace;
        font-style: italic;
    }
</style>
</head>

<body>
        
        <!-- product slider -->
        <h4>prouct slider</h4>
        <?php include "product.html"?>
        <!-- logo slider -->
        <h4>logo slider</h4>
        <?php include "logo.html"?>
        <!-- title slider -->
        <h4>title slider</h4>
        <?php include "title.html"?>
        <!-- details slider -->
        <h4>details slider</h4>
        <?php include 'details.html' ?>
    </div>
    

<script src="js/product.js"></script>
<script src="js/logo.js"></script>
<script src="js/title.js"></script>
<script src="js/details.js"></script>
</body>
</html>