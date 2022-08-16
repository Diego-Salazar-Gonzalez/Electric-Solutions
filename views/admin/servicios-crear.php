<?php include_once __DIR__ .'/../templates/barra.php';?>
    <main class="contenedor-crear">
        <h1>Nuevo Servicio</h1>
        <a href="/admin" class="boton-volver">Volver</a>
        <?php foreach($alertas as $alerta):?>
            <div class="alerta">
            <div class="error">
                <?php echo $alerta;?>
            </div>
            </div>
        <?php endforeach;?>
   

    
        <form class="formulario-crearServicio contenido-principal" method="POST" enctype="multipart/form-data">
         <?php include __DIR__ . '/formulario-crearServicio.php'; ?>
        <div class="boton-crearServicio">
        <input type="submit" value="Crear Servicio" >
        </div>
         
        </form>
    
    </main>



<?php include_once __DIR__ .'/../paginas/footer-principal.php';?>