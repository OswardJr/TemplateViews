            <?php
            require_once("header.php");
            ?>
                <div class="page-content-wrapper" style="">
                    <div class="page-content">                    
                        <section class="content">
                          <div class="row">
                            <div class="col-md-12 ">
                                  <h3>Nuevo Operario</h3>
                                <hr>

                                <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Operario</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                  <form name="" action="" method="post" id="">
                                    <div class="form-group col-md-6 " style="margin-bottom: 0px; height: 60px">
                                      <label>Cédula<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <div class="input-group input-group-sm">
                                        <input type="text" name="" id="" class="form-control " pattern="^([JVEG]{1})-([0-9]{8})-([0-9]{1})$" title="El formato debe ser V-12345678"  placeholder="V12345678" onkeyup="this.value=this.value.toUpperCase()" required="true" >
                                        <span class="input-group-btn">
                                          <button  data-toggle="tooltip" title="Consultar" class="btn btn-info btn-flat fa fa-search
                                          " type="button" name="btn-search"></button>
                                        </span>
                                      </div>
                                      <center><span id="mensaje" class="help-block"></span></center>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Nombre<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="José" required="true">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Apellido<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="Pérez" required="true">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Teléfono</label>
                                      <input type="text" name="" id="" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="0244-XXXXXXX">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Email</label>
                                      <input type="email" name="email" id="email" class="form-control" placeholder="contact@example.com">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Tipo</label>
                                      <select class="form-control">
                                          <option></option>
                                          <option>Latonero</option>
                                          <option>Pintor</option>
                                      </select>
                                    </div>
                                    <!-- textarea -->
                                    <div class="form-group col-md-offset-3 col-md-6">
                                      <label>Direcci&oacuten<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <textarea type="text" name="" id="" class="form-control" placeholder="Dirección" ></textarea>
                                    </div>
                                    <center class="col-md-offset-3 col-md-6">
                                      <span class="" style="font-weight:bold;">Los campos marcados con <a class="obli" rel="tooltip" style="font-size:20px;">*</a> son Obligatorios.</span><br><br>
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
                require_once("footer.php");
                ?>