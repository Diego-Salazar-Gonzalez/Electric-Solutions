<?php include_once __DIR__ .'/../templates/barra.php';?>
<main class="contenedor login">
    <div class="login-header">
    <h1>Iniciar Sesión</h1>
    </div>
    
    <?php foreach($alertas as $alerta):?>
        
            <div class="session-error">
                <?php echo $alerta;?>
            </div>
        
    <?php endforeach;?>

    <form action="/login" class="formulario-login " method="POST">
        <fieldset>
            

            
            <label for="email">Correo:</label>
            <input
                type="email"
                name="email"
                id="email"
                placeholder="Correo Electronico"
                required
            />
         
            
            <label for="password">Contraseña:</label>
            <input
                id="password"
                type="password"
                name="password"
                placeholder="Contraseña"
                required
                />
            
        </fieldset>
        <input
            type="submit"
            value="Iniciar Sesión"
           
        />
    </form>
</main>



<?php include_once __DIR__ .'/../paginas/footer-principal.php';?>