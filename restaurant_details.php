<?php include('include/header.php'); ?>

<div class="container pt-2 pb-2">
    <div class="row align-items-center">
        <div class="col-lg-8 col-md-6 pt-3">
            <h2 class="all_head_name">Indore Sweets</h2>
        </div>
        <div class="col-lg-2 col-md-3 pt-3">
            <div class="d-flex align-items-center">
                <div class="me-2    ">
                    <p class="b_rating m-0"> 4.1 <span class="b_rat_icon"><i class="bi bi-star-fill"></i></span> </p>
                </div>
                <div>
                    <p class="m-0 blog_ret_p1">1,196</p>
                    <p class="m-0 blog_ret_p2">Dining Reviews</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 pt-3">
            <div class="d-flex align-items-center">
                <div class="me-2    ">
                    <p class="b_rating m-0"> 4.5 <span class="b_rat_icon"><i class="bi bi-star-fill"></i></span> </p>
                </div>
                <div>
                    <p class="m-0 blog_ret_p1">8,765</p>
                    <p class="m-0 blog_ret_p2">Delivery Reviews</p>
                </div>
            </div>
        </div>
    </div>
    <p class="mb-1 food_type_blog">Mithai, North Indian, South Indian, Chinese, Fast Food, Bakery, Beverages </p>
    <p class="res_blog_add mb-2">Mr10, Indore</p>
    <p class="res_blog_open"><span class="open_color">Open now</span> - 10:00am - 10:00pm(Today) <span class=" "><button type="button" class="btn res_blog_open p-0" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="custom-tooltip" data-bs-title="Opening Hours   &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp       Mon-Sun: 10am - 10pm">
                <i class="bi bi-info-circle"></i>
            </button></span> </p>



</div>
<div class="container">

    <div class="col-md-12 border_div">
        <ul class="nav nav-pills py-3" id="pills-tab" role="tablist">
            <li class="nav-item me-3" role="presentation">
                <button class="nav-link active tab_food" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Overview</button>
            </li>
            <li class="nav-item me-3" role="presentation">
                <button class="nav-link tab_food" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Order Online</button>
            </li>
            <li class="nav-item me-3" role="presentation">
                <button class="nav-link tab_food" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Photo </button>
            </li>
            <li class="nav-item me-3" role="presentation">
                <button class="nav-link tab_food" id="pills-menu-tab" data-bs-toggle="pill" data-bs-target="#pills-menu" type="button" role="tab" aria-controls="pills-menu" aria-selected="false">Menu </button>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-md-8 mt-2">
                            <h3 class="my-2 all_head_name"> About this place</h3>
                            <div class="row ">
                                <div class="col-lg-4 col-md-6 my-1">
                                    <div class="d-flex border rounded align-items-center p-1 ">
                                        <div>
                                            <img src="images/hand_wash.png" class="img-fluid overview_img1">
                                        </div>
                                        <div class="ms-1">
                                            <p class="m-0 over_about_p1">RESTAURANT SAFETY MEASURE</p>
                                            <p class="m-0 over_about_p2">Rider Hand Wash</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-1">
                                    <div class="d-flex border rounded align-items-center p-1">
                                        <div>
                                            <img src="images/temp.png" class="img-fluid overview_img1">
                                        </div>
                                        <div class="ms-1">
                                            <p class="m-0 over_about_p1">RESTAURANT SAFETY MEASURE</p>
                                            <p class="m-0 over_about_p2">Daily Temp. Checks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <div class="">
                                    <h4 class="over_h4">Menu</h4>
                                </div>
                                <div class="">
                                    <p class="open_color open_color_ch menuTab">See all menus<span class="arrow_icon_over"><i class="bi bi-caret-right-fill"></i></span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-5 mt-3">
                                    <img src="images/fast-food_menu1.png" class="img-fluid menu_over_img2">
                                    <h6 class="menu1_h6 mt-1">Food Menu</h6>
                                </div>
                                <div class="col-lg-4 col-md-5 mt-3">
                                    <img src="images/fast-food_menu1.png" class="img-fluid menu_over_img2">
                                    <h6 class="menu1_h6 mt-1">Beverages</h6>
                                </div>
                            </div>
                            <div class="my-3">
                                <h4 class="over_h4 mb-0">Cuisines</h4>
                                <div>
                                    <button type="button" class="btn border_btn_blog rounded-5 sweet_ch mt-3">Mithai</button>
                                    <button type="button" class="btn border_btn_blog rounded-5 sweet_ch mt-3">North Indian</button>
                                    <button type="button" class="btn border_btn_blog rounded-5 sweet_ch mt-3">South Indian</button>
                                    <button type="button" class="btn border_btn_blog rounded-5 sweet_ch mt-3">Chinese</button>
                                    <button type="button" class="btn border_btn_blog rounded-5 sweet_ch mt-3">Fast Food</button>
                                    <button type="button" class="btn border_btn_blog rounded-5 sweet_ch mt-3">Bakery</button>
                                    <button type="button" class="btn border_btn_blog rounded-5 sweet_ch mt-3">Beverages</button>
                                </div>
                            </div>
                            <div class="my-4">
                                <h4 class="over_h4">People Say This Place Is Known For</h4>
                                <p class="over_p5">Free Sweet Tastings, Comfortable Chairs, Packed on Weekends, Good Options, Parking, Fast Delivery</p>

                            </div>
                            <div class="my-4">
                                <h4 class="over_h4">Average Cost</h4>
                                <p class="over_p5 m-0">$350 for two people (approx.)</p>
                                <p class="over_p6 m-0">Exclusive of applicable taxes and charges, if any</p>
                                <button type="button" class="btn res_blog_open p-0 tooltip_over" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="custom-tooltip" data-bs-title="The cost for two is computed as follows: 2 desserts + 2 beverages. The actual cost you incur at a restaurant might change depending on your appetite, or with changes in restaurant menu prices.">How do we calculate cost for two?</button>
                                <p class="over_p5 mt-2">Digital payments accepted</p>
                            </div>
                            <div class="my-4">
                                <h4 class="over_h4">More Info</h4>
                                <div class="row">
                                    <div class="col-md-6 my-1">
                                        <p class="more_p m-0"><span class="me-2 more_icon"><i class="bi bi-check-circle"></i></span>Breakfast</p>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <p class="more_p m-0"><span class="me-2 more_icon"><i class="bi bi-check-circle"></i></span>Home Delivery</p>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <p class="more_p m-0"><span class="me-2 more_icon"><i class="bi bi-check-circle"></i></span>Takeaway Available</p>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <p class="more_p m-0"><span class="me-2 more_icon"><i class="bi bi-check-circle"></i></span>Vegetarian Only</p>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <p class="more_p m-0"><span class="me-2 more_icon"><i class="bi bi-check-circle"></i></span>Desserts and Bakes</p>
                                    </div>
                                    <div class="col-md-6 my-1">
                                        <p class="more_p m-0"><span class="me-2 more_icon"><i class="bi bi-check-circle"></i></span>Indoor Seating</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-5">
                                <h4 class="over_h4 mb-3">Similar Restaurants</h4>
                                <div>
                                    <div class="splide__wrapper">
                                        <div class="splide slider_ch" role="group" aria-label="Splide Basic HTML Example">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    <li class="splide__slide">
                                                        <div class="card">
                                                            <img src="images/over1.jpg" class="over_slider_img" />
                                                            <div class="card__content p-1">
                                                                <h3 class="card__title">JMD</h3>
                                                                <div class="row">
                                                                    <div class="col-6 mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-2    ">
                                                                                <p class="b_rating over_rating m-0"> 4.1 <span class="b_rat_icon b_rat_icon1"><i class="bi bi-star-fill"></i></span> </p>
                                                                            </div>
                                                                            <div>

                                                                                <p class="m-0 blog_ret_p2 blog_ret_over">DINING </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-2    ">
                                                                                <p class="b_rating over_rating m-0"> 4.1 <span class="b_rat_icon b_rat_icon1"><i class="bi bi-star-fill"></i></span> </p>
                                                                            </div>
                                                                            <div>

                                                                                <p class="m-0 blog_ret_p2 blog_ret_over">DELIVERY </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <p class="card_over_name m-0">Mithai, South Indian, Fast...</p>
                                                                    <p class="m-0 res_blog_open">Road Indore</p>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide">
                                                        <div class="card">
                                                            <img src="images/over2.jpg" class="over_slider_img" />
                                                            <div class="card__content p-1">
                                                                <h3 class="card__title">JMD</h3>
                                                                <div class="row">
                                                                    <div class="col-6 mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-2    ">
                                                                                <p class="b_rating over_rating m-0"> 4.1 <span class="b_rat_icon b_rat_icon1"><i class="bi bi-star-fill"></i></span> </p>
                                                                            </div>
                                                                            <div>

                                                                                <p class="m-0 blog_ret_p2 blog_ret_over">DINING </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-2    ">
                                                                                <p class="b_rating over_rating m-0"> 4.1 <span class="b_rat_icon b_rat_icon1"><i class="bi bi-star-fill"></i></span> </p>
                                                                            </div>
                                                                            <div>

                                                                                <p class="m-0 blog_ret_p2 blog_ret_over">DELIVERY </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <p class="card_over_name m-0">Mithai, South Indian, Fast...</p>
                                                                    <p class="m-0 res_blog_open">Road Indore</p>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide">
                                                        <div class="card">
                                                            <img src="images/over3.jpg" class="over_slider_img" />
                                                            <div class="card__content p-1">
                                                                <h3 class="card__title">JMD</h3>
                                                                <div class="row">
                                                                    <div class="col-6 mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-2    ">
                                                                                <p class="b_rating over_rating m-0"> 4.1 <span class="b_rat_icon b_rat_icon1"><i class="bi bi-star-fill"></i></span> </p>
                                                                            </div>
                                                                            <div>

                                                                                <p class="m-0 blog_ret_p2 blog_ret_over">DINING </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-2    ">
                                                                                <p class="b_rating over_rating m-0"> 4.1 <span class="b_rat_icon b_rat_icon1"><i class="bi bi-star-fill"></i></span> </p>
                                                                            </div>
                                                                            <div>

                                                                                <p class="m-0 blog_ret_p2 blog_ret_over">DELIVERY </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <p class="card_over_name m-0">Mithai, South Indian, Fast...</p>
                                                                    <p class="m-0 res_blog_open">Road Indore</p>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide">
                                                        <div class="card">
                                                            <img src="images/over4.jpg" class="over_slider_img" />
                                                            <div class="card__content p-1">
                                                                <h3 class="card__title">JMD</h3>
                                                                <div class="row">
                                                                    <div class="col-6 mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-2    ">
                                                                                <p class="b_rating over_rating m-0"> 4.1 <span class="b_rat_icon b_rat_icon1"><i class="bi bi-star-fill"></i></span> </p>
                                                                            </div>
                                                                            <div>

                                                                                <p class="m-0 blog_ret_p2 blog_ret_over">DINING </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-2    ">
                                                                                <p class="b_rating over_rating m-0"> 4.1 <span class="b_rat_icon b_rat_icon1"><i class="bi bi-star-fill"></i></span> </p>
                                                                            </div>
                                                                            <div>

                                                                                <p class="m-0 blog_ret_p2 blog_ret_over">DELIVERY </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <p class="card_over_name m-0">Mithai, South Indian, Fast...</p>
                                                                    <p class="m-0 res_blog_open">Road Indore</p>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide">
                                                        <div class="card">
                                                            <img src="images/over5.jpg" class="over_slider_img" />
                                                            <div class="card__content p-1">
                                                                <h3 class="card__title">JMD</h3>
                                                                <div class="row">
                                                                    <div class="col-6 mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-2    ">
                                                                                <p class="b_rating over_rating m-0"> 4.1 <span class="b_rat_icon b_rat_icon1"><i class="bi bi-star-fill"></i></span> </p>
                                                                            </div>
                                                                            <div>

                                                                                <p class="m-0 blog_ret_p2 blog_ret_over">DINING </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-2    ">
                                                                                <p class="b_rating over_rating m-0"> 4.1 <span class="b_rat_icon b_rat_icon1"><i class="bi bi-star-fill"></i></span> </p>
                                                                            </div>
                                                                            <div>

                                                                                <p class="m-0 blog_ret_p2 blog_ret_over">DELIVERY </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <p class="card_over_name m-0">Mithai, South Indian, Fast...</p>
                                                                    <p class="m-0 res_blog_open">Road Indore</p>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide">
                                                        <div class="card">
                                                            <img src="images/blog1.jpg" class="over_slider_img" />
                                                            <div class="card__content p-1">
                                                                <h3 class="card__title">JMD</h3>
                                                                <div class="row">
                                                                    <div class="col-6 mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-2    ">
                                                                                <p class="b_rating over_rating m-0"> 4.1 <span class="b_rat_icon b_rat_icon1"><i class="bi bi-star-fill"></i></span> </p>
                                                                            </div>
                                                                            <div>

                                                                                <p class="m-0 blog_ret_p2 blog_ret_over">DINING </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mb-1">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="me-2    ">
                                                                                <p class="b_rating over_rating m-0"> 4.1 <span class="b_rat_icon b_rat_icon1"><i class="bi bi-star-fill"></i></span> </p>
                                                                            </div>
                                                                            <div>

                                                                                <p class="m-0 blog_ret_p2 blog_ret_over">DELIVERY </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <p class="card_over_name m-0">Mithai, South Indian, Fast...</p>
                                                                    <p class="m-0 res_blog_open">Road Indore</p>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <div class="p-3 right_div_shad">
                                <div>
                                    <h4 class="over_h4">Call</h4>
                                    <p class="open_color open_color_ch m-0">+91 123-456-7890</p>
                                    <p class="open_color open_color_ch">+91 123-456-7890</p>
                                </div>
                                <div>
                                    <h4 class="over_h4">Direction</h4>
                                    <div class=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.5613833141974!2d75.92884587448557!3d22.744538626648175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962e2a1686cb059%3A0x8cd0e55aed267f4!2sKushabhau%20Thackrey%20Rd%2C%20Nipania%2C%20Indore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1687350464410!5m2!1sen!2sin" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map_right"></iframe>
                                        <p class="over_p5">Mr10 Indore</p>
                                    </div>

                                </div>
                                <div>
                                    <button type="button" class="btn border_btn_blog"><span class="open_color me-1"><i class="bi bi-back"></i></span>copy</button>
                                    <button type="button" class="btn border_btn_blog"><span class="open_color me-1"><i class="bi bi-geo"></i></span>Direction</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    <div class="row">
                        <div class="col-md-3 mt-2">
                            <div class="nav flex-column nav-pills me-3 tab_fixed" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active order_tab" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Recommended</button>
                                <button class="nav-link order_tab" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Diwali Hampers</button>
                                <button class="nav-link order_tab" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Sweets</button>

                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="my-2 all_head_name">Order Online</h3>
                                        </div>
                                      
                                            <div class="input-group input_online">
                                                <input class="form-control  search_control input_online1" type="search" value="What do you want to eat today" id="example-search-input">
                                                <span class="input-group-append">
                                                    <button class="btn icon_btn1" type="button">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                      
                                    </div>
                                    <div class="d-flex offer_mobile mt-2">
                                        <div class="order_coupon p-2 me-2 mt-2">
                                            <p class="m-0 order_tab_p1">50% OFF up to $100</p>
                                            <p class="m-0 order_tab_p2">use code WELCOME50</p>
                                        </div>
                                        <div class="order_coupon p-2 me-2 mt-2">
                                            <p class="m-0 order_tab_p1">Flat $125 OFF</p>
                                            <p class="m-0 order_tab_p2">use code FLAT125</p>
                                        </div>
                                        <div class="order_coupon p-2 me-2 mt-2">
                                            <p class="m-0 order_tab_p1">30% OFF up to $75</p>
                                            <p class="m-0 order_tab_p2">use code ZOMPAYTM</p>
                                        </div>
                                        <div class="order_coupon p-2 me-2 mt-2">
                                            <p class="m-0 order_tab_p1">30% OFF up to $75 + up to $150 LazyPay cashback</p>
                                            <p class="m-0 order_tab_p2">use code LAZYPAYFEST</p>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4 class="over_h4">Recommended</h4>
                                        <div class="row">
                                            <div class="col-md-12 col-6 ">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-2 my-3">
                                                        <div>
                                                            <img src="images/menu_img.jpg" class="img-fluid lazy sweet_img1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-lg-10 my-3">
                                                        <h4 class="sweet_name_online mb-1">Heirloom Tomato Caprese</h4>
                                                        <p class="m-0 sweet_name_p">BESTSELLER</P>
                                                        <div class="d-flex align-items-center my-1">
                                                            <div class="small-ratings small-ratings1 me-2">
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                            </div>
                                                            <div class="sweet_name_vote">576 Votes</div>
                                                        </div>
                                                        <p class="m-0 sweet_name_ret my-1">$19.05</p>
                                                        <div class="mt-1">
                                                    <a href="#"> <button type="button" class="menu_add_btn btn-sm menu_btn_add">Add to Cart</button></a>
                                                </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-6">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-2 my-3">
                                                        <div>
                                                            <img src="images/sandwich.jpg" class="img-fluid lazy sweet_img1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-lg-10 my-3">
                                                        <h4 class="sweet_name_online mb-1">Sandwich.</h4>
                                                        <p class="m-0 sweet_name_p">BESTSELLER</P>
                                                        <div class="d-flex align-items-center my-1">
                                                            <div class="small-ratings small-ratings1 me-2">
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                            </div>
                                                            <div class="sweet_name_vote">596 Votes</div>
                                                        </div>
                                                        <p class="m-0 sweet_name_ret my-1">$19.05</p>
                                                        <a href="#"> <button type="button" class="menu_add_btn btn-sm menu_btn_add">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-6">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-2 my-3">
                                                        <div>
                                                            <img src="images/burger1.jpg" class="img-fluid lazy sweet_img1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-lg-10 my-3">
                                                        <h4 class="sweet_name_online mb-1">Burger</h4>
                                                        <p class="m-0 sweet_name_p">BESTSELLER</P>
                                                        <div class="d-flex align-items-center my-1">
                                                            <div class="small-ratings small-ratings1 me-2">
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                            </div>
                                                            <div class="sweet_name_vote">976 Votes</div>
                                                        </div>
                                                        <p class="m-0 sweet_name_ret my-1">$29.05</p>
                                                        <a href="#"> <button type="button" class="menu_add_btn btn-sm menu_btn_add">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-6">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-2 my-3">
                                                        <div>
                                                            <img src="images/menu_img.jpg" class="img-fluid lazy sweet_img1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-lg-10 my-3">
                                                        <h4 class="sweet_name_online mb-1">pizza</h4>
                                                        <p class="m-0 sweet_name_p">BESTSELLER</P>
                                                        <div class="d-flex align-items-center my-1">
                                                            <div class="small-ratings small-ratings1 me-2">
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                                <i class="fa fa-star rating-color"></i>
                                                            </div>
                                                            <div class="sweet_name_vote">876 Votes</div>
                                                        </div>
                                                        <p class="m-0 sweet_name_ret my-1">$59.05</p>
                                                        <a href="#"> <button type="button" class="menu_add_btn btn-sm menu_btn_add">Add to Cart</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div>
                                        <h3 class="my-3 all_head_name">Diwali Hampers</h3>
                                    </div>
                                    <p class="diwali_p my-3">PREMIUM DRY FRUITS</p>
                                    <div class="col-md-12 my-4">
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <img src="images/veg-mark.png" class="img-fluid lazy">
                                            </div>
                                            <div class="">
                                                <div>
                                                    <h4 class="sweet_name_online">Roasted Red Chilli Kaju [200gm]</h4>
                                                    <p class="m-0 sweet_name_ret">$9.05</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 my-4">
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <img src="images/veg-mark.png" class="img-fluid lazy">
                                            </div>
                                            <div class="">
                                                <div>
                                                    <h4 class="sweet_name_online">Roasted Salted Kaju [200gm]</h4>
                                                    <p class="m-0 sweet_name_ret">$15</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 my-4">
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <img src="images/veg-mark.png" class="img-fluid lazy">
                                            </div>
                                            <div class="">
                                                <div>
                                                    <h4 class="sweet_name_online">Roasted Salted Badam [200gm]</h4>
                                                    <p class="m-0 sweet_name_ret">$5</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 my-4">
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <img src="images/veg-mark.png" class="img-fluid lazy">
                                            </div>
                                            <div class="">
                                                <div>
                                                    <h4 class="sweet_name_online">Roasted Masala Badam [200gm]</h4>
                                                    <p class="m-0 sweet_name_ret">$75</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <h3 class="my-3 all_head_name">Sweets</h3>
                                    <p class="diwali_p my-3"> BENGALI SWEETS</p>
                                    <div class="col-md-12 my-4">
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <img src="images/veg-mark.png" class="img-fluid lazy">
                                            </div>
                                            <div class="">
                                                <div>
                                                    <h4 class="sweet_name_online mb-1">Roasted Masala Badam [200gm]</h4>
                                                    <div class="d-flex align-items-center my-1">
                                                        <div class="small-ratings small-ratings1 me-2">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </div>
                                                        <div class="sweet_name_vote">596 Votes</div>
                                                    </div>
                                                    <p class="m-0 sweet_name_ret my-1">$9.05</p>
                                                    <p class="sweet_name_p1 m-0">[Dessert] [Pre-Prepared] Diamond shaped barfi made with cashews.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-6">
                                        <div class="row">
                                            <div class="col-md-3 col-lg-2 col-12 my-3">
                                                <div>
                                                    <img src="images/fastfood_img1.jpg" class="img-fluid lazy sweet_img1">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-lg-10 col-12 my-3">
                                                <h4 class="sweet_name_online mb-1">Heirloom Tomato Caprese</h4>

                                                <div class="d-flex align-items-center my-1">
                                                    <div class="small-ratings small-ratings1 me-2">
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </div>
                                                    <div class="sweet_name_vote">876 Votes</div>
                                                </div>
                                                <p class="m-0 sweet_name_ret my-1">$2.05</p>
                                                <a href="#"> <button type="button" class="menu_add_btn btn-sm menu_btn_add">Add to Cart</button></a>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h3 class="my-2 all_head_name">Indore Sweets Photo</h3>


                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active photo_link" id="pills-all_1-tab" data-bs-toggle="pill" data-bs-target="#pills-all_1" type="button" role="tab" aria-controls="pills-all_1" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link photo_link" id="pills-food_1-tab" data-bs-toggle="pill" data-bs-target="#pills-food_1" type="button" role="tab" aria-controls="pills-food_1" aria-selected="false">Food</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-all_1" role="tabpanel" aria-labelledby="pills-all_1-tab">
                            <div class="row my-4">
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/footer1.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/footer2.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/footer3.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/footer4.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/footer5.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/gallery1.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/gallery2.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/gallery3.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/gallery4.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-food_1" role="tabpanel" aria-labelledby="pills-food_1-tab">
                            <div class="row my-4">
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/footer1.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/footer2.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/footer3.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/footer4.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/footer5.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                                <div class="col-md-3 my-2">
                                    <div class="photo_img1">
                                        <img src="images/gallery1.jpg" class="img-fluid lazy photo_tab_img">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="pills-menu" role="tabpanel" aria-labelledby="pills-menu-tab">
                    <h3 class="my-2 all_head_name">Indore Sweets Menu </h3>
                    <div class="row my-4">
                        <div class="col-md-3 mt-2">
                            <img src="images/fast-food_menu1.png" class="img-fluid menu_over_img2">
                            <h6 class="menu1_h6 mt-1">Food Menu</h6>
                        </div>
                        <div class="col-md-3 mt-2">
                            <img src="images/fast-food_menu1.png" class="img-fluid menu_over_img2">
                            <h6 class="menu1_h6 mt-1">Beverages</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('include/footer.php'); ?>
