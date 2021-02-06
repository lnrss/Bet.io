//! LOGIN EYE

$(".toggle__password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

//! POPUP

$('.bx-help-circle').webuiPopover({title:'Les bonus',content:'Les bonus sont gratuits, ils permettent aux nouveaux joueurs d\'obtenir des crédits gratuitement !',style:'inverse',animation:'pop',placement:'auto-right',trigger:'hover'});