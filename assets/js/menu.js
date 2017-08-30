function menu_close() {
  $("#menu-sidebar").hide()
  $("#menu-overlay").hide()
  $("#search-bar").hide()
}
function menu_open()
{
  search_close()
  $("#menu-sidebar").show()
  $("#menu-overlay").show()
}

function search_toggle() {
  $("#search-bar").toggle()
  $("#search-overlay").toggle()
}
function search_close() {
  $("#search-bar").hide()
  $("#search-overlay").hide()
}

$( document ).ready(function() {
  $(".open-newsletter-modal").click(function(e) {
    $('#newsletter-modal-form')[0].reset();
    $("#newsletter-modal-form").show()
    $("#newsletter-modal-error").hide()
    $("#newsletter-modal-sucess").hide()
    $("#newsletter-modal-submit").show()
    $("#newsletter-modal-close").html("Annuler")
    $("#newsletter-modal").show();
    e.preventDefault();
  });
});

function close_newsletter_modal() {
  $("#newsletter-modal").hide();
}

$("#newsletter-modal-form").submit(function(e) {
  submit_newsletter_modal()
  e.preventDefault()
})

function submit_newsletter_modal() {
  $.ajax({
    type:"POST",
    url:"/?na=s",
    data: $("#newsletter-modal-form").serialize(),
    success: function (da) {
      if(da=='Wrong email'){
        $("#newsletter-modal-error").show()
        $("#newsletter-modal-sucess").hide()
      }
      else {
        $("#newsletter-modal-error").hide()
        $("#newsletter-modal-sucess").show()
        $("#newsletter-modal-form").hide()
        $("#newsletter-modal-submit").hide()
        $("#newsletter-modal-close").html("Fermer")
      }
    }
  })
}
