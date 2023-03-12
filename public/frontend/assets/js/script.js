

//spinner
// window.addEventListener("load", () => {
//     const spinner = document.querySelector(".spinner");
//     spinner.classList.add("spinner-hidden");
//     });

//   // Header scroll class
//   $(window).scroll(function() {
//     if ($(this).scrollTop() > 100) {
//     $('.navbar').addClass('header-scrolled');
//     } else {
//     $('.navbar').removeClass('header-scrolled');
//     }
// });



jQuery(function ($) {
    $("#homeslider").flexslider({
        animation: "slide",
    });
});

jQuery(function ($) {
    $("#productslider").flexslider({
        animation: "slide",
    });
});


jQuery(function ($) {
    $("#productdeal").flexslider({
        animation: "slide",
    });
});


jQuery(function ($) {
    $("#toysslider").flexslider({
        animation: "slide",
    });
});

  // scroll
// let scroll = document.querySelector(".scroll-link");
// window.onscroll = function () {
//     this.scrollY >= 1000
//         ? scroll.classList.add("show")
//         : scroll.classList.remove("show");
// };
// scroll.onclick = function () {
//     window.scrollTo({
//         top: 0,
//         behavior: "smooth",
//     });
// };


filterObjects("all");

function filterObjects(c) {

    var x , i ;
    x = document.getElementsByClassName('box');
    if(c == "all") c = "";

    for(i = 0; i < x.length; i++) {

        removeClass(x[i] , "show");

        if(x[i].className.indexOf(c) > -1)
            addClass(x[i] , "show")
    }
}


function addClass (element , name) {

    var i , arr1, arr2;

    arr1 = element.className.split(" ");

    arr2 = name.split(" ");

    for(i = 0; i < arr2.length; i++) {

        if(arr1.indexOf(arr2[i]) == -1) {

            element.className += " " + arr2[i];
        }
    }
}

function removeClass (element , name) {

    var i , arr1, arr2;

    arr1 = element.className.split(" ");

    arr2 = name.split(" ");

    for(i = 0; i < arr2.length; i++) {

        while(arr1.indexOf(arr2[i]) > -1) {

            arr1.splice(arr1.indexOf(arr2[i]) , 1);
        }
    }

    element.className = arr1.join(" ");
}


// search
let headsearch = document.querySelector(".header-search");
let icon = document.querySelector(".search-toggle");
let search = document.querySelector(".header-search-wrap");

let input = document.querySelector("input[type ='text']");

headsearch.onclick = function () {
    icon.classList.toggle("active");
  search.classList.toggle("active");
  input.focus();
};


jQuery(function ($) {
    // The slider being synced must be initialized first
    $('#carousel').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: true,
      itemWidth: 130,
      itemMargin: 5,
      asNavFor: '#product-slider'
    });

    $('#product-slider').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      sync: "#carousel"
    });
  });
