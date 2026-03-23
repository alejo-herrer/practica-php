<?php
    session_start();
    if(isset($_SESSION['usuario'])!='Alejandro'){
        header("location:login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
<div class="container">

    <a href='index.php'>Inicio</a>
    <a href='album.php'>Galeria</a>
    <a href='cerrar.php'>Cerrar</a>
