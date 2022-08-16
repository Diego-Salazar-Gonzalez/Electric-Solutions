<?php
  $auth = $_SESSION['login'] ?? false;
?>
<div class="barra-mobile">
  <a class="logo" href="/">
          <h1 class="logo__nombre no-margin centrar-texto"><span class="logo__ag">AG</span> Electric Solutions
          </h1>
  </a>
  <div class="menu">
  <img id="mobile-menu"src="/build/img/menu.svg" alt="menu">
  </div>
</div>
<div class="barra">
      
      <a class="logo" href="/">
        <h1 class="logo__nombre no-margin centrar-texto"><span class="logo__ag">AG</span> Electric Solutions
        </h1>
      </a> 

      <nav class="navegacion">
        <a href="/nosotros" class="navegacion__enlace <?php echo ($titulo === 'nosotros') ? 'activo' : ''; ?>">Nosotros</a>
        <a href="/servicios" class="navegacion__enlace <?php echo ($titulo === 'servicios') ? 'activo' : ''; ?>">Servicios</a>
        <a href="/contacto" class="navegacion__enlace <?php echo ($titulo === 'contacto') ? 'activo' : ''; ?>">Contacto</a>
        <?php if($auth){?>
        <a href="/admin" class="navegacion__enlace <?php echo ($titulo === 'administrar') ? 'activo' : '';?>">Administrar</a>
        <a href="/logout" class="navegacion__enlace">Cerrar Sesion</a>
        <?php }?> 
      </nav>
</div>