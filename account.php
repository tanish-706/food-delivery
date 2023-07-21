<?php include('include/header.php'); ?>

<div class="container">
    <div class=" padding50">
        <h2 class="account_h2">Account</h2>
        <p class="account_p"><span class="add_span">Enrico Cole,</span> admin@gmail.com</p>
        <div class="my-5">
            <div class="tab-default">
                <nav>
                    <div class="nav nav-tabs py-3 account_tab" id="nav-tab" role="tablist">
                        <button class="nav-link account_tab1 active me-2 my-1" id="nav-acc_info-tab" data-bs-toggle="tab" data-bs-target="#nav-acc_info" type="button" role="tab" aria-controls="nav-acc_info" aria-selected="true">Account info</button>
                        <button class="nav-link account_tab1 me-2 my-1" id="nav-order_acc-tab" data-bs-toggle="tab" data-bs-target="#nav-order_acc" type="button" role="tab" aria-controls="nav-order_acc" aria-selected="false">My order</button>
                        <button class="nav-link account_tab1 me-2 my-1" id="nav-pass_acc-tab" data-bs-toggle="tab" data-bs-target="#nav-pass_acc" type="button" role="tab" aria-controls="nav-pass_acc" aria-selected="false">Change password</button>
                        <button class="nav-link account_tab1 me-2 my-1" id="nav-wishlist-tab" data-bs-toggle="tab" data-bs-target="#nav-wishlist" type="button" role="tab" aria-controls="nav-wishlist" aria-selected="false">Wishlist</button>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-acc_info" role="tabpanel" aria-labelledby="nav-acc_info-tab">
                        <h3 class="mt-5 acc_info">Account infomation</h3>
                        <div class="row">
                            <div class="col-md-3  mt-4">
                                <form>

                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url(./images/testimonial1.png);">
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="col-md-9  mt-4">
                                <form>
                                    <div class="form-outline mb-4">
                                        <label class="form-label account_label" for="form2Example17">Full Name</label>
                                        <input type="text" class="form-control" value="Enrico Cole" />

                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label account_label" for="form2Example17">Email</label>
                                        <input type="email" class="form-control" value="admin@email.com" />

                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label account_label" for="form2Example17">Date of birth</label>
                                        <input type="date" class="form-control" />

                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label account_label" for="form2Example17">Address</label>
                                        <input type="text" class="form-control" value="New york, USA" />

                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label account_label" for="form2Example17">Gender</label>
                                        <select class="form-select" aria-label="Default select example">

                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>

                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label account_label " for="form2Example17">Phone number</label>
                                        <input type="phone" class="form-control" value="123 456 7890" />

                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label account_label" for="form2Example27">About you</label>
                                        <textarea class="form-control " placeholder="..."></textarea>

                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-lg rounded-5 update_btn p-3">Update account</button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-order_acc" role="tabpanel" aria-labelledby="nav-order_acc-tab">
                        <h3 class="mt-5 acc_info">Order History</h3>
                        <div class="order_details border rounded mt-5">
                            <div class="d-flex align-items-center justify-content-between p-4 background_div">
                                <div>
                                    <h6 class="history_h6">#WU3746HGG12</h6>
                                    <p class="m-0 history_p">May 8, 2023<span class="mx-2"> · </span><span class="deliver_color">Delivered</span>
                                </div>
                                <div>
                                    <button type="button" class="btn order_button rounded-5">View Order</button>
                                </div>
                            </div>
                            <div class="px-4">
                                <div class="d-flex justify-content-between py-4 bottom_border_div">
                                    <div class="d-flex">
                                        <div>
                                            <img src="images/sandwich.jpg" class="img-fluid order_img2">
                                        </div>
                                        <div class="ms-4 d-flex flex-column justify-content-around">
                                            <p>Sandwich</p>
                                            <p>Qty <span>1</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-around text_end">
                                        <div>
                                            <button type="button" class=" price_button rounded p-1">$119.05</button>
                                        </div>
                                        <div>
                                            <p class="m-0 review_p">Leave review</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between py-4 bottom_border_div">
                                    <div class="d-flex">
                                        <div>
                                            <img src="images/fastfood_img1.jpg" class="img-fluid order_img2">
                                        </div>
                                        <div class="ms-4 d-flex flex-column justify-content-around">
                                            <p>
                                                Burger</p>
                                            <p>Qty <span>1</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-around text_end">
                                        <div>
                                            <button type="button" class=" price_button rounded p-1">$219.05</button>
                                        </div>
                                        <div>
                                            <p class="m-0 review_p">Leave review</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between py-4 bottom_border_div">
                                    <div class="d-flex">
                                        <div>
                                            <img src="images/menu_img.jpg" class="img-fluid order_img2">
                                        </div>
                                        <div class="ms-4 d-flex flex-column justify-content-around">
                                            <p>

                                                pizza</p>
                                            <p>Qty <span>1</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-around text_end">
                                        <div>
                                            <button type="button" class=" price_button rounded p-1">$219.05</button>
                                        </div>
                                        <div>
                                            <p class="m-0 review_p">Leave review</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="order_details border rounded mt-5">
                            <div class="d-flex align-items-center justify-content-between p-4 background_div">
                                <div>
                                    <h6 class="history_h6">#WU3746HGG13</h6>
                                    <p class="m-0 history_p">Feb 4, 2023<span class="mx-2"> · </span><span class="deliver_color">Delivered</span>
                                </div>
                                <div>
                                    <button type="button" class="btn order_button rounded-5">View Order</button>
                                </div>
                            </div>
                            <div class="px-4">
                                <div class="d-flex justify-content-between py-4 bottom_border_div">
                                    <div class="d-flex">
                                        <div>
                                            <img src="images/sandwich.jpg" class="img-fluid order_img2">
                                        </div>
                                        <div class="ms-4 d-flex flex-column justify-content-around">
                                            <p>Sandwich</p>
                                            <p>Qty <span>1</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-around text_end">
                                        <div>
                                            <button type="button" class=" price_button rounded p-1">$119.05</button>
                                        </div>
                                        <div>
                                            <p class="m-0 review_p">Leave review</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between py-4 bottom_border_div">
                                    <div class="d-flex">
                                        <div>
                                            <img src="images/fastfood_img1.jpg" class="img-fluid order_img2">
                                        </div>
                                        <div class="ms-4 d-flex flex-column justify-content-around">
                                            <p>
                                                Burger</p>
                                            <p>Qty <span>1</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-around text_end">
                                        <div>
                                            <button type="button" class=" price_button rounded p-1">$219.05</button>
                                        </div>
                                        <div>
                                            <p class="m-0 review_p">Leave review</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between py-4 bottom_border_div">
                                    <div class="d-flex">
                                        <div>
                                            <img src="images/menu_img.jpg" class="img-fluid order_img2">
                                        </div>
                                        <div class="ms-4 d-flex flex-column justify-content-around">
                                            <p>

                                                pizza</p>
                                            <p>Qty <span>1</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-around text_end">
                                        <div>
                                            <button type="button" class=" price_button rounded p-1">$219.05</button>
                                        </div>
                                        <div>
                                            <p class="m-0 review_p">Leave review</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-pass_acc" role="tabpanel" aria-labelledby="nav-pass_acc-tab">
                        <h3 class="mt-5 acc_info">Update your password</h3>
                        <div class="col-md-8 mt-5">
                            <form>
                                <div class="form-outline mb-4">
                                    <label class="form-label account_label" for="form2Example17">Current password</label>
                                    <input type="text" class="form-control" placeholder="" />

                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label account_label" for="form2Example17">New password</label>
                                    <input type="text" class="form-control" placeholder="" />

                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label account_label" for="form2Example17">Confirm password</label>
                                    <input type="text" class="form-control" placeholder="" />

                                </div>
                                <div>
                                    <button type="button" class="btn btn-lg rounded-5 update_btn p-3">Update password</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-wishlist" role="tabpanel" aria-labelledby="nav-wishlist-tab">
                        <h3 class="my-5 acc_info">List of saved products</h3>
                        <div class="col-md-12 table-resposive">
                            <table class="table w-100 table-resposive">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            Product Name</th>
                                        <th scope="col"> Price</th>
                                        <th scope="col"> Stock Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td><img src="images/footer1.jpg" class="table_img"><span class="ms-4 table_head">Burger</span></td>
                                        <td>$21.05</td>
                                        <td ><span class="in_stock">In stock</span></td>
                                        <td> <a href="#"> <button type="button" class="menu_add_btn btn-sm menu_btn_add menu_btn_add1 ">Add to Cart</button></a></td>
                                    </tr>
                                    <tr>
                                    <td><img src="images/sandwich.jpg" class="table_img"> <span class="ms-4 table_head">Sandwich</span></td>
                                        <td>$11.05</td>
                                        <td ><span class="in_stock">In stock</span></td>
                                        <td> <a href="#"> <button type="button" class="menu_add_btn btn-sm menu_btn_add menu_btn_add1">Add to Cart</button></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/menu_img.jpg" class="table_img"><span class="ms-4 table_head">Pizza</span></td>
                                        <td >$32.05</td>
                                        <td ><span class="in_stock">In stock</span></td>
                                        <td> <a href="#"> <button type="button" class="menu_add_btn btn-sm menu_btn_add menu_btn_add1">Add to Cart</button></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<?php include('include/footer.php'); ?>