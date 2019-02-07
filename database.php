

<?php

    // Connessione al server con php plain

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'hotel_booleana';


    // Connessione


    $conn = new mysqli($servername, $username, $password, $dbname);


    // Controllo connection

    if ($conn->connect_error) {

    echo ( 'Connessione fallita: ' . $conn->connect_error);
    }

    // Inseriamo la query sql

    $sql = 'SELECT prenotazioni_has_ospiti.id, prenotazione_id, ospite_id, name, lastname, date_of_birth FROM `prenotazioni_has_ospiti` JOIN ospiti ON ospiti.id = prenotazioni_has_ospiti.ospite_id;';

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      //Creiamo l'array che voglio passare dal database,
      $rooms = [];

      while($row = $result->fetch_assoc())
      {
      $rooms[] = $row;
      }
    }

      // var_dump($rooms);die();

    $conn->close();


?>
