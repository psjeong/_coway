/*

http://ety.kr

*/

/*

$(function() {

	// navbar
	const $dropdown = $(".dropdown");
	const $dropdownToggle = $(".dropdown-toggle");
	const $dropdownMenu = $(".dropdown-menu");
	const showClass = "show";

	$(window).on("load resize", function() {
	  if (this.matchMedia("(min-width: 768px)").matches) {
		$dropdown.hover(
		  function() {
			const $this = $(this);
			$this.addClass(showClass);
			$this.find($dropdownToggle).attr("aria-expanded", "true");
			$this.find($dropdownMenu).addClass(showClass);
		  },
		  function() {
			const $this = $(this);
			$this.removeClass(showClass);
			$this.find($dropdownToggle).attr("aria-expanded", "false");
			$this.find($dropdownMenu).removeClass(showClass);
		  }
		);
	  } else {
		$dropdown.off("mouseenter mouseleave");
	  }
	});

});
*/
$(function(){

    $(window).scroll(function(){
     if( $(window).scrollTop() > 0){
       $('body').addClass('scroll');
     }else{
       $('body').removeClass('scroll');
     }

   });

});


  $(document).ready(function(){
    /* 슬라이더 - 3칼럼노출 */
    var slider_column = $('#sliderBanner').owlCarousel({
      items:1,
      loop:true,
      mouseDrag:false,
      nav:true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      center: false,
      margin: 10,
      lazyLoad:true
    });

  });

  AOS.init({
  // Global settings:
  disable: false,
  startEvent: 'DOMContentLoaded',
  initClassName: 'aos-init',
  animatedClassName: 'aos-animate',
  useClassNames: false,
  disableMutationObserver: false,
  debounceDelay: 50,
  throttleDelay: 99,

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom',
  // defines which position of the element regarding to window should trigger the animation
});

// $(function(){
//
//     $(window).scroll(function(){
//      if( $(window).scrollTop() > 0){
//        $('.page_animate').addClass('animate');
//      }else{
//        $('.page_animate').removeClass('animate');
//      }
//
//    });
//
// });

// $(window).scroll(function() {
//    if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
//        $(".page_animate").removeClass("page_animate");
// 		$(".animate").removeClass("animate");
//    }
// });
