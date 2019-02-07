<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>

        <div class="container">

            <h1>Le nostre stanze</h1>

            <table class="table">
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
                <tbody>
                    <?php include 'database.php'; ?>

                    <?php foreach ($rooms as $room) { ?>
                        <tr>
                            <td><?php echo $room['id']; ?></td>
                            <td><?php echo $room['room_number']; ?></td>
                            <td><?php echo $room['floor']; ?></td>
                            <td><?php echo $room['beds']; ?></td>
                            <td><?php echo $room['created_at']; ?></td>
                            <td><?php echo $room['updated_at']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <script src="script.js" charset="utf-8"></script>
    </body>
</html>
