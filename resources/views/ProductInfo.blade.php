<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dressify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <!-- Header -->
    @include('partials/header')

    <!-- Main Body -->
    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="visually-hidden">Images</h2>
                    <div class="row g-2">
                        <div class="col-12">
                            <img src="images/wtech_obr/blueGant2.avif" class="img-fluid rounded" alt="Model with blue gant tee">
                        </div>
                        <div class="col-6">
                            <img src="images/wtech_obr/blueGant3.avif" class="img-fluid rounded" alt="Model with blue gant tee">
                        </div>
                        <div class="col-6">
                            <img src="images/wtech_obr/blueGant5.avif" class="img-fluid rounded" alt="Model with blue gant tee">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex justify-content-between mt-3">
                        <h1 class="h3">Basic Tee</h1>
                    </div>
                    <p class="h3">$35</p>
    
                    <div class="mt-3">
                        <h2 class="visually-hidden">Reviews</h2>
                        <div class="d-flex align-items-center">
                            <p class="text-muted mb-0">3.9</p>
                            <div class="ms-2">
                                <span class="text-warning">&#9733;&#9733;&#9733;&#9733;</span>
                                <span class="text-secondary">&#9733;</span>
                            </div>
                            <div class="ms-3">·</div>
                            <div class="ms-3">
                                <a href="#" class="text-decoration-none text-primary">See all 512 reviews</a>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3">A comfortable and stylish tee perfect for everyday wear. Made from high-quality cotton
                        for a soft and breathable feel.</p>
                    <div class="mt-3">
                        <h6>Product Details</h6>
                        <ul>
                            <li>Material: 100% Cotton</li>
                            <li>Machine Washable</li>
                            <li>Unisex Fit</li>
                        </ul>
                    </div>
                    <div class="mt-3">
                        <h6>Policies</h6>
                        <ul>
                            <li>Free Shipping on orders over $50</li>
                            <li>30-day return policy</li>
                            <li>Secure payment options</li>
                        </ul>
                    </div>
    
                    <form class="mt-3">
                        <div class="mb-3">
                            <h6>Color</h6>
                            <div class="d-flex gap-2 color-picker">
                                <input type="radio" class="btn-check" name="color-choice" id="color-black" checked>
                                <label class="bg-dark" for="color-black"></label>
                                <input type="radio" class="btn-check" name="color-choice" id="color-grey">
                                <label class="bg-secondary" for="color-grey"></label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h6>Size</h6>
                            <div class="d-flex gap-2">
                                <input type="radio" class="btn-check" name="size-choice" id="size-s" checked>
                                <label class="btn btn-outline-dark" for="size-s">S</label>
                                <input type="radio" class="btn-check" name="size-choice" id="size-m">
                                <label class="btn btn-outline-dark" for="size-m">M</label>
                                <input type="radio" class="btn-check" name="size-choice" id="size-l">
                                <label class="btn btn-outline-dark" for="size-l">L</label>
                                <input type="radio" class="btn-check" name="size-choice" id="size-xl" disabled>
                                <label class="btn btn-outline-dark disabled" for="size-xl">XL</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Add to cart</button>
                    </form>
    
                    <div class="mt-3">
                        <h6>Customer Reviews</h6>
                        <div class="border p-3 rounded">
                            <p><strong>Jane D.</strong> - <span
                                    class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>
                            <p>"Great quality! The fabric feels amazing and fits well."</p>
                        </div>
                        <div class="border p-3 rounded mt-2">
                            <p><strong>Mark T.</strong> - <span
                                    class="text-warning">&#9733;&#9733;&#9733;&#9734;&#9734;</span></p>
                            <p>"Nice shirt, but it shrank a little after washing."</p>
                        </div>
                        <div class="text-center mt-3">
                            <button class="btn btn-outline-primary">Write a Review</button>
                        </div>
    
                    </div>
                </div>
    
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    @include('partials/footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>