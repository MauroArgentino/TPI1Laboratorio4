<!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
         <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo URL_PATH;?>/js/main.js"></script>
        <script src="<?php echo URL_PATH;

        if ($datos['titulo'] == 'Que loco!') {
                echo '/js/login.js';
               
               } else {
                        echo '/js/main.js';
                }?>">
                </script>
                
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>