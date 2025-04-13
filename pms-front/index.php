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
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder"><?php $_SESSION["Pname"] = 'Fancy Product';
                                                    echo $_SESSION["Pname"] ?></h5>
                            <!-- Product price-->
                            <?php $_SESSION['Price'] = '$40.00 - $80.00 ';
                            echo $_SESSION['Price']; ?>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>

                    <!-- Product image -->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details -->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">Special Item</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">

                            </div>
                            <span class="text-muted text-decoration-line-through">$20.00</span>
                            $18.00
                        </div>
                    </div>
                    <!-- Product actions -->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="handlers/make_order.php" method="POST">
                            <input type="hidden" name="Pname" value="Special Item">
                            <input type="hidden" name="Price" value="18">
                            <button type="submit" class="btn btn-outline-dark mt-auto">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>

                    <!-- Product image -->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details -->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">Sale Item</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">

                            </div>
                            <span class="text-muted text-decoration-line-through">$50.00</span>
                            $25.00
                        </div>
                    </div>
                    <!-- Product actions -->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="handlers/make_order.php" method="POST">
                            <input type="hidden" name="Pname" value="Sale Item">
                            <input type="hidden" name="Price" value="25">
                            <button type="submit" class="btn btn-outline-dark mt-auto">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image -->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details -->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">populer Item</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                            </div>
                            $40.00
                        </div>
                    </div>
                    <!-- Product actions -->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="handlers/make_order.php" method="POST">
                            <input type="hidden" name="Pname" value="populer Item">
                            <input type="hidden" name="Price" value="40">
                            <button type="submit" class="btn btn-outline-dark mt-auto">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>

                    <!-- Product image -->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details -->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">Sale Item</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">

                            </div>
                            <span class="text-muted text-decoration-line-through">$50.00</span>
                            $25.00
                        </div>
                    </div>
                    <!-- Product actions -->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="handlers/make_order.php" method="POST">
                            <input type="hidden" name="Pname" value="Sale Item">
                            <input type="hidden" name="Price" value="25">
                            <button type="submit" class="btn btn-outline-dark mt-auto">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image -->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details -->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">fancy product</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">

                            </div>
                            $120.00 - $280.00
                        </div>
                    </div>
                    <!-- Product actions -->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="handlers/make_order.php" method="POST">
                            <input type="hidden" name="Pname" value="fancy product">
                            <input type="hidden" name="Price" value="120">
                            <button type="submit" class="btn btn-outline-dark mt-auto">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>

                    <!-- Product image -->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details -->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">Special Item</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                            </div>
                            <span class="text-muted text-decoration-line-through">$20.00</span>
                            $18.00
                        </div>
                    </div>
                    <!-- Product actions -->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="handlers/make_order.php" method="POST">
                            <input type="hidden" name="Pname" value="Special Item">
                            <input type="hidden" name="Price" value="18">
                            <button type="submit" class="btn btn-outline-dark mt-auto">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image -->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details -->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">populer Item</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                            </div>
                            $40.00
                        </div>
                    </div>
                    <!-- Product actions -->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="handlers/make_order.php" method="POST">
                            <input type="hidden" name="Pname" value="populer Item">
                            <input type="hidden" name="Price" value="40">
                            <button type="submit" class="btn btn-outline-dark mt-auto">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image -->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details -->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">populer Item</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                            </div>
                            $40.00
                        </div>
                    </div>
                    <!-- Product actions -->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="handlers/make_order.php" method="POST">
                            <input type="hidden" name="Pname" value="populer Item">
                            <input type="hidden" name="Price" value="40">
                            <button type="submit" class="btn btn-outline-dark mt-auto">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image -->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details -->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">populer Item</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                            </div>
                            $40.00
                        </div>
                    </div>
                    <!-- Product actions -->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="handlers/make_order.php" method="POST">
                            <input type="hidden" name="Pname" value="populer Item">
                            <input type="hidden" name="Price" value="40">
                            <button type="submit" class="btn btn-outline-dark mt-auto">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image -->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details -->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">populer Item</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                            </div>
                            $40.00
                        </div>
                    </div>
                    <!-- Product actions -->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="handlers/make_order.php" method="POST">
                            <input type="hidden" name="Pname" value="populer Item">
                            <input type="hidden" name="Price" value="40">
                            <button type="submit" class="btn btn-outline-dark mt-auto">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image -->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details -->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">populer Item</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                            </div>
                            $40.00
                        </div>
                    </div>
                    <!-- Product actions -->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <form action="handlers/make_order.php" method="POST">
                            <input type="hidden" name="Pname" value="populer Item">
                            <input type="hidden" name="Price" value="40">
                            <button type="submit" class="btn btn-outline-dark mt-auto">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once('inc/footer.php'); ?>