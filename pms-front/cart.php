<?php
require_once('inc/header.php'); ?>

<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Shop in style</h1>
            <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php
    $cartItems = getProduct();
    foreach ($cartItems as $item):
    ?>
    <tr>
        <td><?= $item['id'] ?></td>
        <td><?= htmlspecialchars($item['Product']) ?></td>
        <td>$<?= number_format($item['Price'], 2) ?></td>
        <td>
            <form action="handlers/update_quantity.php" method="POST">
                <input type="number" name="quantity" value="<?= $item['Quantity'] ?>" min="1">
                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                <button type="submit" class="btn btn-sm btn-info">Update</button>
            </form>
        </td>
        <td>$<?= number_format($item['Total'], 2) ?></td>
        <td>
            <form action="handlers/remove_item.php" method="POST">
                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php require_once('inc/footer.php'); ?>