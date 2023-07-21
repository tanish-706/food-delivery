
$(document).ready(function () {
    $('.my-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        speed: 300,
        infinite: true,
        autoplaySpeed: 5000,
        autoplay: false,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        }
        ]
    });
});


$(".filter a").click(function (e) {
    e.preventDefault();
    var a = $(this).attr("href");
    a = a.substr(1);
    $(".sets a").each(function () {
        if (!$(this).hasClass(a) && a != "") $(this).addClass("hide");
        else $(this).removeClass("hide");
    });



    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("btncontainer");
    var btns = btnContainer.getElementsByClassName("gallery_tab");
    for (var i = 0; i < btns.length; i++) {
        var current = document.getElementsByClassName("gallery_tab-active");
        current[0].className = current[0].className.replace(" gallery_tab-active", "");
        this.className += " gallery_tab-active";

    }
});




$(document).ready(function () {

    $('.lazy').Lazy({
  
        scrollDirection: 'vertical',
        effect: 'fadeIn',
        visibleOnly: true,
        onError: function (element) {
            console.log('error loading ' + element.data('src'));
        }
    });

});





const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

$('.menuTab').click(function () {
    $('#pills-menu-tab').addClass('active');
    $('#pills-home').removeClass('active show');
    $('#pills-menu').addClass('active show');
    $('#pills-home-tab').removeClass('active show');
})
$('.tab_food').click(function () {
    $('#pills-menu-tab').removeClass('active');
    $(this).addClass('active');
})


document.addEventListener('DOMContentLoaded', function() {
    var splide = new Splide('.splide', {
        type: 'slide',
        perPage: 3,
        perMove: 1,
        gap: '15px',
        width: 'min(1200px, 100% - 60px)',
       
        breakpoints: {
            992: {
                perPage: 2,
            },
            480: {
                perPage: 1,
                rewind: true,
            },
        }
    });
    splide.mount();

});









var sidebarLinks = document.querySelectorAll(".navbar-nav a");


sidebarLinks.forEach(function(link)
 {
  link.addEventListener("click", function(event) {
    

    var href = link.getAttribute("href");
    localStorage.setItem("activeLink", href);


    sidebarLinks.forEach(function(link)
 {
      link.classList.remove("active");
    });
    link.classList.add("active");
  });
});


var storedActiveLink = localStorage.getItem("activeLink");
if (storedActiveLink) {

  var activeLink = document.querySelector('.navbar-nav a[href="' + storedActiveLink + '"]');
  if (activeLink) {
    activeLink.classList.add("active");
  }
}


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});