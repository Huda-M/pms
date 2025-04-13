<?php require_once('inc/header.php'); ?>
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">ADD PRODUCT</h1>
            <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="handlers/add_product.php" method="post" class="form border my-2 p-3" >
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="">product</label>
                            <input type="text" name="product" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">details</label>
                            <textarea name="details" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Send" id="" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require_once('inc/footer.php'); ?>