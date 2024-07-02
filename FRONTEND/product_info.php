<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product Name - Amazon</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .product-image {
        max-width: 100%;
        height: auto;
    }
</style>
</head>
<body>

<?php include "components/navbar.php";
require "../BACKEND/MVC/controller.php";
$c = new Controller();
$prodInfo = $c->collectProductData($_GET['name']);?>


<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <img src=<?php echo $prodInfo['image_url'] ?> class="product-image" alt="Product Image" width="500px">
        </div>
        <div class="col-md-6">
            <h1><?php echo $prodInfo['name'] ?></h1>
            <p class="lead">Price: $<?php echo $prodInfo['price'] ?></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar ultricies metus, in pellentesque mauris commodo id.</p>
            <p>Quantity: <input type="number" min="1" value="1"></p>

            <button class="btn btn-warning btn-block">BUY NOW</button>
            <button class="btn btn-outline-warning btn-block">ADD TO CART</button>

        </div>
    </div>
    <hr>
    <h2>Product Description</h2>
    <p><?php echo $prodInfo['description'] ?></p>
    <h2>Product Details</h2>
    <ul>
        <li>Detail 1</li>
        <li>Detail 2</li>
        <li>Detail 3</li>
    </ul>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
