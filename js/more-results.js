
jQuery(document).ready(function(){
    jQuery(".btn-more-results").click(function(){
        jQuery(this).hide();
        var get_query = jQuery('input[name="t"]').val();
        var results = get_query.replace(new RegExp(" ", "g"), "+");

        jQuery.ajax({
            url: "https://www.omdbapi.com/?apikey=e430f4b6&type=movie&s=" + results + "&page=2",
            dataType:'json',
            success: function(result) {
                "use strict";
                  jQuery.each(result.Search, function(index, value){
                      if(value['Poster'] == 'N/A') {
                          jQuery("#more-results").append("<a href=/film-api/?id=" + value['imdbID'] + ">" +
                              "<div class='result-imdb'>" + "<div class=\"film-descr\">" +
                              "<h3>" + value['Title'] + "</h3>" +
                              "<p>" + value['Year'] + "-" + value['Type'] + " <img class=\"cinema-icon\" src=\"/wp-content/uploads/2019/01/cinema-icon.png\"/></p></div></div></a>");
                      } else {
                          jQuery("#more-results").append("<a href=/film-api/?id=" + value['imdbID'] + "><div class='result-imdb'>" +
                              "<div class=\"poster-box\"><img class=\"poster-img\" src=" + value['Poster'] + "></div>" +
                              "<div class=\"film-descr\"><h3>" + value['Title'] + "</h3>" +
                              "<p>" + value['Year'] + "-" + value['Type'] + " <img class=\"cinema-icon\" src=\"/wp-content/uploads/2019/01/cinema-icon.png\"/></p></div></a>");
                      }
                })
            },
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    });
});