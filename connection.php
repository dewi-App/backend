<?php

    define('host', 'localhost');
    define('user', 'root');
    define('pass', '');
    define('db', 'homepagedewi');

    $connection = mysqli_connect(host, user, pass, db) or die
    ('unable connect');

    define('host', 'localhost');
    define('user', 'root');
    define('pass', '');
    define('db', 'destinasi');

    $connection = mysqli_connect(host, user, pass, db) or die
    ('unable connect');

?>