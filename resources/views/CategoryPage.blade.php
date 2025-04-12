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

    <!-- Main Content -->
    <main>
        <div class="container-fluid px-0">
            <!-- Mobile Navigation -->
            <div class="d-md-none">
                <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-outline-dark ms-auto me-2" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#filterOffcanvas" aria-controls="filterOffcanvas">
                            <span class="filter-btn">
                                <span>Filters</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </nav>
    
                <!-- Mobile Filters Offcanvas -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="filterOffcanvas"
                    aria-labelledby="filterOffcanvasLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="filterOffcanvasLabel">Filters</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form>
                            <div class="filter-section">
                                <h6 class="category-heading">Color</h6>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="white" id="colorWhiteMobile">
                                    <label class="form-check-label" for="colorWhiteMobile">White</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="beige" id="colorBeigeMobile">
                                    <label class="form-check-label" for="colorBeigeMobile">Beige</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="blue" id="colorBlueMobile">
                                    <label class="form-check-label" for="colorBlueMobile">Blue</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="brown" id="colorBrownMobile">
                                    <label class="form-check-label" for="colorBrownMobile">Brown</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="green" id="colorGreenMobile">
                                    <label class="form-check-label" for="colorGreenMobile">Green</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="purple" id="colorPurpleMobile">
                                    <label class="form-check-label" for="colorPurpleMobile">Purple</label>
                                </div>
                            </div>
                            <div class="filter-section">
                                <h6 class="category-heading">Category</h6>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="all-new"
                                        id="categoryAllNewMobile">
                                    <label class="form-check-label" for="categoryAllNewMobile">All New Arrivals</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="tees" id="categoryTeesMobile">
                                    <label class="form-check-label" for="categoryTeesMobile">Tees</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="crewnecks"
                                        id="categoryCrewnecksMobile">
                                    <label class="form-check-label" for="categoryCrewnecksMobile">Crewnecks</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="sweatshirts"
                                        id="categorySweatshirtsMobile">
                                    <label class="form-check-label" for="categorySweatshirtsMobile">Sweatshirts</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="pants" id="categoryPantsMobile">
                                    <label class="form-check-label" for="categoryPantsMobile">Pants & Shorts</label>
                                </div>
                            </div>
                            <div class="filter-section">
                                <h6 class="category-heading">Sizes</h6>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="xs" id="sizeXSMobile">
                                    <label class="form-check-label" for="sizeXSMobile">XS</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="s" id="sizeSMobile">
                                    <label class="form-check-label" for="sizeSMobile">S</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="m" id="sizeMMobile">
                                    <label class="form-check-label" for="sizeMMobile">M</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="l" id="sizeLMobile">
                                    <label class="form-check-label" for="sizeLMobile">L</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="xl" id="sizeXLMobile">
                                    <label class="form-check-label" for="sizeXLMobile">XL</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="2xl" id="size2XLMobile">
                                    <label class="form-check-label" for="size2XLMobile">2XL</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
            <div class="container py-4">
                <div class="row g-4">
                    <!-- Desktop Sidebar -->
                    <div class="col-md-3 d-none d-md-block">
                        <div class="sidebar">
                            <form>
                                <div class="filter-section">
                                    <h6 class="category-heading">Color</h6>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="white" id="colorWhite">
                                        <label class="form-check-label" for="colorWhite">White</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="beige" id="colorBeige">
                                        <label class="form-check-label" for="colorBeige">Beige</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="blue" id="colorBlue">
                                        <label class="form-check-label" for="colorBlue">Blue</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="brown" id="colorBrown">
                                        <label class="form-check-label" for="colorBrown">Brown</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="green" id="colorGreen">
                                        <label class="form-check-label" for="colorGreen">Green</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="purple" id="colorPurple">
                                        <label class="form-check-label" for="colorPurple">Purple</label>
                                    </div>
                                </div>
                                <div class="filter-section">
                                    <h6 class="category-heading">Category</h6>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="all-new" id="categoryAllNew">
                                        <label class="form-check-label" for="categoryAllNew">All New Arrivals</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="tees" id="categoryTees">
                                        <label class="form-check-label" for="categoryTees">Tees</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="crewnecks"
                                            id="categoryCrewnecks">
                                        <label class="form-check-label" for="categoryCrewnecks">Crewnecks</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="sweatshirts"
                                            id="categorySweatshirts">
                                        <label class="form-check-label" for="categorySweatshirts">Sweatshirts</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="pants" id="categoryPants">
                                        <label class="form-check-label" for="categoryPants">Pants & Shorts</label>
                                    </div>
                                </div>
                                <div class="filter-section">
                                    <h6 class="category-heading">Sizes</h6>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="xs" id="sizeXS">
                                        <label class="form-check-label" for="sizeXS">XS</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="s" id="sizeS">
                                        <label class="form-check-label" for="sizeS">S</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="m" id="sizeM">
                                        <label class="form-check-label" for="sizeM">M</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="l" id="sizeL">
                                        <label class="form-check-label" for="sizeL">L</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="xl" id="sizeXL">
                                        <label class="form-check-label" for="sizeXL">XL</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="2xl" id="size2XL">
                                        <label class="form-check-label" for="size2XL">2XL</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
    
                    <!-- Product Grid -->
                    <div class="col-md-9">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                            @foreach($products as $product)
                                <x-product-card 
                                    :image="$product['image']"
                                    :title="$product['title']"
                                    :description="$product['description']"
                                    :colors="$product['colors']"
                                    :price="$product['price']"
                                />
                            @endforeach
                        </div>

                        <nav aria-label="Product pagination" class="mt-5">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link tex" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link text-dark" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link text-dark" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
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