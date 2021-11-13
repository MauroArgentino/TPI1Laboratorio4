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
       <a href="<?php echo URL_PATH.'/home';?>">
         <i class='bx bx-joystick' ></i>
         <span class="links_name">Juego</span>
       </a>
       <span class="tooltip">Juego</span>
     </li>
      <li>
        <a href="<?php echo URL_PATH.'/home/dashboard';?>">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="<?php echo URL_PATH.'/home/perfil';?>">
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
     <?php 
      require_once '../app/views/inc/home/'.$parametro.'.php';
       ?>
    </section>
    <!-- JS -->
    <!-- parte lógica -->

    <?php if($parametro == "juego") {
      ?>
        <script src="<?php echo URL_PATH.'/js/juego.js';?>"></script>
      <?php
    }
    ?>
    <script>
      
        // var error = 'Hubo un error en la conexion'; 

        // alert(error);
       
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