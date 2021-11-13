<!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
         <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo URL_PATH.'/js/login.js';?>"></script>
        <script src="<?php echo URL_PATH.'/js/toastr.min.js';?>"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <?php if (isset($error_message)){
            ?>
        <script type="text/javascript">
            $(document).ready(function(){
            toastr["<?php echo $type;?>"]("<?php echo $error_message;?>", "<?php echo $type;?>");
            }
            );
        </script>
      <?php  }  ?>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>