            <?php
            require_once("header.php");
            ?>
                <div class="page-content-wrapper" style="">
                    <div class="page-content">                    
                        <section class="content">
                          <div class="row">
                            <div class="col-md-12 ">
                                <h3>Nuevo Vehículo</h3>
                                <hr>

                                   <div class="panel panel-primary">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Propietario</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                  <div class="col-md-4 col-md-offset-2 form-group" style="margin-top: 5px;">
                                    <label for="cedula ">Cédula</label>
                                    <div class="input-group ">
                                      <input type="text " class="form-control" id="" name="" placeholder="V-XXXXXXX">
                                      <span class="input-group-btn ">
                                        <button class="btn btn-info btn-flat fa fa-search" type="button"></button>
                                      </span>
                                    </div>
                                  </div>

                                  <div class="form-group col-md-4  ">
                                    <p class="margin"><strong>Nombre</strong></p>
                                    <input type="text" name="" placeholder="José" class="form-control" disabled>
                                  </div>
                                  <div class="form-group col-md-4 col-md-offset-2   ">
                                    <p class="margin"><strong>Apellido</strong></p>
                                    <input type="text" name="" placeholder="Perez" class="form-control" disabled>
                                  </div>
                                  <div class="form-group col-md-4 ">
                                    <p class="margin"><strong>Teléfono</strong></p>
                                    <input type="text" name="" placeholder="0244-xxxxxxx" class="form-control" disabled>
                                  </div>
                                </div>
                              </div><br><br>

                            <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Datos del Vehículo</h4>
                                  </center>
                                </div>

                                <div class="panel-body ">
                                  <form name="" action="" method="post" id="">
                                    <div class="form-group col-md-6 " style="margin-bottom: 0px; height: 60px">
                                      <label>Placa<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <div class="input-group input-group-sm">
                                        <input type="text" name="" id="" class="form-control "title="El formato debe ser ABC105C"  placeholder="D10SV3N" onkeyup="this.value=this.value.toUpperCase()" value="" required="true" >
                                        <span class="input-group-btn">
                                          <button  data-toggle="tooltip" title="Consultar" class="btn btn-info btn-flat fa fa-search
                                          " type="button"  onClick="" name="btn-search"></button>
                                        </span>
                                      </div>
                                      <center><span id="mensaje" class="help-block"></span></center>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Marca<a class="campos-required" pattern="[A-Z]" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="Ferrari" required="true">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Modelo<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="570T" required="true">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Año<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="2015">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Serial del Motor<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" pattern="" class="form-control" placeholder="xxxxxxxx">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Serial de Carrocería<a class="campos-required" title="Campo Obligatorio."> *</a></label>
                                      <input type="text" name="" id="" class="form-control" placeholder="xxxxxxxx">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Color</label>
                                      <input type="text" name="" id="" pattern="^([0-9]{4})-([0-9]{7})$" class="form-control" placeholder="Rojo">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Tipo</label>
                                      <select class="form-control">
                                          <option></option>
                                          <option>Ligero</option>
                                          <option>Pesado</option>
                                      </select>
                                    </div>                                    
                                    <center class="col-md-offset-3 col-md-6">
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
                require_once("footer.php");
                ?>