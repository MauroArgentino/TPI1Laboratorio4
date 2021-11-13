<?php require APP_PATH. '/views/inc/home/header.php'; ?>

    <!-- HTML -->
    <!-- estructura visual -->

  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-joystick icon'></i>
        <div class="logo_name">Memogame</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <!-- <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Buscar...">
         <span class="tooltip">Buscar</span>
      </li> -->
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Perfil de usuario</span>
       </a>
       <span class="tooltip">Perfil de usuario</span>
     </li>
     <!-- <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Analytics</span>
       </a>
       <span class="tooltip">Analytics</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">File Manager</span>
       </a>
       <span class="tooltip">Files</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Order</span>
       </a>
       <span class="tooltip">Order</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Saved</span>
       </a>
       <span class="tooltip">Saved</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li> -->
     <a href="<?php echo URL_PATH.'/home/closeSession';?>">
     <li class="profile">
         <div class="profile-details">
           <img src="<?php echo URL_PATH.'/img/Perfil.png';?>" alt="profileImg">
           <div class="name_job">
             <div class="name"><?php echo $username;?></div>
             <!-- <div class="job">Web designer</div> -->
           </div>
         </div>
         
         <i class='bx bx-log-out' id="log_out" ></i>
         
     </li>
     </a>
    </ul>
  </div>
    <section class="home-section">
     
        <div id="tablero">
        </div>

        <br>

        <div class="nuevo-juego" onclick="generarTablero()">
            Nuevo Juego
        </div>

    </section>
    <!-- JS -->
    <!-- parte lógica -->
    <script>

        // var error = 'Hubo un error en la conexion'; 

        // alert(error);
        let imagenes = [];
        let selecciones = [];
        let contador = 0;

        generarTablero();

        function cargarIconos() {
            imagenes = [
                '<img src="<?php echo URL_PATH.'/img/Hacha.jpg';?>"></img>',
                '<img src="<?php echo URL_PATH.'/img/Calabaza.jpg';?>"></img>',
                '<img src="<?php echo URL_PATH.'/img/Dokuroizo.jpg';?>"></img>',
                '<img src="<?php echo URL_PATH.'/img/Dragon.jpg';?>"></img>',
                '<img src="<?php echo URL_PATH.'/img/Kuriboh.jpg';?>"></img>',
                '<img src="<?php echo URL_PATH.'/img/Titiritero.jpg';?>"></img>',
                '<img src="<?php echo URL_PATH.'/img/Zemia.jpg';?>"></img>',
                '<img src="<?php echo URL_PATH.'/img/Beta.jpg';?>"></img>',
                '<img src="<?php echo URL_PATH.'/img/Alpha.jpg';?>"></img>',
                '<img src="<?php echo URL_PATH.'/img/Buey.jpg';?>"></img>',
                '<img src="<?php echo URL_PATH.'/img/DragonN.jpg';?>"></img>',
                '<img src="<?php echo URL_PATH.'/img/Craneo.jpg';?>"></img>',
            ]
        }

        function generarTablero() {
            cargarIconos()
            selecciones = []
            let tablero = document.getElementById("tablero")
            let tarjetas = []
            contador = 0;
            for (let i = 0; i < 24; i++) {
                tarjetas.push(`
                <div class="area-tarjeta" onclick="seleccionarTarjeta(${i})">
                    <div class="tarjeta" id="tarjeta${i}">
                        <div class="cara trasera" id="trasera${i}">
                            ${imagenes[0]}
                        </div>
                        <img src="<?php echo URL_PATH.'/img/Carta.jpg';?>" class="cara superior">
                           <!-- <i class="far fa-question-circle"></i> -->
                        </img>
                    </div>
                </div>        
                `)
                if (i % 2 == 1) {
                    imagenes.splice(0, 1)
                }
            }
            tarjetas.sort(() => Math.random() - 0.5)
            tablero.innerHTML = tarjetas.join(" ")
        }

        function seleccionarTarjeta(i) {
            let tarjeta = document.getElementById("tarjeta" + i)
            if (tarjeta.style.transform != "rotateY(180deg)") {
                tarjeta.style.transform = "rotateY(180deg)"
                selecciones.push(i)
            }
            if (selecciones.length == 2) {
                deseleccionar(selecciones)
                selecciones = []
            }
        }

        function deseleccionar(selecciones) {
            setTimeout(() => {
                let trasera1 = document.getElementById("trasera" + selecciones[0])
                let trasera2 = document.getElementById("trasera" + selecciones[1])
                if (trasera1.innerHTML != trasera2.innerHTML) {
                    let tarjeta1 = document.getElementById("tarjeta" + selecciones[0])
                    let tarjeta2 = document.getElementById("tarjeta" + selecciones[1])
                    tarjeta1.style.transform = "rotateY(0deg)"
                    tarjeta2.style.transform = "rotateY(0deg)"
                }else{
                    trasera1.style.display = "none"
                    trasera2.style.display = "none"
                    contador += 2;
                    console.log(contador);
                    if (contador == 24){
                      Swal.fire(
                        '¡Felicitaciones!',
                        '¡Has Ganado!',
                        'success'
                              )
                 }

                }
            }, 1000);
        }

        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
});

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
});

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
     if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}


    </script>

<?php require APP_PATH. '/views/inc/home/footer.php'; ?>