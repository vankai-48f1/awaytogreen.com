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
      animateFadeInUp(0, slideTime);
      $(sliderPrimaryItems[0]).find(".slider-primary__social").css({
        "animation-name": "sangerFadeInUp"
      });
    });

    // Animation Fade In Top
    function animateFadeInTop(elementIndex) {
      $(sliderPrimaryItems[elementIndex]).find(".slider-primary__title span").css({
        "animation-duration": "350ms",
        "animation-timing-function": "ease-out",
        "animation-name": "sangerFadeInTop"
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

      titleAboveBlock.find('span').css('animation-name', 'sangerFadeInUpDouble')
      titleBelowBlock.find('span').css('animation-name', 'sangerFadeInUp')
    }

    // Animation Scale X
    function animateScaleX(elementIndex) {
      $(sliderPrimaryItems[elementIndex]).find(".slider-primary__image").css({
        "animation-duration": "500ms",
        "animation-timing-function": "cubic-bezier(.69,0,1,1)",
        "animation-name": "sangerScaleX",

      });
    }

    function animateScaleXReverser(elementIndex) {
      $(sliderPrimaryItems[elementIndex]).find(".slider-primary__image").css({
        "animation-duration": "500ms",
        "animation-timing-function": "cubic-bezier(0,0,1,-0.12)",
        "animation-name": "sangerScaleXReverser",
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
      $(sliderPrimaryItems[currentSlide]).find(".slider-primary__social").css({
        "animation-name": "sangerFadeOut"
      });

      setTimeout(() => {
        animateScaleX(nextSlide);
        animateFadeInUp(nextSlide, slideTime);
        $(sliderPrimaryItems[nextSlide]).find(".slider-primary__social").css({
          "animation-name": "sangerFadeInUp"
        });
        // $('.slider-primary').slick("setOption", "autoplaySpeed", slideTime.autoplaySpeed);
      }, 1000);
    })


    // Slider Secondary
    $('.slider-secondary').slick({
      dots: false,
      arrows: true,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 1500,
    })

    $('.about-member__list').slick({
      dots: false,
      arrows: true,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      // autoplay: true,
      autoplaySpeed: 5000,
      appendDots: $('.about-member__dots'),
      customPaging: function (slider, i) {
    
          let avatar = $(slider.$slides[i]).find('input[name=member_avatar]').val();
          let views = `<div class="member-dot-image"><img class="member-avatar" src="${avatar}" alt=""></div>`;
    
          return views;
      },
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
          }
        }
      ]
    })

    // Slider tertiary
    $('.about-partner__list').slick({
      rows: 1,
      dots: false,
      arrows: true,
      infinite: false,
      slidesToShow: 8,
      slidesToScroll: 8,
      // autoplay: true,
      autoplaySpeed: 5000,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            rows: 2,
            slidesToShow: 4,
            slidesToScroll: 4
          }
        },
        {
          breakpoint: 992,
          settings: {
            rows: 4,
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]
    })

    // Slider fourth
    $('.about-team__list--slider').slick({
      dots: false,
      arrows: false,
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      // autoplay: true,
      autoplaySpeed: 5000,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    })
  }); // end ready document
})(jQuery)