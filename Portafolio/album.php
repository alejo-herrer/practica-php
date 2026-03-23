    
    <?php 
        include('cabecera.php'); 
        include('conexion.php');
    ?>

    <?php

        if($_POST){
            print_r($_POST['nombre']);

            $nombre=$_POST['nombre'];
            $descripcion=$_POST['descripcion'];

            $foto=$_FILES['foto']['name'];


            $sql = "INSERT INTO `fotos` (`id`,`nombre`,`imagen`,`descripcion`) VALUES (NULL,'$nombre','$foto','$descripcion')";
            $objConexion = new conexion();
            $objConexion->ejecutar($sql);
        }

        $objConexion = new conexion();
        $resultado= $objConexion->consultar("SELECT * FROM `fotos`");

        if($_GET){
           $id=$_GET['borrar'];
           $sql = "DELETE FROM `fotos` WHERE `id` = $id";
           $objConexion = new conexion();
           $objConexion->ejecutar($sql);
           header('location:album.php');
        }


    ?>


    <div
        class="row justify-content-center g-2"
    >
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-light bg-primary">Sube una foto a tu album</div>
                <div class="card-body">
                    <form action='album.php' method='post' enctype='multipart/form-data'>

                        Titulo de la foto:
                        <input class='form-control' type='text' name='nombre' id=''>
                        <br>
                        Foto:
                        <input class='form-control' type='file' name='foto' id='';>
                        <br>
                        Descripción:
                        <textarea class='form-control' name='descripcion' id='';></textarea>
                        <br>
                        <input class='btn btn-primary' type='submit' value='Subir foto'>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div
                class="table-responsive"
            >
                <table
                    class="table table-light"
                >
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombe</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acciones</th>                            
                        </tr>
                    </thead>
                    <?php foreach($resultado as $imagen){ ?>
                        <tbody>
                            <tr class="">
                                <td scope="row"><?php echo $imagen['id']; ?></td>
                                <td><?php echo $imagen['nombre']; ?></td>
                                <td><?php echo $imagen['imagen']; ?></td>
                                <td><?php echo $imagen['descripcion']; ?></td>
                                <td><a class="btn btn-danger" href="?borrar=<?php echo $imagen['id']; ?>" role="button">Eliminar</a></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>

    </div>
    
    <?php include('pie.php') ?>