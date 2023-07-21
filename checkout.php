<?php include('include/header.php'); ?>


<div class="container">
    <div class="py-5">
        <div class="col-md-12">
            <h1>CHECKOUT</h1>
        </div>
        <div class="col-md-12">
            <p class="out_p">Returning customer? <a href="#" class="out_span_p"> Click here to login</a></p>
        </div>
        <div class="col-md-12 py-5">
            <p class="check_first_p">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>
            <div class="row mb-3">
                <div class="col-md-6 mt-2">
                    <label class="concat_form_label checkout_label">Username or Email</label>
                    <input type="email" class="form-control mt-2" placeholder="Username or Email">
                </div>
                <div class="col-md-6 mt-2">
                    <label class="concat_form_label checkout_label">Password</label>
                    <input type="password" class="form-control mt-2" placeholder="Password">
                </div>
                <div class="col-md-12 my-3">
                    <div class=" form-check">
                        <input type="checkbox" class="form-check-input res_form_check ">
                        <label class="form-check-label  checkout_label" for="exampleCheck1">Remember Me </label>
                    </div>


                    <div class="mt-3">
                        <button class="btn btn-sm px-4 res_form_btn check_form_btn" type="button">LOGIN</button>
                    </div>
                    <div class="my-3">
                        <a href="#" class="out_span_p"> Lost your password?</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <p class="out_p">Have a coupon? <a href="#" class="out_span_p"> Click here to enter your code</a></p>
                    <div class="mt-4 d-flex">
                        <input type="email" class="form-control  form_control_ch" placeholder="Coupon code">

                        <button class="btn btn-sm px-4 res_form_btn check_form_btn ms-3" type="button">APPLY COUPON</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-7">
                <h4 class="right_weight">BILLING DETAILS</h4>
                <div class="mt-3">
                    <label class="concat_form_label checkout_label mb-2 d-block">Country</label>
                    <select class="btn_drop_width rounded">
                        <option value="">Please select a country</option>
                        <option value="Canada">Canada</option>
                        <option value="Not Canada">Not Canada</option>
                    </select>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6 mt-3">
                        <label class="concat_form_label checkout_label">First Name</label>
                        <input type="text" class="form-control mt-2" placeholder="">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label class="concat_form_label checkout_label">Last Name</label>
                        <input type="text" class="form-control mt-2" placeholder="">
                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="concat_form_label checkout_label">Company Name</label>
                        <input type="text" class="form-control mt-2" placeholder="">
                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="concat_form_label checkout_label">Address</label>
                        <input type="text" class="form-control mt-2" placeholder="">
                    </div>
                    <div class=" col-md-12 mt-3">
                        <input type="text" class="form-control mt-2" placeholder="Optional">
                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="concat_form_label checkout_label">Town / City</label>
                        <input type="text" class="form-control mt-2" placeholder="">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label class="concat_form_label checkout_label">Phone</label>
                        <input type="phone" class="form-control mt-2" placeholder="">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label class="concat_form_label checkout_label">Email Address</label>
                        <input type="password" class="form-control mt-2" placeholder="">
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class=" form-check">
                            <input type="checkbox" class="form-check-input res_form_check ">
                            <label class="form-check-label  checkout_label" for="exampleCheck1">Create an account </label>
                        </div>

                    </div>
                    <div class="col-md-12 mt-3">
                        <h4>SHIPPING ADDRESS</h4>
                        <div class=" form-check mt-4">
                            <input type="checkbox" class="form-check-input res_form_check ">
                            <label class="form-check-label  checkout_label" for="exampleCheck1">Ship to a different address? </label>
                        </div>

                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="concat_form_label checkout_label d-block">Order Notes</label>
                        <textarea class="mt-2 text_area_w" placeholder="Notes about your order"></textarea>
                    </div>


                </div>

            </div>
            <div class="col-md-5">
                <div class="right_div">
                    <h4 class="right_weight">YOUR ORDER</h4>
                    <div class="d-flex justify-content-between  right_check">
                        <div class="py-4">
                            <h5 class="right_weight">PRODUCT</h5>
                        </div>
                        <div class="py-4">
                            <h5 class="right_weight">TOTAL</h5>
                        </div>
                    </div>
                    <div class="py-4 right_check">
                        FOOD * 1
                    </div>
                    <div class="py-4 right_check">
                        <h5 class="m-0 right_weight">CART SUBTOTAL</h5>
                    </div>
                    <div class="d-flex justify-content-between ">
                        <div class="py-4">
                            <h5 class="right_weight">SHIPPING AND<br/> HANDLING</h5>
                        </div>
                        <div class="py-4">
                            <span class="free_check">Free Shipping</span>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h4 class="right_weight">PAYMENT METHOD</h4>
                        <div class="right_check">
                            <div class="form-check py-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label form_check_label1" for="flexRadioDefault1">
                                 Online Payment
                                </label>
                            </div>
                        </div>
                        <div class="right_check">
                            <div class="form-check py-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label form_check_label1" for="flexRadioDefault1">
                                Cheque Payment
                                </label>
                            </div>
                        </div>
                        <div class="right_check">
                            <div class="form-check py-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label form_check_label1" for="flexRadioDefault1">
                                Cash
                                </label>
                            </div>
                        </div>
                        <div class="mt-4">
                        <button class="btn btn-sm px-4 res_form_btn check_form_btn" type="button">PLACE ORDER</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<?php include('include/footer.php'); ?>