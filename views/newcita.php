            <?php
            require_once("header.php");
            ?>
                <div class="page-content-wrapper" style="">
                    <div class="page-content">
                    <div class="container">
                            <h2>Nueva Cita</h2><hr style="width:85%; float:left">
                          <div class="row">
                            <div class="col-md-12">
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
                                    <h4>Órdenes del Seguro Incluídas en el Trabajo</h4>
                                  </center>
                                </div>
                                <div class="panel-body ">
                                   <div class="table-responsive"> 
                                    <table data-toggle="table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Siniestro</th>
                                    <th>Poliza</th>
                                    <th>Observaciones</th>
                                    <th>Sub Total</th>
                                    <th>Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id="tr-id-1" class="tr-class-1">
                                    <td id="td-id-1" class="td-class-1">02/04/2017
                                    </td>
                                    <td>93-562388688</td>
                                    <td>93-562399217</td>
                                    <td>Ninguna</td>
                                    <td>235.650bsf</td>
                                    <td><a>
                                        <button class="btn btn-success"><i class="fa fa-eye"></i>
                                            
                                        </button>

                                        <button class="btn btn-default"><i class="fa fa-plus"></i>
                                            
                                        </button>

                                    </a></td>
                                </tr> 

                                <tr id="tr-id-1" class="tr-class-1">
                                    <td id="td-id-1" class="td-class-1">03/04/2017
                                    </td>
                                    <td>93-562383388</td>
                                    <td>93-562399847</td>
                                    <td>Ninguna</td>
                                    <td>345.650bsf</td>
                                    <td><a>
                                        <button class="btn btn-success"><i class="fa fa-eye"></i>
                                            
                                        </button>

                                        <button class="btn btn-default"><i class="fa fa-plus"></i>
                                            
                                        </button>
                                    </a></td>
                                </tr> 

                                </tr>
                                </tbody>
                            </table>
                                </div>
                                </div>
                                <input type="hidden" name="" value="" />
                              </div>
                            </div>

                            <div class="col-lg-12">
                              <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Órdenes del Seguro Seleccionadas</h4>
                                  </center>
                                </div>
                                <div class="panel-body ">
                                   <div class="table-responsive"> 
                                    <table data-toggle="table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Siniestro</th>
                                    <th>Poliza</th>
                                    <th>Acción</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr id="tr-id-1" class="tr-class-1">
                                    <td id="td-id-1" class="td-class-1">03/04/2017
                                    </td>
                                    <td>93-562383388</td>
                                    <td>93-562399847</td>
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

                            <div class="col-lg-12">
                              <div class="panel panel-primary ">
                                <div class="panel-heading ">
                                  <center>
                                    <h4>Repuestos</h4>
                                  </center>
                                </div>
                                <div class="panel-body ">
                                   <div class="form-group col-lg-4 ">
                                    <div class="form-group">
                                      <label for="sel1">Seleccione el Vehículo</label>
                                      <select class="form-control" id="sel1" name="" disabled>
                                        <option value=""></option>
                                        <option>Aveo - X9RH47V</option>
                                        <option>Optra - I3B9D0</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="form-group col-lg-4" id="sandbox-container">
                                    <label for="fecha_nac">Seleccione la Fecha</label>
                                    <div class="input-group date">
                                      <input type="text" class="form-control" name="fecha" id="fecha" disabled placeholder="DD/MM/AAAA" required="required">
                                      <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-th"></i>
                                      </span>
                                    </div>
                                  </div>

                                  <div class="form-group col-lg-4 ">
                                    <div class="form-group">
                                      <label for="sel1">Seleccione la Hora</label>
                                      <select class="form-control" id="sel1" name="" disabled>
                                        <option value=""></option>
                                        <option>8:00 AM</option>
                                        <option>9:00 AM</option>
                                        <option>10:00 AM</option>
                                        <option>11:00 AM</option>
                                        <option>01:00 AM</option>
                                        <option>02:00 AM</option>
                                        <option>03:00 PM</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <input type="hidden" name="" value="" />
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
                <?php
                require_once("footer.php");
                ?>