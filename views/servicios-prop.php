            <?php
            require_once("header.php");
            ?>
                <div class="page-content-wrapper" style="">
                    <div class="page-content">
                    <div class="container">
                            <h2>Nueva Orden de Servicio - Particulares</h2><hr style="width:70%">
                          
                          <div class="row">
                            <div class="col-xs-12">
                                <div class="col-lg-8">
                                  <div class="panel panel-primary ">
                                    <div class="panel-heading ">
                                      <center>
                                        <h4>Datos del Vehículo</h4>
                                      </center>
                                    </div>

                                    <div class="panel-body ">
                                      <div class="col-lg-6 form-group" style="margin-top: 5px;">
                                        <label for="cedula ">Placa</label>
                                        <div class="input-group ">
                                          <input type="text " class="form-control" id="" name="" placeholder="V-XXXXXXX">
                                          <span class="input-group-btn ">
                                            <button class="btn btn-info btn-flat fa fa-search" type="button"></button>
                                          </span>
                                        </div>
                                      </div>

                                      <div class="form-group col-lg-6">
                                        <p class="margin"><strong>Marca</strong></p>
                                        <input type="text" name="" placeholder="Aveo" class="form-control" disabled>
                                      </div>

                                      <div class="form-group col-lg-6">
                                        <p class="margin"><strong>Modelo</strong></p>
                                        <input type="text" name="" placeholder="LT" class="form-control" disabled>
                                      </div>

                                      <div class="form-group col-lg-6">
                                        <p class="margin"><strong>Serial de Carrocería</strong></p>
                                        <input type="text" name="" placeholder="XXXXXXXXXXX" class="form-control" disabled>
                                      </div>

                                      <div class="form-group col-lg-6">
                                        <p class="margin"><strong>Seguro</strong></p>
                                        <input type="text" name="" placeholder="Seguros Altamira, C.A" class="form-control" disabled>
                                      </div>

                                      <div class="form-group col-lg-6">
                                        <p class="margin"><strong>Propietario</strong></p>
                                        <input type="text" name="" placeholder="Transeral, C.A" class="form-control" disabled>
                                      </div>

                                    </div>
                                 </div>
                                </div>

                                <div class="col-lg-2">
                                  <div class="panel panel-primary ">
                                    <div class="panel-heading ">
                                      <center>
                                        <h4>Datos de la Orden</h4>
                                      </center>
                                    </div>
                                    <div class="panel-body ">
                                   
                                      <h5><strong>Número:</strong> 0000001</h5>
                                      <h5><strong>Fecha:</strong> 03/04/2017</h5>
                                      <h5><strong>Usuario:</strong> Osward</h5>
                                    </div>
                                 </div>
                                </div>

                              </div>  
                              </div>  
                            </div>


                            <div class="col-lg-12">
                              <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Repuestos</h4>
                                  </center>
                                </div>
                                <div class="panel-body ">
                                <div class="form-group col-xs-3 col-xs-offset-1 " style="margin-bottom: 0px; height: 60px">
                                  <p class="margin"><strong>Repuesto</strong></p>
                                  <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" disabled>
                                    <span class="input-group-btn">
                                      <div data-toggle="tooltip" title="Buscar"  class="btn btn-primary btn-flat fa fa-search " ></div>
                                    </span>
                                  </div>
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-6 ">
                                  <label>Descripción</label>
                                  <textarea type="text" class="form-control" disabled ></textarea>
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-2 ">
                                  <p class="margin"><strong>Existencia</strong></p>
                                  <input type="text" class="form-control" disabled>
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-2 ">
                                  <label style="margin-bottom: 10px;"><strong>Stock Mínimo</strong></label>
                                  <input type="text" class="form-control" disabled>
                                </div>
                                  <div class="form-group col-xs-offset-1 col-xs-2 ">
                                  <p class="margin"><strong>Cantidad</strong></p>
                                  <input type="text" class="form-control"  disabled >
                                </div>
                                <div class="form-group col-xs-1" style="margin-right:-20px">
                                  <div class="btn btn-primary fa fa-shopping-cart btn-agregar-producto" style="margin-top:25px"> Añadir</div>
                                </div>
                                </div>
                                <input type="hidden" name="" value="" />
                              </div>
                            </div>

                                                        <div class="col-lg-12">
                              <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Repuestos Seleccionados</h4>
                                  </center>
                                </div>
                                <div class="panel-body ">
                                   <div class="table-responsive"> 
                                    <table data-toggle="table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Acción</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr id="tr-id-1" class="tr-class-1">
                                    <td id="td-id-1" class="td-class-1">P000233
                                    </td>
                                    <td>Rodamientos</td>
                                    <td>2</td>
                                    <td><a>
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i>
                                            
                                        </button>
                                    </a></td>
                                </tr> 

                                </tr>
                                </tbody>
                            </table>
                                </div>
                                </div>

                                </div>
                            </div>

                            <dic class="row">
                                <div class="col-xs-offset-4 col-md-12">
                              <div class="col-lg-2">
                                <button type="submit" class="btn btn-default "> GUARDAR</button>
                              </div>
                              <div class=" col-lg-2">
                                <button type="reset" class="btn btn-default "> LIMPIAR</button>
                              </div>
                          </div>
                            </dic>
                          </div>
                        </div>                    
                    </div>
                </div>
            </div>                    
        </div>
      </div>  
                <?php
                require_once("footer.php");
                ?>