<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Memorama</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <!-- CSS -->
    <!-- efectos visuales -->
    <style>
        :root {
            --w: calc(70vw / 6);
            --h: calc(70vh / 2.84);
        }

        * {
            transition: all 0.5s;
        }

        body {
            padding: 0;
            margin: 0;
            /* -webkit-perspective: 1000; */
            background: #ffd90f;
            min-height: 50vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: calibri;

        }

        div {
            display: inline-block;
        }

        img {
            width: 100%;
            height: 100%;
        }

        .area-tarjeta,
        .tarjeta,
        .cara {
            cursor: pointer;
            width: var(--w);
            min-width: 100px;
            max-width: 160px;
            height: var(--h);
            margin-top: 5px;
            margin-left: 5px;
            margin-right: 5px;
            /*margin: 2px 0 2px;*/
        }

        .tarjeta {
            position: relative;
            transform-style: preserve-3d;
            /*animation: iniciar 5s;*/
        }

        .cara {
            position: absolute;
            backface-visibility: hidden;
            box-shadow: inset 0 0 0 5px white;
            font-size: 500%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .trasera {
            background-color: lightcyan;
            transform: rotateY(180deg);
        }

        .superior {
            background: linear-gradient(orange, darkorange);
        }

        #tablero {
            width: 1400px;
            text-align:  center;
        }
        .nuevo-juego {
            cursor: pointer;
            background: linear-gradient(red, darkred);
            color:  white;
            padding: 20px;
            padding-left: 50px;
            padding-right: 50px;
            /*border-radius: 50px;*/
            margin-top: 20px;
            border: white 3px solid;
            font-size: 130%;
        }

        @keyframes iniciar {

            20%,
            90% {
                transform: rotateY(180deg);
            }

            0%,
            100% {
                transform: rotateY(0deg);
            }
        }


        /* Google Font Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
.sidebar{
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 78px;
  background: #11101D;
  padding: 6px 14px;
  z-index: 99;
  transition: all 0.5s ease;

}
.sidebar.open{
  width: 250px;
}
.sidebar .logo-details{
  height: 60px;
  display: flex;
  align-items: center;
  position: relative;
}
.sidebar .logo-details .icon{
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details .icon,
.sidebar.open .logo-details .logo_name{
  opacity: 1;
}
.sidebar .logo-details #btn{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  font-size: 22px;
  transition: all 0.4s ease;
  /*font-size: 23px;*/
  text-align: center;
  cursor: pointer;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details #btn{
  text-align: right;
}
.sidebar i{
  color: #fff;
  height: 60px;
  min-width: 50px;
  font-size: 28px;
  text-align: center;
  line-height: 60px;
}
.sidebar .nav-list{
  margin-top: 20px;
  height: 100%;
}
.sidebar li{
  position: relative;
  margin: 8px 0;
  list-style: none;
}
.sidebar li .tooltip{
  position: absolute;
  top: -20px;
  left: calc(100% + 15px);
  z-index: 3;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 400;
  opacity: 0;
  white-space: nowrap;
  pointer-events: none;
  transition: 0s;
}
.sidebar li:hover .tooltip{
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
  top: 50%;
  transform: translateY(-50%);
}
.sidebar.open li .tooltip{
  display: none;
}
.sidebar input{
  font-size: 15px;
  color: #FFF;
  font-weight: 400;
  outline: none;
  height: 50px;
  width: 100%;
  width: 50px;
  border: none;
  border-radius: 12px;
  transition: all 0.5s ease;
  background: #1d1b31;
}
.sidebar.open input{
  padding: 0 20px 0 50px;
  width: 100%;
}
.sidebar .bx-search{
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  font-size: 22px;
  background: #1d1b31;
  color: #FFF;
}
.sidebar.open .bx-search:hover{
  background: #1d1b31;
  color: #FFF;
}
.sidebar .bx-search:hover{
  background: #FFF;
  color: #11101d;
}
.sidebar li a{
  display: flex;
  height: 100%;
  width: 100%;
  border-radius: 12px;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  background: #11101D;
}
.sidebar li a:hover{
  background: #FFF;
}
.sidebar li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: 0.4s;
}
.sidebar.open li a .links_name{
  opacity: 1;
  pointer-events: auto;
}
.sidebar li a:hover .links_name,
.sidebar li a:hover i{
  transition: all 0.5s ease;
  color: #11101D;
}
.sidebar li i{
  height: 50px;
  line-height: 50px;
  font-size: 18px;
  border-radius: 12px;
}
.sidebar li.profile{
  position: fixed;
  height: 60px;
  width: 78px;
  left: 0;
  bottom: -8px;
  padding: 10px 14px;
  background: #1d1b31;
  transition: all 0.5s ease;
  overflow: hidden;
}
.sidebar.open li.profile{
  width: 250px;
}
.sidebar li .profile-details{
  display: flex;
  align-items: center;
  flex-wrap: nowrap;
}
.sidebar li img{
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 6px;
  margin-right: 10px;
}
.sidebar li.profile .name,
.sidebar li.profile .job{
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  white-space: nowrap;
}
.sidebar li.profile .job{
  font-size: 12px;
}
.sidebar .profile #log_out{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  background: #1d1b31;
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 0px;
  transition: all 0.5s ease;
}
.sidebar.open .profile #log_out{
  width: 50px;
  background: none;
}
.home-section{
  /*position: relative;*/

  top: 0;
  /*width: calc(100% - 78px);*/
  transition: all 0.5s ease;
  z-index: 2;
}
.sidebar.open ~ .home-section{
  left: 250px;
  width: calc(100% - 250px);
  padding: auto;
}
.home-section .text{
  /*display: inline-block;*/
  color: #11101d;
  font-size: 25px;
  font-weight: 500;
  margin: 18px
}
@media (max-width: 420px) {
  .sidebar li .tooltip{
    display: none;
  }
}

    </style>
</head>

<body>
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
                        alert("Ganaste!");

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

</body>

</html>