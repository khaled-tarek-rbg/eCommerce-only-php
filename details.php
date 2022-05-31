<?php $page_title = "details" ?>
<?php
include("./includes/header.php");
?>
<?php
include("./includes/navbar.php");
?>


<?php

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    if (!isset($products[$product_id])) {
        header('Location:index.php');
    } else {
        $product = $products[$product_id];
    }
}

?>


<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="images/<?= $product['image'] ?>" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1"><?= $product['title'] ?></div>
                <h1 class="display-5 fw-bolder">Shop item template</h1>
                <div class="fs-5 mb-5">
                    <span class="text-decoration-line-through"></span>
                    <span><?= $product['price'] ?></span>
                </div>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                    <a href="cart.php?id=<?php echo $product_id ?>" class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include("./includes/footer.php");
?>