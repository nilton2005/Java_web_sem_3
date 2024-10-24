(function ($) { // Begin jQuery
  $(function () { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function (e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function () {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function () {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function () {
      this.classList.toggle('active');
    });
  }); // end DOM ready

  // js for the slider
  $(document).ready(function(){
    $("#client-slider").owlCarousel({
      items:3,
      itemDesktop:[1000,3],
      itemsDesktopSmall:[980, 2],
      itemsTablet:[768, 2],
      itemsMobile:[680, 1],
      pagination:true,
      navigation:false,
      slideSpeed:1500,
      autoPlay:true
    });
  });


})(jQuery); // end jQuery
console.log("hello");


