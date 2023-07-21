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
                                                <span class="h1 fw-bold mb-0 all_head_name">Reset Password</span>
                                            </div>

                                           
                                           
                                            <div class="form-outline mb-4">
                                                <input type="email" id="form2Example17" class="form-control form-control-lg" placeholder="Username/Email"/>
                                                
                                            </div>

                                          

                                            <div class="pt-1 mb-3">
                                                <a href=" dashboard.php"> <button class="btn btn-dark btn-lg btn-block" type="button">Submit</button></a>
                                            </div>

                                            <a class="small text-muted all_head_name" href="login.php">Go back to Login page</a>
                                            
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