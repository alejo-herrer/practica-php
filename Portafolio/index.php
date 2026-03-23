
    <?php 

        include('cabecera.php');
        include('conexion.php');

        $objetoConexion = new conexion();
        $proyectos = $objetoConexion->consultar("SELECT * FROM `fotos`");
    
    ?>

    <div class="row align-items-md-stretch">
        <div class="col-md-12">
            <div
                style='padding: 100px 75px' class="h-100 text-black bg-light  rounded-3"
            >
                <h1>Bienvenidos a mi album</h1>
                <p>
                    Este es mi album personal
                </p>
                <hr>
                <button
                    class="btn text-black btn-outline-secondary"
                >
                    Más información
                </button>
            </div>
        </div>
    </div>
    
    <div class="row">
    
    <?php foreach($proyectos as $proyecto){ ?>


            <div class="col-3">
                <div class="card">
                    <img style="width: 100%; height:200px; object-fit: contain;" src="img/<?php echo $proyecto['imagen']; ?>"  class="card-img-top" alt="<?php echo $proyecto['id']   ?>">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $proyecto['nombre']   ?></h3>
                        <p class="card-text"><?php   echo $proyecto['descripcion']  ?></p>
                    </div>
                </div>
            </div>
        
        

    <?php } ?>

    </div>

    

    <?php include('pie.php') ?>