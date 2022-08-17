(function ($) {
  $(document).ready(function () {
    // Slick Slider
    const sliderPrimaryItems = $('.slider-primary .slider-primary__item');
    const slideTime = {
      autoplaySpeed: 5000
    }

    const titleAboveBlock = sliderPrimaryItems.find(".slider-primary__title-above");
    const titleBelowBlock = sliderPrimaryItems.find(".slider-primary__title-below");

    titleAboveBlock.each((indexAbove, elementAbove) => {

      const titleAboveContent = $(elementAbove).text().trim();
      let newTitleAbove = '';
      let delay = 20;
      let i = 0;
      let titleFirstLength = titleAboveContent.length;

      for (let val of titleAboveContent) {
        i++;
        val == " " ? val = "&nbsp;" : val;

        newTitleAbove += `<span style="animation-delay: ${delay * i}ms;">${val}</span>`
      }
      $(elementAbove).html(newTitleAbove)

      $(titleBelowBlock[indexAbove]).each((indexBelow, elementBelow) => {
        const titleBelowContent = $(elementBelow).text().trim();
        let newTitleBelow = '';
        let delay = 20;

        for (let val of titleBelowContent) {
          val == " " ? val = "&nbsp;" : val;
          newTitleBelow += `<span style="animation-delay: ${delay * titleFirstLength}ms;">${val}</span>`
          titleFirstLength++;
        }
        $(elementBelow).html(newTitleBelow)
      })
    })

    $('.slider-primary').on('init', function (event, slick) {
      animateScaleX(0)
      animateFadeInUp(0);
      $(sliderPrimaryItems[0]).find(".slider-primary__social").css({
        "animation-name": "fadeInUp"
      });
    });

    // Animation Fade In Top
    function animateFadeInTop(elementIndex) {
      $(sliderPrimaryItems[elementIndex]).find(".slider-primary__title span").css({
        "animation-duration": "350ms",
        "animation-timing-function": "ease-out",
        "animation-name": "fadeInTop"
      });

      // titleAboveBlock.find('span').css('animation-name', 'fadeInTop')
      // titleBelowBlock.find('span').css('animation-name', 'fadeInTopDouble')
    }
    // Animation Fade In UP
    function animateFadeInUp(elementIndex, slideTime) {
      const titleAboveBlock = $(sliderPrimaryItems[elementIndex]).find(".slider-primary__title-above");
      const titleBelowBlock = $(sliderPrimaryItems[elementIndex]).find(".slider-primary__title-below");

      $(sliderPrimaryItems[elementIndex]).find(".slider-primary__title span").css({
        "animation-duration": "700ms",
        "animation-timing-function": "ease",
      });

      titleAboveBlock.find('span').css('animation-name', 'fadeInUpDouble')
      titleBelowBlock.find('span').css('animation-name', 'fadeInUp')
    }

    // Animation Scale X
    function animateScaleX(elementIndex) {
      $(sliderPrimaryItems[elementIndex]).find(".slider-primary__image").css({
        "animation-duration": "500ms",
        "animation-timing-function": "cubic-bezier(.69,0,1,1)",
        "animation-name": "scaleX",

      });
    }

    function animateScaleXReverser(elementIndex) {
      $(sliderPrimaryItems[elementIndex]).find(".slider-primary__image").css({
        "animation-duration": "500ms",
        "animation-timing-function": "cubic-bezier(0,0,1,-0.12)",
        "animation-name": "scaleXReverser",
      });
    }

    $('.slider-primary').slick({
      dots: false,
      arrows: true,
      infinite: true,
      // autoplay: true,
      // autoplaySpeed: 7000,
      speed: 1000,
      fade: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      waitForAnimate: true,
    });

    $(".slider-primary").animate({ opacity: "1" }, 300);
    $('.slider-primary').slick("setOption", "autoplaySpeed", slideTime.autoplaySpeed);


    // On before slide change
    $('.slider-primary').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
      animateScaleXReverser(currentSlide);
      animateFadeInTop(currentSlide);
      setTimeout(() => {
        animateScaleX(nextSlide);
        animateFadeInUp(nextSlide, slideTime);
        // $('.slider-primary').slick("setOption", "autoplaySpeed", slideTime.autoplaySpeed);
      }, 1000);
    })

  }); // end ready document
})(jQuery)