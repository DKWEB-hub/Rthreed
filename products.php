<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Webpage</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles_new.css">
    <link rel="stylesheet" href="product_styles.css">
    <style>
        
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <!-- Responsive Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #002a33;">
            <div class="container-fluid">
                <div class="row w-100 align-items-center">
                    <!-- Left side: Logo/Image -->
                    <div class="col-2 d-flex align-items-center">
                        <img src="images/logo.jpeg" alt="Logo" style="height: 100px; width: auto;">
                    </div>
                    
                    <!-- Centered Navbar Menu -->
                    <div class="col-8 d-flex justify-content-center">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav w-100">
                                <li class="nav-item flex-fill">
                                    <a class="nav-link" href="#" style="font-size: 1.3rem !important;">Home</a>
                                </li>
                                <li class="nav-item flex-fill">
                                    <a class="nav-link" href="#" style="font-size: 1.3rem !important;">Living</a>
                                </li>
                                <li class="nav-item flex-fill">
                                    <a class="nav-link" href="#" style="font-size: 1.3rem !important;">Renewable Energy</a>
                                </li>
                                <li class="nav-item flex-fill">
                                    <a class="nav-link" href="#" style="font-size: 1.3rem !important;">Waste to Wealth</a>
                                </li>
                                <li class="nav-item flex-fill">
                                    <a class="nav-link" href="#" style="font-size: 1.3rem !important;">Consultancy</a>
                                </li>
                                <li class="nav-item flex-fill">
                                    <a class="nav-link" href="contact_us.php" style="font-size: 1.3rem !important;">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right side (Optional for future use) -->
                    <div class="col-2"></div>
                </div>
            </div>
        </nav>
        
        <!-- Item Grid -->
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/products/chair1.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/products/chair2.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/products/chair3.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel1" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carousel1" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Item 1</h5>
                        <p class="card-text">Description of Item 1.</p>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/products/furni1.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/products/furni2.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/products/furni3.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel2" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carousel2" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Item 2</h5>
                        <p class="card-text">Description of Item 2.</p>
                    </div>
                </div>
            </div>



<!-- Item Grid -->
<div class="row">
            <!-- Product 1 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div id="carousel3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/products/tray1.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/products/tray2.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/products/tray3.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel3" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carousel3" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Item 1</h5>
                        <p class="card-text">Description of Item 1.</p>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div id="carousel4" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/image1.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/image2.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/image3.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel4" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carousel4" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Item 2</h5>
                        <p class="card-text">Description of Item 2.</p>
                    </div>
                </div>
            </div>






            <!-- Item Grid -->
<div class="row">
            <!-- Product 1 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div id="carousel5" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/products/sofa.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/products/sofa2.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/products/sofa3.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel5" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carousel5" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Item 1</h5>
                        <p class="card-text">Description of Item 1.</p>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div id="carousel6" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/products/utility1.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/products/utility2.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/products/utility3.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel6" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carousel6" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Item 2</h5>
                        <p class="card-text">Description of Item 2.</p>
                    </div>
                </div>
            </div>



















        </div>

        <!-- Modal for Image Expansion -->
        <div class="modal fade" id="lightboxModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="expandedCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="expandedCarouselInner"></div>
                            <a class="carousel-control-prev" href="#expandedCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next" href="#expandedCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                // When an image is clicked
                $('img').on('click', function() {
                    const images = $(this).closest('.carousel').find('img').map(function() {
                        return $(this).attr('src');
                    }).get();

                    const expandedCarouselInner = $('#expandedCarouselInner');
                    expandedCarouselInner.empty();

                    images.forEach((imgSrc, index) => {
                        const carouselItem = `
                            <div class="carousel-item ${index === 0 ? 'active' : ''}">
                                <img src="${imgSrc}" class="d-block w-100" alt="Expanded Image">
                            </div>`;
                        expandedCarouselInner.append(carouselItem);
                    });

                    $('#lightboxModal').modal('show');
                });
            });
        </script>
    </div>
</div>
</body>
</html>
