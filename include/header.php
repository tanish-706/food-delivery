<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food_Delivery</title>
    <link rel="stylesheet" href="css/bootstrap5.css" type="text/css">
    <link rel="shortcut icon" href="images/food-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


</head>

<body>
    <div class="header_navbar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary header_nav1">
            <div class="container">
                <a class="navbar-brand " href="index.php"><img src="images/food-logo.png" class="img-fluid logo_food lazy"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-nav1 me-auto mb-2 mb-lg-0" id="name">
                        <li class="nav-item px-2">
                            <a class="nav-link nav_link1 " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link nav_link1 " href="about.php">About</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link nav_link1 " href="menu.php">Menu</a>
                        </li>

                        <li class="nav-item px-2">
                            <a class="nav-link nav_link1 " href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link nav_link1 " href="restaurant.php">Restaurant</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link nav_link1 " href="blog.php">Blog</a>
                        </li>


                        <li class="nav-item px-2">
                            <a class="nav-link nav_link1 " href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <div class="pe-4">
                            <a href="#" class="position-relative"><i class="bi bi-cart navbar_icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></i> <span class="badge badge-light badge_product">4</span></a>
                        </div>
                        <div class="pe-4">
                            <!-- <a href="#"><i class="bi bi-person navbar_icon"></i></a> -->
                            <div class="dropdown">
                                <button class=" dropdown_profile" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person navbar_icon"></i>
                                </button>
                                <ul class="dropdown-menu px-4 dropdown_menu">
                                    <li class="bottom_border_div py-4 ">
                                        <div class="d-flex ">
                                            <div>
                                                <img src="images/testimonial1.png" class="img-fluid profile_images">
                                            </div>
                                            <div class="ms-2">
                                                <p class="admin_name">Eden Smith</p>
                                                <p class="admin_add">Indore</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="my-2 hover_li">
                                        <a href="account.php">
                                            <div class="d-flex align-items-center">
                                                <p class="m-0 my_acc_icon"><i class="bi bi-person "></i> </p>
                                                <p class="m-0 my_account ms-3">My Account</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="my-2 hover_li">

                                        <a href="account.php">
                                            <div class="d-flex align-items-center">
                                                <p class="m-0 my_acc_icon"><i class="bi bi-journal-bookmark"></i></p>
                                                <p class="m-0 my_account ms-3">My Order</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="my-2 hover_li">

                                        <a href="account.php">
                                            <div class="d-flex align-items-center">
                                                <p class="m-0 my_acc_icon"><i class="bi bi-suit-heart"></i></p>
                                                <p class="m-0 my_account ms-3">Wishlist</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="my-2 hover_li">
                                        <a href="index.php">

                                            <div class="d-flex align-items-center">
                                                <p class="m-0 my_acc_icon"><i class="bi bi-box-arrow-left"></i></p>
                                                <p class="m-0 my_account ms-3">Log out</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="login.php" class="btn btn_navbar btn_navbar1 rounded-5">Log in</a>
                    </form>
                </div>
            </div>
        </nav>
    </div>


    <!--modal--->
    <div class="offcanvas offcanvas-end modal_head" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="modal-title" id="staticBackdropLabel">Shopping cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="modal-body ">


            <div class="shopping-cart">

                <div class="column-labels">
                    <label class="product-image">Food</label>
                    <label class="product-details">Product</label>
                    <label class="product-price">Price</label>
                    <label class="product-quantity">Quantity</label>
                    <label class="product-removal">Remove</label>
                    <label class="product-line-price">Total</label>
                </div>

                <div class="product">
                    <div class="product-image">
                        <img src="images/menu_img.jpg" class="img-fluid lazy">
                    </div>
                    <div class="product-details">
                        <div class="product-title">Pizza</div>

                    </div>
                    <div class="product-price">12.99</div>
                    <div class="product-quantity">
                        <input type="number" value="2" min="1">
                    </div>
                    <div class="product-removal">
                        <button class="remove-product">
                            Remove
                        </button>
                    </div>
                    <div class="product-line-price">25.98</div>
                </div>

                <div class="product">
                    <div class="product-image">
                        <img src="images/burger1.jpg" class="img-fluid lazy">
                    </div>
                    <div class="product-details">
                        <div class="product-title">Burger</div>

                    </div>
                    <div class="product-price">45.99</div>
                    <div class="product-quantity">
                        <input type="number" value="1" min="1">
                    </div>
                    <div class="product-removal">
                        <button class="remove-product">
                            Remove
                        </button>
                    </div>
                    <div class="product-line-price">45.99</div>
                </div>

                <div class="totals">
                    <div class="totals-item">
                        <label>Subtotal</label>
                        <div class="totals-value" id="cart-subtotal">71.97</div>
                    </div>
                    <div class="totals-item">
                        <label>Tax (5%)</label>
                        <div class="totals-value" id="cart-tax">3.60</div>
                    </div>
                    <div class="totals-item">
                        <label>Shipping</label>
                        <div class="totals-value" id="cart-shipping">15.00</div>
                    </div>
                    <div class="totals-item totals-item-total">
                        <label>Grand Total</label>
                        <div class="totals-value" id="cart-total">90.57</div>
                    </div>
                </div>

                <a href="checkout.php"><button class="checkout">Checkout</button></a>

            </div>

        </div>
    </div>