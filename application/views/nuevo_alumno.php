<?php $this->load->view('test');?>

<div class="tile-body">
                    
    <form class="form-horizontal" role="form" parsley-validate id="basicvalidations" name="persona" method="POST" enctype="multipart/form-data"
     action="<?php echo base_url();?>UsuariosController/guardarUsuario">
      
      <div class="form-group">
        <label for="fullname" class="col-sm-4 control-label">Nombre(s) *</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="nombre" id="fullname" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
        </div>
      </div>

      <div class="form-group">
        <label for="fullname" class="col-sm-4 control-label">Apellido paterno*</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="primerApellido" id="fullname" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
        </div>
      </div>

      <div class="form-group">
        <label for="fullname" class="col-sm-4 control-label">Apellido materno*</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="segundoApellido" id="fullname" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
        </div>
      </div>

      <div class="form-group">
        <label for="fullname" class="col-sm-4 control-label">Número de control*</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="numeroControl" id="fullname" parsley-trigger="change" parsley-required="true" parsley-minlength="14" parsley-validation-minlength="14">
        </div>
      </div>

      <div class="form-group">
        <label for="input07" class="col-sm-4 control-label">Semestre*</label>
        <div class="col-sm-8" id="myproperlabel">
          <select class="chosen-select form-control" id="input07" name="semestre" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
            <option value="" selected >Seleccione el semestre</option>
                <option value="1" >Primer semestre</option>
                <option value="2">Segundo semestre</option>
                <option value="3">Tercer semestre</option>
                <option value="4">Cuarto semestre</option>
                <option value="5">Quinto semestre</option>
                <option value="6">Semestre semestre</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="input07" class="col-sm-4 control-label">Turno*</label>
        <div class="col-sm-8" id="myproperlabel">
          <select class="chosen-select form-control" id="input07" name="turno" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
            <option value="" selected >Seleccione el turno</option>
                <option value="matutino" >Matutino</option>
                <option value="vespertino">Vespertino</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="input07" class="col-sm-4 control-label">Materia*</label>
        <div class="col-sm-8" id="myproperlabel">
          <select class="chosen-select form-control" id="input07" name="materia" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
            <option value="" selected >Seleccione la materia cursante</option>
                <option value="1" >Materia 1</option>
                <option value="2">Materia 2</option>
                <option value="1" >Materia 3</option>
                <option value="2">Materia 4</option>
                <option value="1" >Materia 5</option>
                <option value="2">Materia 6</option>

          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="website" class="col-sm-4 control-label">Usuario</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="username" id="username" parsley-trigger="change" parsley-minlength="4" parsley-validation-minlength="1">
        </div>
      </div>

      <div class="form-group">
        <label for="email" class="col-sm-4 control-label">Email *</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" name="email" id="email" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-type="email" parsley-validation-minlength="1">
        </div>
      </div>

      <div class="form-group">
        <label for="password" class="col-sm-4 control-label">Contraseña *</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" name="contraseña" id="password" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1">
        </div>
      </div>

      <div class="form-group">
        <label for="passwordconfirm" class="col-sm-4 control-label">Confirmar contraseña *</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" name="contraseña2" id="passwordconfirm" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1" parsley-equalto="#password">
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-8">
          <label for="passwordconfirm" class="col-sm-4 control-label">Foto de perfil*</label>
                <input class="form-control-file" type="file" name="foto" id="foto">
              </div>
        
      </div>

      <div class="form-group form-footer">
        <div class="col-sm-offset-4 col-sm-8">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-default">Reset</button>
        </div>
      </div>

    </form>

  </div>

</section>
</main>

  <!-- Forms validation scripts y css-->
     <link href="<?php echo base_url(); ?>frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>frontend/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>frontend/css/chosen.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>frontend/css/chosen-bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>frontend/css/bootstrap-checkbox.css">
    <link href="<?php echo base_url(); ?>frontend/css/minoral.css" rel="stylesheet"> 
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>frontend/js/bootstrap.min.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&amp;skin=sons-of-obsidian"></script>
    <script src="<?php echo base_url(); ?>frontend/js/plugins/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>frontend/js/plugins/blockui/jquery.blockUI.js"></script>

    <script src="<?php echo base_url(); ?>frontend/js/plugins/chosen/chosen.jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>frontend/js/plugins/parsley/parsley.min.js"></script>

    <script src="<?php echo base_url(); ?>frontend/js/minoral.min.js"></script> 

    <script>

    $(function(){
      
      //chosen select input
      $(".chosen-select").chosen({disable_search_threshold: 10});
      
    })
      
    </script>

