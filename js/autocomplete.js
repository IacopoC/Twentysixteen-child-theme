jQuery('#search-film-imdb').autocomplete({
    source: function (request, response) {
        jQuery.getJSON("https://www.omdbapi.com/?apikey=e430f4b6&type=movie&s=" + request.term, function (data) {
            response(jQuery.map(data.Search, function (value) {
                return value.Title;
            }));
        });
    },
    select: function(event, ui) {
        var url_append = "http://site-1.test/api-ricerca/?t=";
        var label = ui.item.label;
        var res = label.replace(new RegExp(" ", "g"), "+").replace(new RegExp("'", "g"), "");
        window.location.href = url_append + res;
    },
    minLength: 2,
    delay: 100
});
