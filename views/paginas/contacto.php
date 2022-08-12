<?php include_once __DIR__ .'/../templates/barra.php';?>
<div class="header-contacto">
    <h2>
        Contacto
    </h2>
</div>
<main>

<div class="formulario contenedor contenido-principal">
    <div class="formulario-descripcion">
        <h3>
           Contacto 
        </h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi deserunt ipsum neque.
            Ab ratione beatae modi natus voluptates asperiores dignissimos qui
            deleniti, possimus hic nulla odit est a. Fugit, qui!
        </p>
        <blockquote>
            <p>
            Commodi deserunt ipsum neque.
            Ab ratione beatae modi natus voluptates
            </p>
        </blockquote>


        <ul>
            <li>possimus hic nulla odit est a. Fugit, qui</li>
            <li>possimus hic nulla odit est a. Fugit, qui</li>
            <li>possimus hic nulla odit est a. Fugit, qui</li>
            <li>possimus hic nulla odit est a. Fugit, qui</li>
        </ul>

        <div class="iconos-contacto">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#052bef" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="3" y="5" width="18" height="14" rx="2" />
                    <polyline points="3 7 12 13 21 7" />
                </svg>
                <p>modi natus voluptates</p>
            </div>
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#052bef" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                </svg>
                    <p>modi natus voluptates</p>
            </div>
            <div class="icono">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#052bef" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                </svg>
                <p>modi natus voluptates</p>
            </div>
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#052bef" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="9" cy="7" r="4" />
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                </svg>
                <p>modi natus voluptates</p>
            </div>
        </div>
    </div>
    <form action="/contacto" method="POST" class="formulario-contacto">
        <?php include_once __DIR__ .'/../templates/formulario.php';?>  
    </form>
</div>


<main>







<?php include_once __DIR__ .'/../templates/whatsapp.php';?>  
<?php include_once __DIR__ .'/footer-principal.php';?>
