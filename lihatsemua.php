<?php

require_once('connection.php');

    if (empty($_GET)) {
    $query = mysqli_query($connection, "SELECT * FROM destinasi");

    $result = array();
    while($row = mysqli_fetch_array($query)){
        array_push( $result, array (
            'id' => $row['id'],
            'name' => $row['name'],
            'category_id' => $row['category_id'],
            'rating' => $row['rating'],
            'description' => $row['description'],
        ) );
    }

    echo json_encode (
        array( 'result' => $result )
    );
} else {
    $query = mysqli_query($connection, "SELECT * FROM data where id=". $_GET['id']);
    echo $_GET['id'];
}



?>