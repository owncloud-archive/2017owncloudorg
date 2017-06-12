(function($) {

  $(function download_modals() {

   $('#instructions-server .btn-primary').on('click', function(e) {

     //Close the selection modal
     $('#instructions-server').modal('hide');

     //Open the Download modal as soon as the first modal has disappeared, but only if the button has been clicked

      $('#instructions-server').one('hidden.bs.modal', function (e) {

       $('#edition').modal('show');

      });

   });

  });

  $(function modal_clients() {

   $('#mobile').click(function () {
       $("#tab-desktop").removeClass("active");
       $("#tab-mobile").addClass("active");
       $(".nav-link.desktop").removeClass("active");
       $(".nav-link.mobile").addClass("active");    });
   $('#desktop').click(function () {
       $("#tab-mobile").removeClass("active");
       $("#tab-desktop").addClass("active");
       $(".nav-link.mobile").removeClass("active");
       $(".nav-link.desktop").addClass("active");
   });

  });

})(jQuery);
