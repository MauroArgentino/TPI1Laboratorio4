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
        <li class="tab active"><a href="#signup">Únete</a></li>
        <li class="tab"><a href="#login">Iniciar sesión</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Regístrate Gratis</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <!-- <label>
                Primer nombre<span class="req">*</span>
              </label> -->
              <input type="text" required placeholder="Primer nombre" />
            </div>
        
            <div class="field-wrap">
             <!--  <label>
                Apellido<span class="req">*</span>
              </label> -->
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <!-- <label>
              Correo electrónico<span class="req">*</span>
            </label> -->
            <input type="email"required autocomplete="off" placeholder="Correo electrónico" />
          </div>
          
          <div class="field-wrap">
           <!--  <label>
              Set A Password<span class="req">*</span>
            </label> -->
            <input type="password" required autocomplete="off" placeholder="Ingresa una contraseña"/>
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
        
        <div id="login">   
          <h1>¡Bienvenido!</h1>
          
          <form action="<?php echo URL_PATH.'/LoginController/signin';?>" method="POST">
          
            <div class="field-wrap">
            <!-- <label>
              Correo electrónico<span class="req">*</span>
            </label> -->
            <input type="email"required autocomplete="off" placeholder="Correo electrónico" name="email" />
          </div>
          
          <div class="field-wrap">
            <!-- <label>
              Contraseña<span class="req">*</span>
            </label> -->
            <input type="password" required autocomplete="off" placeholder="Ingrese su contraseña" name="password" />
          </div>
          
          <p class="forgot"><a href="#">¿Olvidaste la contraseña?</a></p>
          
          <button class="button button-block" type="submit" />Iniciar sesión</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <?php require APP_PATH. '/views/inc/login/footer.php'; ?>