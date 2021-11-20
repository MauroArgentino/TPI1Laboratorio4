<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3><?= $user->USERNAME;?></h3>
            <!-- <p class="blue-text">Just answer a few questions<br> so that we can personalize the right experience for you.</p> -->
            <div class="card">
                <h5 class="text-center mb-4">Powering world-class companies</h5>
                <form class="form-card" action="<?php echo URL_PATH.'/usuario/edit';?>" method="POST">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nombre de usuario<span class="text-danger"> *</span></label> <input type="text" id="mob" name="username" placeholder="" value="<?= $user->USERNAME;?>"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Primer nombre<span class="text-danger"> *</span></label> <input type="text" id="fname" name="nombre" placeholder="Enter your first name" value="<?= $user->NOMBRE; ?>"></div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Apellido<span class="text-danger"> *</span></label> <input type="text" id="lname" name="apellido" placeholder="Enter your last name" value="<?= $user->APELLIDO; ?>"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <!-- <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Business email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder=""> </div> -->
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Teléfono<span class="text-danger"> *</span></label> <input type="text" id="mob" name="telefono" placeholder="" value="<?= $user->TELEFONO; ?>"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Job title<span class="text-danger"> *</span></label> <input type="text" id="job" name="job" placeholder="" > </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">What would you be using Flinks for?<span class="text-danger"> *</span></label> <input type="text" id="ans" name="ans" placeholder=""> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Constraseña<span class="text-danger"> *</span></label> <input type="text" id="mob" name="password" placeholder="" > </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Repita constraseña<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="" > </div>
                    </div>

                    <div class="row justify-content-between text-left" hidden>
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">What would you be using Flinks for?<span class="text-danger"> *</span></label> <input type="text" id="ans" name="email" placeholder="" value="<?= $user->EMAIL; ?>"> </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Guardar cambios</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>