<?php include("./includes/data.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>eCommerce - cart</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style2.css" rel="stylesheet" />

</head>

<?php include("./includes/navbar.php") ?>

<body>


    <div class="smaller-container cart-items">

        <table>
            <tr>
                <th>Products</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <?php
            if (isset($_GET['id'])) {
                $cart_item = $_GET['id'];
                $item = $products[$cart_item];
            }
            ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/<?= $item['image'] ?>" alt="">
                        <div>
                            <p><?= $item['title'] ?></p>
                            <small><?= $item['price'] ?></small>
                            <br>
                            <a href="#">Remove</a>
                        </div>
                    </div>
                </td>
                <td> <input type="number" value="1"> </td>
                <td> $50.00 </td>
            </tr>

        </table>

        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <?php foreach (array_slice($products, 0, 4, True)  as $key => $product) { ?>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="images/<?= $product['image'] ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $product['title'] ?></h5>
                                        <!-- Product price-->
                                        <?php echo $product['price'] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="cart.php?id=<?= $key ?>">Add to card</a></div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>


                </div>
            </div>
        </section>

    </div>



    <?php
    include("./includes/footer.php");
    ?>