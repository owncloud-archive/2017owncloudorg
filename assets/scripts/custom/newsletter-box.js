(function($) {

  $(function newsletter_box() {

   $.fn.shownewsletter = function() {
    $('#subscribe').delay(3000).slideDown();
    $('#subscribe .close').click(function () {
     $(this).parent().slideUp('fast');
     return false;
    });
   };

   $('#server').click(function () {
    $.fn.shownewsletter();
   });

   if(window.location.hash) {
    var hash = window.location.hash.substring(1);
    if (hash === 'instructions-server') {
     $.fn.shownewsletter();
    }
   }

  });

})(jQuery);
