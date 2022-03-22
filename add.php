<?php

    $nombre = $_POST['nombre'];
    $telefono = $_POST['tlf'];
    $email = $_POST['email'];

    $libro = $_POST['libro'];
    $cantidad = $_POST['cont'];


    $myJson = new \stdClass();;
    $myJson->success = true;
    $myJson->nombre = $nombre;
    $myJson->telefono = $telefono;
    $myJson->email = $email;
    $myJson->libro = $libro;
    $myJson->cantidad = $cantidad;

   
    $fileTmpPath = $_FILES['fileselect']['tmp_name'];

    $myJson->path = $fileTmpPath;

    $nombre_archivo = $_FILES['fileselect']['name'];
    $tipo_archivo = $_FILES['fileselect']['type'];
    $tamano_archivo = $_FILES['fileselect']['size'];

    $uploadFileDir = './imgs/';
    $dest_path = $uploadFileDir . $nombre_archivo;

    
    if (!(strpos($tipo_archivo, "jpeg")) && ($tamano_archivo > 2000)) {
        $myJson =  ('La extensión o el tamaño de los archivos no es correcta.');
    }
    
    echo json_encode($myJson);

