  <?php require APP_PATH. '/views/inc/login/header.php'; 

/**
 * Queremos crear un hash de nuestra contraseña uando el algoritmo DEFAULT actual.
 * Actualmente es BCRYPT, y producirá un resultado de 60 caracteres.
 *
 * Hay que tener en cuenta que DEFAULT puede cambiar con el tiempo, por lo que debería prepararse
 * para permitir que el almacenamento se amplíe a más de 60 caracteres (255 estaría bien)
 */
//echo password_hash("mauro", PASSWORD_DEFAULT)."\n";

?>

 <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Iniciar sesión</a></li>
        <li class="tab"><a href="#signup">Únete</a></li>        
      </ul>
      <div class="tab-content">
      <div id="login">   
          <h1>¡Bienvenido!</h1>
          
          <form action="<?php echo URL_PATH.'/Login/signin';?>" method="POST">
          
            <div class="field-wrap">
            <!-- <label>
              Correo electrónico<span class="req">*</span>
            </label> -->
            <input type="email" autocomplete="off" placeholder="Correo electrónico" name="email" />
          </div>
          
          <div class="field-wrap">
            <!-- <label>
              Contraseña<span class="req">*</span>
            </label> -->
            <input type="password" autocomplete="off" placeholder="Ingrese su contraseña" name="password" />
          </div>
          
          <p class="forgot"><a href="#">¿Olvidaste la contraseña?</a></p>
          <!-- <?php !empty($error_message) ? print($error_message) : ''; ?> -->
          <button class="button button-block" type="submit" />Iniciar sesión</button>
          
          </form>

        </div>

      
        <div id="signup">   
          <h1>Regístrate Gratis</h1>
          
          <form action="<?php echo URL_PATH.'/Usuario/store';?>" method="POST">
          
          <div class="field-wrap">
           <!--  <label>
              Set A Password<span class="req">*</span>
            </label> -->
            <input type="text" required autocomplete="off" placeholder="Ingresa un nombre de usuario" name="username" />
          </div>
          <div class="top-row">
            <div class="field-wrap">
              <!-- <label>
                Primer nombre<span class="req">*</span>
              </label> -->
              <input type="text" required placeholder="Primer nombre" name="nombre" />
            </div>
        
            <div class="field-wrap">
             <!--  <label>
                Apellido<span class="req">*</span>
              </label> -->
              <input type="text"required autocomplete="off" placeholder="Apellido" name="apellido" />
            </div>
          </div>

          <div class="field-wrap">
            <!-- <label>
              Correo electrónico<span class="req">*</span>
            </label> -->
            <input type="email"required autocomplete="off" placeholder="Correo electrónico" name="email" />
          </div>
          
          <div class="field-wrap">
           <!--  <label>
              Set A Password<span class="req">*</span>
            </label> -->
            <input type="password" required autocomplete="off" placeholder="Ingresa una contraseña" name="password" />
          </div>

          <div class="field-wrap">
            <!-- <label>
              Set A Password<span class="req">*</span>
            </label> -->
            <input type="password" required autocomplete="off" placeholder="Repite la contraseña"/>
          </div>
          
          <button type="submit" class="button button-block"/>Comenzar</button>
          
          </form>

        </div>
        
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <?php require APP_PATH. '/views/inc/login/footer.php'; ?>