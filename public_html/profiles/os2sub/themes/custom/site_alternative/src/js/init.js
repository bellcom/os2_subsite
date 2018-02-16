// Document ready
(function ($) {
    'use strict';

    //removing anchor tag when clicking the pager
    $('.menu-background-slideshow .widget_pager a').click(function (e) {
        e.preventDefault();
    });

    $('#views-exposed-form-os2sub-kulturnaut-multi-search-pane-activities-multi-search input').change(function(){
        $('#views-exposed-form-os2sub-kulturnaut-multi-search-pane-activities-multi-search button').unbind();
    });

    //removing gradient on mobile devices
    var windowsWidth = $(window).width();
    if (windowsWidth < 992 || navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
        $('.views-field-field-os2web-kulturnaut-slidesho .img-container').each(function( index, element ){
            var imageUrl = $(this).data("image");
            $( this ).css("background-image", "url('" + imageUrl + "')");
        });
    }

    // Add to calendar link transformation inside app
    if ($('body').hasClass('from-webapp')) {
        $('.addtocal_menu')
            .find('a[target=_blank]')
            .attr('target', '_system');
    }

})(jQuery);
