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
