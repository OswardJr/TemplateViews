            <?php
            require_once("header2.php");
            ?>
                <div class="page-content-wrapper" style="">
                    <div class="page-content">                    
                        <section class="content">
                          <div class="row">
                            <div class="col-md-12 ">
                                  <h3>Nuevo Repuesto</h3>
                                <hr>

                                <div class="panel panel-primary " style="width: 960px;">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Repuesto</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                  <form name="" action="" method="post" id="">
                                    <div class="form-group col-xs-6 " style="margin-bottom: 0px; height: 60px">
                                      <label>Código<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <div class="input-group input-group-sm">
                                        <input type="text" name="" id="" class="form-control "title="El formato debe ser ABC105C"  placeholder="R0001" onkeyup="this.value=this.value.toUpperCase()" value="" required="true" >
                                        <span class="input-group-btn">
                                          <button  data-toggle="tooltip" title="Consultar" class="btn btn-info btn-flat fa fa-search
                                          " type="button"  onClick="" name="btn-search"></button>
                                        </span>
                                      </div>
                                      <center><span id="mensaje" class="help-block"></span></center>
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Descripción<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="Rolinera" required="true">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Marca<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="Vy" required="true">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Modelo<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="Standard">
                                    </div>
                                    <div class="form-group col-xs-6">
                                      <label>Costo<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="5200bsf">
                                    </div>                                  
                                    <center class="col-xs-offset-3 col-xs-6">
                                      <span class="" style="font-weight:bold;">Los campos marcados con <a class="obli" rel="tooltip" style="font-size:20px;">*</a> son <strong>Obligatorios</strong>.</span><br><br>
                                      <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>" />
                                      <button data-toggle="tooltip" title="Registrar" type="submit" class="btn btn-ver margin glyphicon glyphicon-floppy-disk" name="agregar"></button>
                                      <button data-toggle="tooltip" title="Limpiar Formulario" type="reset" class="btn btn-sucedio margin glyphicon glyphicon-repeat"></button>
                                    </center>
                                  </form>
                              </div>

                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div>
                        </div><!-- /.col -->
                        </div><!-- /.row -->
                        </section><!-- /.content -->
                    </div>
                </div>
                <?php
                require_once("footer2.php");
                ?>