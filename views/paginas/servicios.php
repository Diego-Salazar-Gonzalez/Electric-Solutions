<?php include_once __DIR__ .'/../templates/barra.php';?>

<div class="servicios-header">
    <h2>
        Servicios
    </h2>
</div>

<div class="servicios-electricos contenido-principal">    
<?php foreach($servicios as $servicio) :?>
    <div class= "sevicio">
        <img src="/imagenes/<?php echo $servicio->imagen;?>" alt="">
        <h3>
            <?php echo $servicio->titulo;?>
        </h3>
        <p>
           <?php echo $servicio->descripcion;?>
        </p>
       
        <a href="/servicios/servicio?id=<?php echo $servicio->id;?>" class="boton">Ver servicio</a>
    </div>
    <?php endforeach;?>
    <!-- <div class= "sevicio">
        <img src="/build/img/servicios.jpg" alt="">
        <h3>
            Servicio 2
        </h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus inventore,
            provident libero, ea et, architecto odio incidunt iusto accusantium maxime in.
            Assumenda fugiat quibusdam delectus cumque, fugit nostrum dolorum quas.
            Lorem ipsum dolor sit amet consectetur 
        </p>
        <a href="/servicios/servicio" class="boton">Ver servicio</a>
    </div>
    <div class= "sevicio">
        <img src="/build/img/servicios.jpg" alt="">
        <h3>
            Servicio 3
        </h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus inventore,
            provident libero, ea et, architecto odio incidunt iusto accusantium maxime in.
            Assumenda fugiat quibusdam delectus cumque, fugit nostrum dolorum quas.
            Lorem ipsum dolor sit amet consectetur 
        </p>
        <a href="/servicios/servicio" class="boton">Ver servicio</a>
    </div>
    <div class= "sevicio">
        <img src="/build/img/servicios.jpg" alt="">
        <h3>
            Servicio 4
        </h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus inventore,
            provident libero, ea et, architecto odio incidunt iusto accusantium maxime in.
            Assumenda fugiat quibusdam delectus cumque, fugit nostrum dolorum quas.
            Lorem ipsum dolor sit amet consectetur 
        </p>
        <a href="/servicios/servicio" class="boton">Ver servicio</a>
    </div>
    <div class= "sevicio">
        <img src="/build/img/servicios.jpg" alt="">
        <h3>
            Servicio 5
        </h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus inventore,
            provident libero, ea et, architecto odio incidunt iusto accusantium maxime in.
            Assumenda fugiat quibusdam delectus cumque, fugit nostrum dolorum quas.
            Lorem ipsum dolor sit amet consectetur 
        </p>
        <a href="/servicios/servicio" class="boton">Ver servicio</a>
    </div>
    <div class= "sevicio">
        <img src="/build/img/servicios.jpg" alt="">
        <h3>
            Servicio 6
        </h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus inventore,
            provident libero, ea et, architecto odio incidunt iusto accusantium maxime in.
            Assumenda fugiat quibusdam delectus cumque, fugit nostrum dolorum quas.
            Lorem ipsum dolor sit amet consectetur 
        </p>
        <a href="/servicio/servicios" class="boton">Ver servicio</a>
    </div> -->
</div>



<?php include_once __DIR__ .'/footer-principal.php';?>