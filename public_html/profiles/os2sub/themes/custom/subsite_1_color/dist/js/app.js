// |--------------------------------------------------------------------------
// | BS3 designer
// |--------------------------------------------------------------------------
// |
// | This jQuery script is written by
// | Morten Nissen
// |
// | - Optimize form elements
// | - Attach footer to bottom of page on non-touch devices
// | - Enable BS3 tooltips on non-touch devices
// | - Disable form autocomplete on non-touch devices
// | - Apply loader icon to .btn.btn-loader on click
// | - Use appear on non-touch devices
// |

// jscs:disable requireCamelCaseOrUpperCaseIdentifiers

var bs3Designer = (function ($) {
    'use strict';

    var Modernizr = {};
    var pub = {};

    /**
     * Instantiate
     */
    pub.init = function () {
        registerBootEventHandlers();
        registerEventHandlers();
    }

    /**
     * Register boot event handlers
     */
    function registerBootEventHandlers() {
        if ( ! Modernizr.touch) {
            footerAttached();
            optimizeFormElements();
        }

        appear();
        bs3Tooltip();
    }

    /**
     * Register event handlers
     */
    function registerEventHandlers() {

        $(window).resize(function () {
            footerAttached();
        });

        $('.btn-loader').on('click', function () {
            iconSpin($(this));
        });
    }

    /**
     * Footer attached
     */
    function footerAttached() {
        var $footer = $('.footer');
        var footerHeight = $footer.outerHeight(true);

        if ($('body').hasClass('footer-attached')) {
            $('.inner-wrapper').css('padding-bottom', footerHeight);
        }
    }

    /**
     * Appear
     */
    function appear() {
        var $appear = $('.appear');
        var $animation = $('.animation');

        if (Modernizr.touch || !Modernizr.cssanimations) {

            $animation
                .removeClass('animation')
                .removeClass('animation-appear-from-top')
                .removeClass('animation-appear-from-right')
                .removeClass('animation-appear-from-left')
                .removeClass('animation-appear-from-bottom')
                .removeClass('animation-appear-from-center');

            return false;
        }

        // Enable appear
        $appear.appear();

        // Force processing on animation objects
        $animation.appear({
            force_process: true
        });

        // Animation object has appeared
        $animation.on('appear', function () {

            var $element = $(this);
            var delay = $element.data('delay');

            setTimeout(function () {
                $element.addClass('animation-start');
            }, delay);
        });
    }

    /**
     * BS tooltip
     */
    function bs3Tooltip() {
        if (Modernizr.touch) {
            $('[data-toggle=tooltip]').tooltip('hide');

            return false;
        }

        $('[data-toggle=tooltip]').tooltip();
    }

    /**
     * Optimize form elements
     */
    function optimizeFormElements() {
        $('form').attr('autocomplete', 'off');
    }

    /**
     * Icon spin
     */
    function iconSpin($element) {
        $element.find('.icon').addClass('icon-spin');
    }

    return pub;
})(jQuery);

// |--------------------------------------------------------------------------
// | BS3 sidebar
// |--------------------------------------------------------------------------
// |
// | App alike navigation with sidebar.
// |
// | This jQuery script is written by
// | Morten Nissen
// |
var bs3Sidebar = (function ($) {
  'use strict';

  var Modernizr = {};
  var pub = {};

  /**
   * Instantiate
   */
  pub.init = function (options) {
    registerEventHandlers();
    registerBootEventHandlers();
  }

  /**
   * Register event handlers
   */
  function registerEventHandlers() {

    // Toggle sidebar
    $('[data-sidebar-toggle]').on('click', function (event) {
      event.preventDefault();

      var $element = $(this);

      toggleSidebar($element);
    });

    // Toggle dropdown
    $('.sidebar .sidebar-navigation-dropdown > a > .sidebar-navigation-dropdown-toggle').on('click', function (event) {
      event.preventDefault();

      var $element = $(this);

      toggleDropdown($element);
    });
  }

  /**
   * Register boot event handlers
   */
  function registerBootEventHandlers() {
  }

  /**
   * Toggle sidebar
   */
  function toggleSidebar($element) {
    var $body = $('body');
    var attribute = $element.attr('data-sidebar-toggle');

    if (attribute != 'left' && attribute != 'right') {
      return false;
    }

    if (attribute == 'left' && $body.hasClass('sidebar-right-open')) {
      $body.removeClass('sidebar-right-open');
    }

    if (attribute == 'right' && $body.hasClass('sidebar-left-open')) {
      $body.removeClass('sidebar-left-open');
    }

    $body.toggleClass('sidebar-' + attribute + '-open');
  }

  /**
   * Toggle dropdown
   */
  function toggleDropdown($element) {
    var $parent = $element.parent().parent();
    var parentIsActive = $parent.hasClass('active') || $parent.hasClass('active-trail') ? true : false;

    if (parentIsActive) {
      closeDropdown($parent);
    }

    else {
      openDropdown($parent);
    }
  }

  /**
   * Open dropdown
   */
  function openDropdown($parent) {
    var $dropdownMenu = $parent.find('> .sidebar-navigation-dropdown-menu');
    var dropdownMenuHeight = $dropdownMenu.outerHeight(true);
    var preAnimationCSS = { opacity: 0.1, height: 0, top: -20 };
    var animationCSS = { opacity: 1, height: dropdownMenuHeight, top: 0 };
    var callbackFunction = function () {
      $dropdownMenu.attr('style', '');
    };

    closeAllDropdownMenus($parent);

    $parent.addClass('active');

    $dropdownMenu
      .addClass('active')
      .css(preAnimationCSS);

    dropdownMenuAnimatedToggle($dropdownMenu, animationCSS, callbackFunction);
  }

  /**
   * Close dropdown
   */
  function closeDropdown($parent) {
    var $dropdownMenu = $parent.find('> .sidebar-navigation-dropdown-menu');
    var animationCSS = { height: 0, opacity: 0.1 };
    var callbackFunction = function () {

      // Remove all active class' from dropdown menu and all child elements with active states
      $dropdownMenu
        .removeClass('active')
        .attr('style', '')
        .find('.active:not(a)')
        .removeClass('active')
        .attr('style', '');

      $dropdownMenu
        .removeClass('active-trail')
        .attr('style', '')
        .find('.active-trail:not(a)')
        .removeClass('active-trail')
        .attr('style', '');
    };

    $parent
      .removeClass('active')
      .removeClass('active-trail');

    dropdownMenuAnimatedToggle($dropdownMenu, animationCSS, callbackFunction);
  }

  /**
   * Close all dropdown menus
   */
  function closeAllDropdownMenus($parent) {
    $parent
      .siblings('.sidebar-navigation-dropdown.active, .sidebar-navigation-dropdown.active-trail')
      .each(function () {
        var $element = $(this);

        closeDropdown($element);
      });
  }

  /**
   * Dropdown menu animated toggle
   */
  function dropdownMenuAnimatedToggle($dropdownMenu, animationCSS, callbackFunction) {
    $dropdownMenu.animate(
      animationCSS,
      {
        duration: 400,
        easing  : 'easeOutSine',
        complete: callbackFunction
      });
  }

  return pub;
})(jQuery);

// Document ready
(function ($) {
  'use strict';

  // Enable BS3 designer
  bs3Designer.init();

  // Enable BS3 sidebar
  bs3Sidebar.init();

})(jQuery);

jQuery(document).ready(function($){
(function() {

  var Modal = function() {
    this.Selector = {
      overlay: '.Modal-overlay',
      box: '.Modal-box',
      button: '[data-modal=button]'
    };

    this.Markup = {
      close: '<div class="Modal-close">&times;</div>',
      overlay: '<div class="Modal-overlay"></div>',
      box: '<div class="Modal-box"></div>'
    };

    this.youtubeID = false;
  };

  Modal.prototype = {

    toggleOverflow: function() {
      $('body').toggleClass('Modal-cancel-overflow');
    },

    videoContainer: function() {
      return '<div class="video-container"><iframe id="player" frameborder="0" allowfullscreen="1" title="YouTube video player" width="640" height="390" src="//www.youtube.com/embed/' + this.youtubeID + '?autoplay=1&rel=0" frameborder="0"></iframe></div>';
    },

    addOverlay: function() {
      var self = this;
      $(this.Markup.overlay).appendTo('body').fadeIn('slow', function() {
        self.toggleOverflow();
      });
      $(this.Selector.overlay).on('click touchstart', function() {
        self.closeModal();
      });
    },

    addModalBox: function() {
      $(this.Markup.box).appendTo(this.Selector.overlay);
    },

    buildModal: function(youtubeID) {
      this.addOverlay();
      this.addModalBox();
      $(this.Markup.close).appendTo(this.Selector.overlay);
      $(this.videoContainer(youtubeID)).appendTo(this.Selector.box);
    },

    closeModal: function() {
      this.toggleOverflow();
      $(this.Selector.overlay).fadeOut().detach();
      $(this.Selector.box).empty();
    },

    getYoutubeID: function() {
      return this.youtubeID;
    },

    setYoutubeID: function(href) {
      var id = '';
      if (href.indexOf('youtube.com') > -1) {
        // full Youtube link
        id = href.split('v=')[1];
      } else if (href.indexOf('youtu.be') > -1) {
        // shortened Youtube link
        id = href.split('.be/')[1];
      } else {
        // in case it's not a Youtube link, send them on their merry way
        document.location = href;
      }
      // If there's an ampersand, remove it and return what's left, otherwise return the ID
      // this.youtubeID = (id.indexOf('&') != -1) ? id.substring(0, amp) : id;
      this.youtubeID = id;
    },

    startup: function(href) {
      this.setYoutubeID(href);
      if (this.youtubeID) {
        this.buildModal();
      }
    }
  };

  $(document).ready(function() {
    var modal = new Modal();
    $(modal.Selector.button).on('click touchstart', function(e) {
      e.preventDefault();
      modal.startup(this.href);
    });
  });

})(this);
});

jQuery(document).ready(function($) {

    /*
     * jQuery simple and accessible hide-show system (collapsible regions), using ARIA
     * @version v1.7.0   
     * Website: https://a11y.nicolas-hoffmann.net/hide-show/
     * License MIT: https://github.com/nico3333fr/jquery-accessible-hide-show-aria/blob/master/LICENSE
     */
    // loading expand paragraphs
    // these are recommended settings by a11y experts. You may update to fulfill your needs, but be sure of what you’re doing.
    var attr_control = 'data-controls',
        attr_expanded = 'aria-expanded',
        attr_labelledby = 'data-labelledby',
        attr_hidden = 'data-hidden',
        $expandmore = $('.js-expandmore'),
        $body = $('body'),
        delay = 1500,
        hash = window.location.hash.replace("#", ""),
        multiexpandable = true,
        expand_all_text = 'Expand All',
        collapse_all_text = 'Collapse All';


    if ($expandmore.length) { // if there are at least one :)
        $expandmore.each(function(index_to_expand) {
            var $this = $(this),
                index_lisible = index_to_expand + 1,
                options = $this.data(),
                $hideshow_prefix_classes = typeof options.hideshowPrefixClass !== 'undefined' ? options.hideshowPrefixClass + '-' : '',
                $to_expand = $this.next(".js-to_expand"),
                $expandmore_text = $this.html();

            $this.html('<span type="button" class="' + $hideshow_prefix_classes + 'expandmore__button js-expandmore-button"><span class="buttontext">' + $expandmore_text + '</span></span>');
            var $button = $this.children('.js-expandmore-button');

            $to_expand.addClass($hideshow_prefix_classes + 'expandmore__to_expand').stop().delay(delay).queue(function() {
                var $this = $(this);
                if ($this.hasClass('js-first_load')) {
                    $this.removeClass('js-first_load');
                }
            });

            $button.attr('id', 'label_expand_' + index_lisible);
            $button.attr(attr_control, 'expand_' + index_lisible);
            $button.attr(attr_expanded, 'false');

            $to_expand.attr('id', 'expand_' + index_lisible);
            $to_expand.attr(attr_hidden, 'true');
            $to_expand.attr(attr_labelledby, 'label_expand_' + index_lisible);

            // quick tip to open (if it has class is-opened or if hash is in expand)
            if ($to_expand.hasClass('is-opened') || (hash !== "" && $to_expand.find($("#" + hash)).length)) {
                $button.addClass('is-opened').attr(attr_expanded, 'true');
                $to_expand.removeClass('is-opened').removeAttr(attr_hidden);
            }


        });


    }


    $body.on('click', '.js-expandmore-button', function(event) {
        var $this = $(this),
            $destination = $('#' + $this.attr(attr_control));

        if ($this.attr(attr_expanded) === 'false') {

            if (multiexpandable === false) {
                $('.js-expandmore-button').removeClass('is-opened').attr(attr_expanded, 'false');
                $('.js-to_expand').attr(attr_hidden, 'true');
            }

            $this.addClass('is-opened').attr(attr_expanded, 'true');
            $destination.removeAttr(attr_hidden);
        } else {
            $this.removeClass('is-opened').attr(attr_expanded, 'false');
            $destination.attr(attr_hidden, 'true');
        }

        event.preventDefault();

    });

    $body.on('click keydown', '.js-expandmore', function(event) {
        var $this = $(this),
            $target = $(event.target),
            $button_in = $this.find('.js-expandmore-button');

        if (!$target.is($button_in) && !$target.closest($button_in).length) {

            if (event.type === 'click') {
                $button_in.trigger('click');
                return false;
            }
            if (event.type === 'keydown' && (event.keyCode === 13 || event.keyCode === 32)) {
                $button_in.trigger('click');
                return false;
            }

        }


    });

    $body.on('click keydown', '.js-expandmore-all', function(event) {
        var $this = $(this),
            is_expanded = $this.attr('data-expand'),
            $all_buttons = $('.js-expandmore-button'),
            $all_destinations = $('.js-to_expand');

        if (
            event.type === 'click' ||
            (event.type === 'keydown' && (event.keyCode === 13 || event.keyCode === 32))
        ) {
            if (is_expanded === 'true') {

                $all_buttons.addClass('is-opened').attr(attr_expanded, 'true');
                $all_destinations.removeAttr(attr_hidden);
                $this.attr('data-expand', 'false').html(collapse_all_text);
            } else {
                $all_buttons.removeClass('is-opened').attr(attr_expanded, 'false');
                $all_destinations.attr(attr_hidden, 'true');
                $this.attr('data-expand', 'true').html(expand_all_text);
            }

        }


    });


});

(function() {

  var Modal = function() {
    this.Selector = {
      overlay: '.Modal-overlay',
      box: '.Modal-box',
      button: '[data-modal=button]'
    };

    this.Markup = {
      close: '<div class="Modal-close">&times;</div>',
      overlay: '<div class="Modal-overlay"></div>',
      box: '<div class="Modal-box"></div>'
    };

    this.youtubeID = false;
  };

  Modal.prototype = {

    toggleOverflow: function() {
      $('body').toggleClass('Modal-cancel-overflow');
    },

    videoContainer: function() {
      return '<div class="video-container"><iframe id="player" frameborder="0" allowfullscreen="1" title="YouTube video player" width="640" height="390" src="//www.youtube.com/embed/' + this.youtubeID + '?autoplay=1&rel=0" frameborder="0"></iframe></div>';
    },

    addOverlay: function() {
      var self = this;
      $(this.Markup.overlay).appendTo('body').fadeIn('slow', function() {
        self.toggleOverflow();
      });
      $(this.Selector.overlay).on('click touchstart', function() {
        self.closeModal();
      });
    },

    addModalBox: function() {
      $(this.Markup.box).appendTo(this.Selector.overlay);
    },

    buildModal: function(youtubeID) {
      this.addOverlay();
      this.addModalBox();
      $(this.Markup.close).appendTo(this.Selector.overlay);
      $(this.videoContainer(youtubeID)).appendTo(this.Selector.box);
    },

    closeModal: function() {
      this.toggleOverflow();
      $(this.Selector.overlay).fadeOut().detach();
      $(this.Selector.box).empty();
    },

    getYoutubeID: function() {
      return this.youtubeID;
    },

    setYoutubeID: function(href) {
      var id = '';
      if (href.indexOf('youtube.com') > -1) {
        // full Youtube link
        id = href.split('v=')[1];
      } else if (href.indexOf('youtu.be') > -1) {
        // shortened Youtube link
        id = href.split('.be/')[1];
      } else {
        // in case it's not a Youtube link, send them on their merry way
        document.location = href;
      }
      // If there's an ampersand, remove it and return what's left, otherwise return the ID
      // this.youtubeID = (id.indexOf('&') != -1) ? id.substring(0, amp) : id;
      this.youtubeID = id;
    },

    startup: function(href) {
      this.setYoutubeID(href);
      if (this.youtubeID) {
        this.buildModal();
      }
    }
  };

  $(document).ready(function() {
    var modal = new Modal();
    $(modal.Selector.button).on('click touchstart', function(e) {
      e.preventDefault();
      modal.startup(this.href);
    });
  });

})(this);

//# sourceMappingURL=app.js.map