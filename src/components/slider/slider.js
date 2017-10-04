import 'flexslider';

const slider = () => {
  const $slider = jQuery('.flexslider');
  // Slider functions
  if (0 !== $slider.length) {
    $slider.flexslider({
      animation: 'fade',
      easing: 'swing',
      direction: 'horizontal',
      reverse: false,
      animationLoop: true,
      smoothHeight: true,
      startAt: 0,
      slideshow: true,
      slideshowSpeed: 7000,
      animationSpeed: 600,
      initDelay: 0,
      randomize: false,
      fadeFirstSlide: true,
      pauseOnAction: true,
      pauseOnHover: false,
      pauseInvisible: true,
      useCSS: true,
      touch: true,
      directionNav: true,
      prevText: '',
      nextText: ''
    });
  }
};

export default slider;
