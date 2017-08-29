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
