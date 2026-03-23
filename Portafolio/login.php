<?php

    if($_POST){
        if($_POST['usuario']=='Alejandro' && $_POST['contraseña']=='12345'){

            session_start();

            $_SESSION['usuario'] = 'Alejandro';
            $_SESSION['status'] = 'logueado';

            echo 'Bienvenido '.$_SESSION['usuario'].' estas '.$_SESSION['status'];
            header("location:index.php");

        }else{
            echo "<script> alert('Datos incorrectos, intente de nuevo') </script>";
        }
    }

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body >
        
        <div class='container'>
            <div
                class="row justify-content-center align-items-center g-2"
            >
                <div class="col"></div>

                <div class="col">
                    <div class="card mt-5 ">
                        <div class="card-header text-light bg-primary"><Strong>INICIAR SESIÓN</Strong></div>
                        <div class="card-body">
                            <form action='login.php' method='post'>

                                Usuario: <input class='form-control bg-light' type='text' name='usuario' id=''>
                                <br>
                                Contraseña: <input class='form-control bg-light' type='password' name='contraseña' id=''>
                                <br>
                                <button class='btn btn-primary' type='submit'>Entrar al portafolio</button>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col"></div>
            </div>
        </div>    

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
