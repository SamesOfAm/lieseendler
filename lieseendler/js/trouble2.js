

(function($) {
  $(document).ready(function () {

      var videoElement = document.getElementById("fullscreen");
      function toggleFullScreen() {
        if (!document.mozFullScreen && !document.webkitFullScreen) {
          if (videoElement.mozRequestFullScreen) {
            videoElement.mozRequestFullScreen();
          } else {
            videoElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
          }
        } else {
          if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
          } else {
            document.webkitCancelFullScreen();
          }
        }
      }
      
      document.addEventListener("keydown", function(e) {
        if (e.keyCode == 13) {
          toggleFullScreen();
        }
      }, false);


      $('.gif').click(function () {
        $(this).hide();
        var next = $(this).next();
        console.log(next.length);
        if (next.length == 0) {
            next = $(this).parent().find('.gif').first();
            }
        next.show();
      });

      $("#btn-save").click( function() {
        var filename = $("#input-fileName").val()
        var blob = new Blob([document.head.outerHTML + document.body.outerHTML], {type: "text/plain;charset=utf-8"});
        saveAs(blob, filename + ".html");
      });

  });
})(jQuery);
