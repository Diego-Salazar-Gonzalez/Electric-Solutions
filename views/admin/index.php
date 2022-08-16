<?php include_once __DIR__ .'/../templates/barra.php';?>
    <main>
    <div class="admin-header">
        <h1>Area De Administracion</h1>
    </div>
    <div class="contenedor-tabla_servicio">
    <div class="crear-servicio">
      <a href="/servicios/crear" >Nuevo Servicio</a>
    </div>
   
    <h2>Servicios</h2>
    <?php 
        $mensaje = mostrarAlerta( intval( $resultado) );
        if($mensaje) { ?>
        <div class="alerta">
            <p class="exito admin"><?php echo s($mensaje); ?></p>
            </div>
        <?php } 
    ?>
    <table class="contenedor servicios-tabla contenido-principal">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Descripcion</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($servicios as $servicio): ?>
            <tr>
                <td><?php echo $servicio->id; ?></td> 
                <td><?php echo $servicio->titulo; ?></td>
                <td> <img src="/imagenes/<?php echo $servicio->imagen; ?>" class="imagen-tabla"> </td>
                <td><?php echo $servicio->descripcion; ?></td>
                <td class="botones">
                    <form action="/servicios/eliminar" method="POST">
                        <input type="hidden" name="id" value="<?php echo $servicio->id;?>">
                        <input type="hidden" name="tipo" value="propiedad">
                        <input type="submit"  value="Eliminar" class="boton-eliminar">
                    </form>
                    <a href="servicios/actualizar?id=<?php echo $servicio->id;?>" class="boton-actualizar">Actualizar</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    
    </div>

    </main>

<?php include_once __DIR__ .'/../paginas/footer-principal.php';?>