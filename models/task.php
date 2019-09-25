<?php
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=tasks','debian-sys-maint','sUwcklCMyaIUtFcw');

    $query = $pdo->prepare('SELECT * FROM tasks');

    $query-> execute();

    $results = $query -> fetchAll();
    die(var_dump($results['0']['name']));
    $task = $results[0];

// $task = [
//     'nom' => 'Comprar llet',
//     'descripcio' => 'al lidl',
//     'estat' => false

// ];