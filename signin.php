<?php include('include/header.php'); ?>
<style>
    .header_navbar {
        display: none;
    }

    .footer_block {
        display: none;
    }
</style>
<div class="container-fluid">
    <div class="col-md-12">
        <section class="vh-100">
            <div class="container  h-100">
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col col-xl-10 col-md-10 mt-4">
                        <div class="card login_card" style="border-radius: 1rem;">
                            <div class="row g-0">
                               
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">

                                        <form>

                                            <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="images/login_img.gif" class="logo_icon_img" alt="">
                                                <span class="h1 fw-bold mb-0 all_head_name">Register Here</span>
                                            </div>

                                          
                                            <div class="form-outline mb-4">
                                                <input type="text" id="form2Example17" class="form-control form-control-lg" placeholder="Name"/>
                                             
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="email" id="form2Example17" class="form-control form-control-lg" placeholder="Email"/>
                                               
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="phone" id="form2Example27" class="form-control form-control-lg" placeholder="Phone" />
                                              
                                            </div>

                                            <div class="pt-1 mb-3">
                                                <a href=" dashboard.php"> <button class="btn btn-dark btn-lg btn-block" type="button">Sign Up</button></a>
                                            </div>

                                            <a class="small text-muted all_head_name" href="forgot_password.php">Forgot password?</a>
                                            <p class="  mt-2" style="color: #393f81;"> <a href="login.php"
                      style="color: #393f81;" class="text-muted mt-2 all_head_name"> Login</a></p>
                            <a href="#" class="small text-muted me-1"><img src="images/facebook_sign.png" class="img-fluid sign_img"></a>
                            <a href="#" class="small text-muted me-1"><img src="images/google_sign.png" class="img-fluid sign_img"></a>
                            <a href="#" class="small text-muted me-1"><img src="images/twitter_sign.png" class="img-fluid sign_img"></a>
                                        </form>

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-5 d-none d-md-block ">
                                    <img src="images/login_form.png" class="login_sidebar_color signin_img img-fluid lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include('include/footer.php'); ?>