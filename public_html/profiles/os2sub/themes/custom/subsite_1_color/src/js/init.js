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

