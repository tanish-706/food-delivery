<div class="footer_block">
    <div class="container-fluid">
        <div class="col-md-8 mx-auto pt-5 footer_block1">
            <div class="row footer_block2">

                <div class="col-lg-4 ">
                    <div class="pe-4 pt-3">
                        <div class="footer_heading">
                            <span class="about_head_span"> ⮞⮞⮞⮞⮞</span>
                            <h5 class="footer_h5 mt-2">About Food</h5>
                        </div>
                        <div class="footer_body mt-5">
                            <p class="footer_p1 pe-4">There are many variations of passages of Lorem Ipsum</p>
                            <div class="d-flex">
                                <span class="footer_icon2"><i class="bi bi-house-door-fill"></i></span>
                                <p class="footer_p2 ps-2">25/3 Abhinandan nagar, Silom road, New York,USA </p>
                            </div>
                            <div class="d-flex">
                                <span class="footer_icon2"><i class="bi bi-telephone-fill"></i></span>
                                <div class="ps-2">
                                    <p class="m-0 footer_p2">123-456-7890</p>
                                    <p class="m-0 footer_p2">123-456-7890</p>
                                </div>

                            </div>
                            <div class="my-3">
                                <span class="footer_icon2"><i class="bi bi-envelope-fill"></i></span>
                                <span class="footer_p2 ps-2">deliveryinfo@food.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="pe-4 pt-3">
                        <div class="footer_heading">
                            <span class="about_head_span"> ⮞⮞⮞⮞⮞</span>
                            <h5 class="footer_h5 mt-2">Opening Hours</h5>
                        </div>
                        <div class="footer_body mt-5">
                            <p class="m-0 footer_second_p">Monday <span class="footer_div_span2">-------------- 8.00 - 20.00</span></p>
                            <p class="m-0 footer_second_p">Tuesday <span class="footer_div_span2"> ------------- 8.00 - 20.00</span></p>
                            <p class="m-0 footer_second_p">Wednesday <span class="footer_div_span2"> ---------- 8.00 - 20.00</span></p>
                            <p class="m-0 footer_second_p">Thursday <span class="footer_div_span2"> ------------ 8.00 - 20.00</span></p>
                            <p class="m-0 footer_second_p">Friday <span class="footer_div_span2"> --------------- 8.00 - 20.00</span></p>
                            <p class="m-0 footer_second_p">Saturday <span class="footer_div_span2"> ------------ 8.00 - 20.00</span></p>
                            <p class="m-0 footer_second_p">Sunday <span class="footer_div_span2"> -------------- closed</span></p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="pe-3 pt-3">
                        <div class="footer_heading">
                            <span class="about_head_span "> ⮞⮞⮞⮞⮞</span>
                            <h5 class="footer_h5 mt-2">We Are On Instagram</h5>
                        </div>
                        <div class="footer_body mt-5">
                            <div class="row justify-content-between ">
                                <div class="col-4 mb-4">

                                    <img src="images/footer1.jpg" class="img-fluid footer_images1 lazy">

                                </div>
                                <div class="col-4 mb-4">

                                    <img src="images/footer2.jpg" class="img-fluid footer_images1 lazy">

                                </div>
                                <div class="col-4  mb-4">

                                    <img src="images/footer3.jpg" class="img-fluid footer_images1 lazy">

                                </div>
                                <div class="col-4 mb-4">

                                    <img src="images/footer4.jpg" class="img-fluid footer_images1 lazy">

                                </div>
                                <div class="col-4 mb-4">

                                    <img src="images/footer5.jpg" class="img-fluid footer_images1 lazy">

                                </div>
                                <div class="col-4 mb-4">

                                    <img src="images/footer6.jpg" class="img-fluid footer_images1 lazy">

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div class="footer_part mt-5 py-4 d-flex justify-content-between">
                <div class="footer_part1">
                    <span class="footer_first">Copyright © Designed & Developed by Shrinkcom Software pvt.ltd 2023</span>
                </div>

                <div class="d-flex footer_part2">

                    <a href="#" class="footer_content1 ps-3">Terms of Service</a>
                    <a href="#" class="footer_content1 ps-3">Help</a>
                    <a href="#" class="footer_content1 ps-3">Privacy Policy</a>

                </div>

            </div>
        </div>
    </div>
</div>



<script src="js/bootstrap.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/web.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>

<script>

var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;


$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});



function recalculateCart()
{
  var subtotal = 0;
  

  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  

  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  
 
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}



function updateQuantity(quantityInput)
{

  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}



function removeItem(removeButton)
{

  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}
</script>
</body>

</html>