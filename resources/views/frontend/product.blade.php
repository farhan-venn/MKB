<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MKB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-dark py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div>
                    <a class="text-white text-decoration-none" href="">Selamat datang di marketplace konveksi baju</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                    <i class="bi bi-facebook"></i>
                    </a>
                    <a class="text-white px-2" href="">
                    <i class="bi bi-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                    <i class="bi bi-linkedin"></i>
                    </a>
                    <a class="text-white px-2" href="">
                    <i class="bi bi-instagram"></i>
                    </a>
                    <a class="text-white ps-2" href="">
                    <i class="bi bi-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="{{ route('home')}}" class="text-decoration-none">
                    <h1 class="m-0 display-5 fw-semi-bold text-dark"><strong>MKB</strong></h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-start">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <button class="btn bg-transparent text-dark" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-end">
                <a href="" class="btn border">
                    <i class="bi bi-heart text-dark"></i>
                </a>
                <a href="" class="btn border">
                    <i class="bi bi-cart text-dark"></i>
                </a>
                <a href="" class="btn border">
                    <i class="bi bi-shop text-dark"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-white navbar-white">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold text-dark"><strong>MKB</strong></h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav me-auto">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="shop.html" class="nav-item nav-link">produk</a>
                            <a href="detail.html" class="nav-item nav-link">Shop Detail</a>
                            <a href="contact.html" class="nav-item nav-link">Blogs</a>
                        </div>
                        <div class="navbar-nav ms-auto">
                            <a href="" class="nav-item nav-link">Login</a>
                            <a href="" class="nav-item nav-link">Register</a>
                        </div>
                    </div>
                </nav>            
            </div>
        </div>
    </div>
    <!-- Navbar End -->

 
    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by Price</h5>
                    <form>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" checked id="price-all">
                            <label class="form-check-label" for="price-all">All Price</label>
                            <span class="badge border font-weight-normal text-dark">1000</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" id="price-1">
                            <label class="form-check-label" for="price-1">Rp.0 - Rp.20.000</label>
                            <span class="badge border font-weight-normal text-dark">150</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" id="price-2">
                            <label class="form-check-label" for="price-2">Rp.25.000 - Rp.50.000</label>
                            <span class="badge border font-weight-normal text-dark">295</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" id="price-3">
                            <label class="form-check-label" for="price-3">Rp.55.000 - Rp.70.000</label>
                            <span class="badge border font-weight-normal text-dark">246</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" id="price-4">
                            <label class="form-check-label" for="price-4">Rp.75.000 - Rp.100.000</label>
                            <span class="badge border font-weight-normal text-dark">145</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="form-check-input" id="price-5">
                            <label class="form-check-label" for="price-5">Rp.105.000- Rp.1.000.000</label>
                            <span class="badge border font-weight-normal text-dark">168</span>
                        </div>
                    </form>
                </div>
                <!-- Price End -->
                
                <!-- Kategori Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by category</h5>
                    <form>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" checked id="category-all">
                            <label class="form-check-label" for="category-all">All category</label>
                            <span class="badge border font-weight-normal text-dark">1000</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" id="category-1>
                            <label class="form-check-label" for="category-1">Kaos</label>
                            <span class="badge border font-weight-normal text-dark">150</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" id="category-2">
                            <label class="form-check-label" for="category-2">Jaket</label>
                            <span class="badge border font-weight-normal text-dark">295</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" id="category-3">
                            <label class="form-check-label" for="category-3">Sweater</label>
                            <span class="badge border font-weight-normal text-dark">246</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" id="category-4">
                            <label class="form-check-label" for="category-4">Kemeja</label>
                            <span class="badge border font-weight-normal text-dark">145</span>
                        </div>
                    </form>
                </div>
                <!-- Color End -->

                <!-- Size Start -->
                <div class="mb-5">
                    <h5 class="font-weight-semi-bold mb-4">Filter by size</h5>
                    <form>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" checked id="size-all">
                            <label class="form-check-label" for="size-all">All Size</label>
                            <span class="badge border font-weight-normal text-dark">1000</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" id="size-1">
                            <label class="form-check-label" for="size-1">XS</label>
                            <span class="badge border font-weight-normal text-dark">150</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" id="size-2">
                            <label class="form-check-label" for="size-2">S</label>
                            <span class="badge border font-weight-normal text-dark">295</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" id="size-3">
                            <label class="form-check-label" for="size-3">M</label>
                            <span class="badge border font-weight-normal text-dark">246</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="form-check-input" id="size-4">
                            <label class="form-check-label" for="size-4">L</label>
                            <span class="badge border font-weight-normal text-dark">145</span>
                        </div>
                        <div class="form-check d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="form-check-input" id="size-5">
                            <label class="form-check-label" for="size-5">XL</label>
                            <span class="badge border font-weight-normal text-dark">168</span>
                        </div>
                    </form>
                </div>
                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search by name">
                                    <button class="btn btn-outline-dark" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                            <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort by
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="triggerId">
                                    <li><a class="dropdown-item" href="#">Latest</a></li>
                                    <li><a class="dropdown-item" href="#">Popularity</a></li>
                                    <li><a class="dropdown-item" href="#">Best Rating</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Example product item start -->
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid product-img-custom" src="{{ asset('images/1.jpg') }}" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Kaos Dimas Majantara</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>Rp.70.000</h6>
                                    <h6 class="text-muted ml-2"><del>Rp.90.000</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="bi bi-eye text-dark mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="bi bi-cart text-dark mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- Example product item end -->

                    <!-- Additional product items start -->
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid product-img-custom" src="{{ asset('images/1.jpg') }}" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Kaos Dimas Majantara</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>Rp.70.000</h6>
                                    <h6 class="text-muted ml-2"><del>Rp.90.000</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="bi bi-eye text-dark mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="bi bi-cart text-dark mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid product-img-custom" src="{{ asset('images/1.jpg') }}" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Kaos Dan Bonus Topi</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>Rp.80.000</h6>
                                    <h6 class="text-muted ml-2"><del>Rp.100.000</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="bi bi-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="bi bi-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid product-img-custom" src="{{ asset('images/1.jpg') }}" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>$123.00</h6>
                                    <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="bi bi-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="bi bi-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid product-img-custom" src="{{ asset('images/1.jpg') }}" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>$123.00</h6>
                                    <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="bi bi-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="bi bi-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid product-img-custom" src="{{ asset('images/1.jpg') }}" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>$123.00</h6>
                                    <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="bi bi-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="bi bi-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- Additional product items end -->

                    <div class="col-12 pb-1">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-end mb-3">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->






    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold text-white"><strong>MKB</strong></h1>
                </a>
                <p class="text-white">Terima kasih sudah Mengunjungi website Marketplace konveksi baju</p>
                <p class="text-white mb-2"><i class="bi bi-geo-alt text-white mr-3"></i>Indramayu , Jawa Barat , Indonesia</p>
                <p class="text-white mb-2"><i class="bi bi-envelope text-white mr-3"></i>MKB@example.com</p>
                <p class="text-white mb-0"><i class="bi bi-telephone text-white mr-3"></i>+6287 8765 6252</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2 text-decoration-none" href="index.html"><i class="bi bi-chevron-right mr-2"></i>Home</a>
                            <a class="text-white mb-2 text-decoration-none" href="shop.html"><i class="bi bi-chevron-right mr-2"></i>Our Shop</a>
                            <a class="text-white mb-2 text-decoration-none" href="detail.html"><i class="bi bi-chevron-right mr-2"></i>Shop Detail</a>
                            <a class="text-white mb-2 text-decoration-none" href="cart.html"><i class="bi bi-chevron-right mr-2"></i>Shopping Cart</a>
                            <a class="text-white mb-2 text-decoration-none" href="checkout.html"><i class="bi bi-chevron-right mr-2"></i>Checkout</a>
                            <a class="text-white text-decoration-none" href="contact.html"><i class="bi bi-chevron-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2 text-decoration-none" href="index.html"><i class="bi bi-chevron-right mr-2"></i>Home</a>
                            <a class="text-white mb-2 text-decoration-none" href="shop.html"><i class="bi bi-chevron-right mr-2"></i>Our Shop</a>
                            <a class="text-white mb-2 text-decoration-none" href="detail.html"><i class="bi bi-chevron-right mr-2"></i>Shop Detail</a>
                            <a class="text-white mb-2 text-decoration-none" href="cart.html"><i class="bi bi-chevron-right mr-2"></i>Shopping Cart</a>
                            <a class="text-white mb-2 text-decoration-none" href="checkout.html"><i class="bi bi-chevron-right mr-2"></i>Checkout</a>
                            <a class="text-white text-decoration-none" href="contact.html"><i class="bi bi-chevron-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
