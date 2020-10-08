const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function() {

    $.ajax(
      {
        "url": "http://localhost/php-ajax-dischi/server.php",
        "method": "GET",
        "success": function(data) {
          renderAlbums(data);
        },
        "error": function(error) {
          alert("error");
        }
      }
    );


});

// Funzione renderAlbums
function renderAlbums(data) {
  // Preparo il template Handlebars
  var source = $("#album-template").html();
  var template = Handlebars.compile(source);
  // Per ognuno degli album,
  for (var i = 0; i < data.length; i++) {
    // compilo il template con i dati relativi
    var html = template(data[i]);
    // e appendo l'html risultante nella lista degli album
    $(".albums-list").append(html);
  }

}
