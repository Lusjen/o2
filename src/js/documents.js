$('.document-slider').slick({
    autoplay: false,
    slidesToShow: 4,
  	slidesToScroll: 1,
  	speed: 1200,
  	autoplaySpeed: 500,
    arrows: true,
    infinite: false,
  	prevArrow: $('.document-slider__button_prev'),
	nextArrow: $('.document-slider__button_next'),
  	responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
      }
    }
    ]
  });

