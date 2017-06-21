// Document ready
(function ($) {
  'use strict';

  // Enable BS3 designer
  bs3Designer.init();

  // Enable BS3 sidebar
  bs3Sidebar.init();

  // Enable popover button
  popoverButton.init();

  // Self-service toggle
  equalHeight.init();

  // Self-service toggle
  os2SelfServiceToggle.init();

  // Accordion
  os2Accordion.init();

  // News
  newsIsotoper.init();

  // Megamenu
  toggleMegamenu();

  function toggleMegamenu() {
    var $toggle = $('.js-megamenu-toggle');
    var default_zone_menu_height = jQuery('#toplevelmenu').outerHeight();
    $('.megamenu-panel').each(function() {
      $('<a></a>').attr('href', '#').addClass('js-megamenu-close').appendTo(this);
    });

    $toggle.on('click', function(event) {
      event.preventDefault();

      var $parent = $(this).parents('.megamenu'),
          $megamenu = $parent.find('.megamenu-panel');
     // var megamenu_height =$megamenu.height();
      if (!$parent.hasClass('open')){
        //$('#toplevelmenu').animate({'height' : default_zone_menu_height + megamenu_height});
        jQuery('.megamenu-panel').hide();

        var $megamenu = $parent.find('.megamenu-panel');
        $megamenu.show();
        var megamenu_height = $parent.find('.megamenu-panel').height();
        $megamenu.addClass('clearfix');
        jQuery('#toplevelmenu').height(default_zone_menu_height + megamenu_height);
        jQuery('.megamenu').not($parent).removeClass('open');
        $parent.addClass('open');
      }
     });

    $('.js-megamenu-close').on('click', function(event){
      event.preventDefault();
      var $parent = $(this).closest('.megamenu');
      if($parent.hasClass('open')){
        $parent.removeClass('open');
        $('#toplevelmenu').height(default_zone_menu_height);
        $('.megamenu-panel').hide();
      }
    });
  }
})(jQuery);

/*

function initMegamenuToggle() {
  var $parent = jQuery(this).closest('.megamenu');

  if (!$parent.hasClass('open')) {
    jQuery('.megamenu-panel').hide();

    var $megamenu = $parent.find('.megamenu-panel');
    $megamenu.show();
    var megamenu_height = $parent.find('.megamenu-panel').height();
    $megamenu.find('.panel-display').addClass('clearfix');
    jQuery('#zone-menu').animate({
      'height': default_zone_menu_height + megamenu_height
    });
    jQuery('.megamenu').not($parent).removeClass('open');
    $parent.addClass('open');
  }

  return false;
}
*/
