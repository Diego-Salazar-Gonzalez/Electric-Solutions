<fieldset>
    <div class="contenedor-contactenos">
        <div>
            <h3>Contactenos</h3>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-headset" width="60" height="60"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="#052bef" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <rect x="4" y="13" rx="2" width="4" height="6" />
                <rect x="16" y="13" rx="2" width="4" height="6" />
                <path d="M4 15v-3a8 8 0 0 1 16 0v3" />
                <path d="M18 19a6 3 0 0 1 -6 3" />
            </svg>
        </div>

    </div>
    <div class="alerta">
    <?php if($mensaje ==='Mensaje enviado Correctamente'){ ?>
        <p class='exito'> <?php echo $mensaje; ?></p>
    <?php }?>
    <?php if($mensaje ==='El mensaje no se pudo enviar'){?>
        <p class='error'> <?php echo $mensaje; ?></p>
    <?php }?>
    </div>
    

    <input id="nombre" type="text" placeholder="Nombre y Apellidos" name="contacto[nombre]" required>
    <input id="email" type="email" placeholder="Correo Electronico" name="contacto[email]" required>
    <input id="telefono" type="number" placeholder="Numero de Telefono" name="contacto[telefono]" required>

    <textarea  id="mensaje" placeholder="Mensaje" name="contacto[mensaje]"></textarea>
    <input type="submit">

    <p>
    *La información que ud. nos facilita será utilizada únicamente para atender a su solicitud de información.
    Si tras el contacto no se convirtiera en cliente de Ag Electric Solutions,
    los datos serán borrados de inmediato (Ley Orgánica 15/1999, de 13 de Diciembre y a efectos de lo previsto en el
    Reglamento General de Protección de Datos).
    </p>
</fieldset>