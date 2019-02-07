
// ------ Chiamata al localhost -------

$(document).ready(function() {

    $.ajax({
        url: 'http://localhost/db-ex-4/server.php',
        method: 'GET',
        success: function(data)
        {
            var results = JSON.parse(data);

            printResults(results);
        },
        error: function()
        {
            alert('Errore');
        }
    });
});


// Stampa risultati Prenotazioni (Handlebars)

function printResults(results)
{
    for (var i = 0; i < results.length; i++) {

        var result = results[i];

        //var source   = document.getElementById("entry-template").innerHTML;

        var source   = $('#template').html();
        var template = Handlebars.compile(source);

        var context = {
            'id': result.id,
            'room_number': result.room_number,
            'floor': result.floor,
            'beds': result.beds,
            'created_at': result.created_at,
            'updated_at': result.updated_at
        };
        var html = template(context);

        $('tbody').append(html);
    }

}
