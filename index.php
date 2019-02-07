<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.min.js" charset="utf-8"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title></title>
    </head>
    <body>
        <div class="container">
            <h1>Le nostre stanze</h1>
            <table class="table_Hotel">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Numero Stanza</th>
                        <th>Piano</th>
                        <th>Numero Letti</th>
                        <th>Creata il</th>
                        <th>Aggiornata il</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>






        <script id="template" type="text/x-handlebars-template">
          <tr>
              <td>{{id}}</td>
              <td>{{room_number}}</td>
              <td>{{floor}}</td>
              <td>{{beds}}</td>
              <td>{{created_at}}</td>
              <td>{{updated_at}}</td>
          </tr>
        </script>
        <script src="main.js" charset="utf-8"></script>
    </body>
