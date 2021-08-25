<?php // stop fixed with jquery ?>
<script>
function checkOffset() {
       if ($('.widget-area-wrapper').offset().top + $('.widget-area-wrapper').height()
           >= $('.site-footer').offset().top - 10)
       $('.widget-area-wrapper').addClass('absoluter');


       if ($(document).scrollTop() + window.innerHeight < $('.site-footer').offset().top)
                      $('.widget-area-wrapper').removeClass('absoluter');
   }

   $(document).scroll(function() {
       checkOffset();
   });
</script>
