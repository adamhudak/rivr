$(document).ready(function () {  
  $(window).scroll(function() {
    var scrollValue = $(this).scrollTop() / 5;

    // Apply the transformation to the parallax box
    $('.hero-paralax__box').css('transform', 'translateY(' + -scrollValue + 'px)');
    if ($(this).scrollTop() > 0) {
      $(".hero-paralax__box").css("opacity", 1)
  } 
    
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
        $('.parallax-home').css({"opacity":1, "transform": "translateY(0px)" });
        $('.parallax-home--mobile').css({"opacity":1, "transform": "translateY(0px)" });
    } 
});

   // Function to check if an element is in the viewport
   function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

  // Function to handle the scroll event
  function handleScroll() {
      $(".steps-item").each(function () {
          if (isElementInViewport(this) && !$(this).hasClass("visible")) {
              $(this).addClass("visible");
          }
      });
  }

  // Initial check on page load
  handleScroll();

var scrollTimeout;
$(window).on("scroll", function () {

    clearTimeout(scrollTimeout);

    scrollTimeout = setTimeout(function () {
        handleScroll();
    }, 300); 
});





   /* SLIDER SCROLL */
 /* let blocked = false;
  let blockTimeout = null;
  let prevDeltaY = 0;
  
  $(".slider").on('mousewheel DOMMouseScroll wheel', (function(e) {
      let deltaY = e.originalEvent.deltaY;
      e.preventDefault();
      e.stopPropagation();
  
      clearTimeout(blockTimeout);
      blockTimeout = setTimeout(function(){
          blocked = false;
      }, 50);
  
      
      if (deltaY > 0 && deltaY > prevDeltaY || deltaY < 0 && deltaY < prevDeltaY || !blocked) {
          blocked = true;
          prevDeltaY = deltaY;
  
          if (deltaY > 0) {
              $(this).slick('slickNext');
          } else {
              $(this).slick('slickPrev');
          }
      }
  }));
*/

  /*  SHARE BUTTONS SECION */
  $("body").on("click", ".share-button", function (e) {
    e.preventDefault();
    copy_input(this);
  });
  function copy_input(element) {
    var data = jQuery(element).data("copy");
    const el = document.createElement("textarea");
    el.value = data;
    el.setAttribute("readonly", "");
    el.style.position = "absolute";
    el.style.left = "-9999px";
    document.body.appendChild(el);
    el.select();
    try {
      var successful = document.execCommand("copy");
    } catch (err) {
      console.error("Unable to copy");
    }
    if (successful === true) {
      console.log("copied!");
      // jQuery(element).fadeOut(100).fadeIn(100);
      jQuery(element).addClass("click");
      setTimeout(function () {
        jQuery(element).delay(1500).removeClass("click");
      }, 1500);
    }
    document.body.removeChild(el);
  }
   /* END SHARE BUTTONS SECTION*/

    /* PARALLAX HOMEPAGE */
    function applyParallaxEffect($element, factor = 0.5, offsetLimit = $(window).height() - 0) {
      const offset = $(window).scrollTop();
      const translateY = Math.min(offset * factor, offsetLimit);

      $element.css({
          'transition': 'transform 0.5s ease',
          //'transform': `translateY(${translateY}px)`
      });
  }

  const $parallaxImage = $('.parallax-home');
  const $parallaxImageMobile = $('.parallax-home--mobile');

  $(window).scroll(function () {
      applyParallaxEffect($parallaxImage);
      applyParallaxEffect($parallaxImageMobile, 0.25); // Customizing the factor for mobile
  });

/* ------------------------ END OF PARALLAX ------------------------ */
  //Load more button
  $(".blog-related__item").hide();
  $(".blog-related__item").slice(0, 3).show();
  let posts_btn = $(".load-more");
  $(posts_btn).click(function () {
      $(".blog-related__item:hidden").fadeIn(200);
      if ($(".blog-related__item:hidden").length == 0) {
          $(posts_btn).fadeOut(200);
          $(".blog__item-wrap").css("padding-bottom", "0px");
      }
  });


  $(".covered-main__cat .covered-main__cat-btn").eq(0).addClass("active");
  
  /* Filter Whats covered - Slider filter */
  $('.covered-main__cat-btn').on('click', function () {
    const filterCategory = $(this).data('filter');
    const slickSlider = $(".covered-main__item-wrap");
    slickSlider.slick("slickUnfilter").slick("slickGoTo", 0);

    if (filterCategory != "all"){
      slickSlider.slick("slickFilter", '[data-category="' + filterCategory + '"]');
    }
    $(this).addClass("active");
    $(this).siblings().removeClass("active");
  });

  /*   !!! MUST BE BEFORE SLICK SLIDER     !!! */
  $(".slider").on("init", function(slick){
    $(this).css({
      "opacity": "1",
      "visibility": "visible"
    });
   });
   
  /* SLIDER */
  $(".slider").slick({
    adaptiveHeight:true,
    slidesToShow: 6,
    slidesToScroll: 5,
    dots:true,
    pauseOnFocus: true,
    pauseOnHover: true,
    cssEase: "linear",
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          arrows: true,
          centerMode: false,
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 899,
        settings: {
          arrows: true,
          centerMode: false,
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: true,
          centerMode: false,
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
    ],
  });
  

  $(".buster-item h4").on("click", function(){
    $(this).toggleClass("active").next(".buster-item__content").slideToggle();
  });

 /* Only one can be active*/
  $(".covered-tab__item  h4").on("click", function () {
    $(this).toggleClass("active").next().slideToggle();
    $(".covered-tab__item div").not($(this).next()).slideUp(300);
    $(this).parent().siblings().children().removeClass("active");
  });


  $(window).scroll(function ()
  {
      if ($(window).scrollTop() > 0){
          if (!$("header").hasClass("scrolled")) $("header").addClass("scrolled"); 
      }
      else{
          $("header").removeClass("scrolled");
      }
  });
  $(window).scroll();



   $(".menu-toggle").on("click", function (e) {
    e.preventDefault();
    $(".main-navigation").toggleClass("menu-opened");
    $("body").toggleClass("toggled-view");
   });  
   


});

/* GENERAL TABS - What’s not covered?*/
$(".covered-right__tab a").eq(0).addClass("active");
$(".covered-right__tab a").click(function (e) {
  e.preventDefault();
  var type = $(this).attr("data-box");
  $(this).addClass("active");
  $(this).siblings().removeClass("active");
  $(".covered-tab__item-wrap")
    .filter("[data-content=" + type + "]")
    .delay(200)
    .fadeIn()
    .siblings()
    .fadeOut();
});


$(".blog-categories a").eq(0).addClass("active");
/* FILTER CATEGORY ON JOURNAL - Blog posts*/
$('.filter-button').on('click', function (event) {
  event.preventDefault();
  const selectedCategory = $(this).attr('data-category').replace('category-', '');
  const blogItems = $('.blog__item-wrap .blog-related__item');

  blogItems.fadeOut(300); 
  $(this).addClass("active");
  $(this).siblings().removeClass("active");

  setTimeout(function() {
      if (selectedCategory === 'all') {
          blogItems.fadeIn(300); 
      } else {
          blogItems.each(function () {
              const itemCategory = $(this).attr('data-category');
              if (itemCategory === selectedCategory) {
                  $(this).fadeIn(300); 
              }
          });
      }
  }, 300); 
});






