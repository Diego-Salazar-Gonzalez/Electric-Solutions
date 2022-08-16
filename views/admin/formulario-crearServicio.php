<fieldset>
    <legend>Informacion General</legend>
    <label for="titulo">Titulo:</label>
    <input type="text" id="titulo" name="servicio[titulo]" placeholder="Titulo Servicio" value="<?php echo s($servicio->titulo);?>">
    
    
    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" name="servicio[imagen]" accept="image/jpeg, image/png">
    <?php if($servicio->imagen) { ?>
        <img src="/imagenes/<?php echo $servicio->imagen ?>" class="imagen-small">
    <?php } ?>
    <label for="descripcion">Descripcion:</label>
    <textarea name="servicio[descripcion]" id="descripcion" ><?php echo s($servicio->descripcion);?></textarea>

</fieldset>

<fieldset>
    <legend>Informacion Objetiva</legend>
    <label for="puntos-clave">Puntos clave del Servicio ¿Porque Elejirlo?</label>
    <textarea name="servicio[puntosclave]" id="puntos-clave" ><?php echo s($servicio->puntosclave);?></textarea>
    <label for="titulo-persuasivo">Titulo Persuasivo</label>
    <input type="text" name="servicio[titulo_persuasivo]" placeholder="Titulo Persuasivo" value="<?php echo s($servicio->titulo_persuasivo)?>">
    <label for="subtitulo-persuasivo">Subtitulo Persuasivo</label>
    <input type="text" name="servicio[subtitulo_persuasivo]" placeholder="Subtitulo Persuasivo" value="<?php echo s($servicio->subtitulo_persuasivo)?>">
</fieldset>