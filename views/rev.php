            <?php
            require_once("header.php");
            ?>
                <div class="page-content-wrapper" style="">
                    <div class="page-content"> 
                        <section class="content">
                        <div class="row">
                        <div class="btn btn-default btn-teal btn-responsive" style="float:right"><a href="dashboard.php" style="color:teal"><span class="fa fa-mail-reply-all fa-lg"> Regresar</span></a></div><br><br>    
                          <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-primary">
                              <div class="panel-heading">Datos del vehiculo</div>
                              <div class="panel-body">
                                <div class="row">
                                <input type="hidden" value="{{ strtoupper($auto->id) }}" name="_idAuto">
                                  <div class="col-md-6"><p><strong>Placa:</strong></p></div>
                                  <div class="col-md-6"><p><strong>Propietario:</strong></p></div>
                                  <div class="col-md-6"><p><strong>Marca:</strong></p></div>
                                  <div class="col-md-6"><p><strong>Modelo:</strong></p></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-primary">
                              <div class="panel-heading">Subir Fotos</div>
                              <div class="panel-body">
                                <div class="col-md-6">
                                  <div class="form-group">
                                  <label for="sel1"><p>Selecione la etapa del proceso.</p></label>
                                    <select class="form-control" id="sel1" name="_tipoRev" required="true">
                                        <option></option>
                                        <option>Recepción</option>
                                        <option>Desarmado</option>
                                        <option>Latonería</option>
                                        <option>Preparación</option>
                                        <option>Pintura</option>
                                        <option>Pulitura</option>
                                        <option>Limpieza</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                  <label for="sel1"><p>Fecha de Realización</p></label><br>
                                  <input type="date" class="form-control" name="_fechaRev" required="true" value="<?php echo date('Y-m-d'); ?>">
                                  </div>
                                </div>
                                <div class="col-md-12 ">
                                  <div class="form-group image">
                                    <input id="images-input" name="images[]" type="file" multiple data-preview-file-type="any" class="file" required="true">
                                  </div>
                                </div>
                                <center>
                                <div class="col-md-12 text-center">
                                <br>
                                <br>
                                    <button class="btn btn-ver" type="submit"><span class="fa fa-save"></span> Guardar</button>
                                  <br>
                                <br>
                                </div>
                                </center>
                              </div>
                            </div>
                          </div>
                        </section>                   	
                    </div>
                </div>
            <?php
            require_once("footer.php");
            ?>                        	