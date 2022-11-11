<?php

    require_once('connection.php');
if(empty($_GET)){

    $query = mysqli_query($connection, "SELECT * FROM category");
    $result = array();
    while($row = mysqli_fetch_array($query)){
        array_push( $result, array (
            'id' => $row['id'],
            'name' => $row['name'],
        ) );
    }
    echo json_encode (
        array( 'result' => $result )
    );
} else {
    $query = mysqli_query($connection, "SELECT * FROM category where id=". $_GET['id']);
    
    $result = array();
    while($row = $query => fetch_assoc()){
        $result = array (
            'id' => $row['id'],
            'name' => $row['name'],
        ) 
        echo json_encode (
        $result
        );
    }

}
?>