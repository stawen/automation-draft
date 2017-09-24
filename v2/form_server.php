<?php
	include_once '_templates/header.php';
	include_once '_templates/menu.php';
?> 
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Construction CentOS
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">
       <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="col-md-12">
          <div class="box box-solid" id="infoCreateVm">
            <div class="box-body">
              
              <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    <label for="description" class="col-md-2 control-label">* Description :</label>
  
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="description" tabindex="1" placeholder="Description de votre besoin">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="projet" class="col-md-2 control-label">Projet :</label>
                    <div class="col-md-6">
                      <select class="form-control selectSearch" id="projet" style="width: 100%;" tabindex="2" aria-hidden="true">
                        <option></option>
                        <option>P002015015 - Consolidation des middleware - Iaas</option>
                        <option>P002015016 - lorem ipsum dolorem</option>
                        <option>P002016010 - Argos</option>
                        <option>P002016007 - Rambo</option>
                        <option>P002017002 - Socle API</option>
                        <option>R002017001 - MCO 01</option>
                      </select>
                    </div>  
                  </div>
                  <div class="form-group">
                    <label for="projet" class="col-md-2 control-label">Chef de projet :</label>
                    <div class="col-md-6">
                      <select class="form-control" id="projet" style="width: 100%;" tabindex="3" aria-hidden="true">
                        <option selected="selected"></option>
                        <option>Stanislas DRAUNET</option>
                        <option>Julien CLAUZEL</option>
                        <option>Florent GEOFFROY</option>
                        <option>Gilles MOUREAU</option>
                        <option>Denis POMAR</option>
                        
                      </select>
                    </div>  
                  </div>
                  
                  <div class="form-group">
                    <label for="codeBudget" class="col-md-2 control-label">Code Budget :</label>
  
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="codeBudget" tabindex="4" placeholder="Code budgetaire investissement pour la facturation">
                    </div>
                  </div>
                  
                  <div class="form-group">
                     <label for="nbVm" class="col-md-2 control-label">Nombre de VM :</label>
                     <div class="col-md-6">
                        <input tabindex="5" id="nbVm" type="text" value="1" class="slider form-control" data-slider-min="1" data-slider-max="10"
                             data-slider-step="1" data-slider-value="1" data-slider-orientation="horizontal"
                             data-slider-selection="before" data-slider-tooltip="show" data-slider-id="yellow">
                       <span id="nbVmVal">1</span></span> Machine(s) virtuelle(s)
                     </div>
                </div>
                  
                  <div class="form-group">
                     <label for="vcpu" class="col-md-2 control-label">Vcpu :</label>
                     <div class="col-md-6">
                       <!--input tabindex="4" id="vcpu" type="text" value="1" class="slider form-control" data-slider-min="1" data-slider-max="8"
                             data-slider-step="1" data-slider-value="1" data-slider-orientation="horizontal"
                             data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue"-->
                       <input id="vcpu" type="text" class="slider form-control" data-slider-ticks="[1,2,3,4,5,6,7,8]" data-slider-ticks-snap-bounds="1" data-slider-id="blue" data-slider-value="1" tabindex="5"/>     
                       <span id="vcpuVal">1</span> Vcpu
                     </div>
                  </div>
 
                 <div class="form-group">
                     <label for="ram" class="col-md-2 control-label">Ram :</label>
                     <div class="col-md-6">
                       <input tabindex="5" id="ram" type="text" value="1" class="slider form-control" data-slider-min="2" data-slider-max="32"
                             data-slider-step="2" data-slider-value="2" data-slider-orientation="horizontal"
                             data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue">
                       <span id="ramVal">2</span></span> Go
                     </div>
                  </div>
 
                 <div class="form-group">
                    <label for="espaceDisque" class="col-md-2 control-label">Espace disque :</label>
                    <div class="col-md-6">
                      <select class="form-control" id="espaceDisque" style="width: 100%;" tabindex="6" aria-hidden="true">
                        <option>75 Go</option>
                        <option>150 Go</option>
                        <option>200 Go</option>
                        <option>300 Go</option>
                        <option>400 Go</option>
                        <option>500 Go</option>
                        
                      </select>
                    </div> 
                  </div>
 
                 <div class="form-group">
                    <label for="environnement" class="col-md-2 control-label">Environnement Cible :</label>
                    <div class="col-md-6">
                      <select class="form-control" id="environnement" style="width: 100%;" tabindex="7" aria-hidden="true">
                        <option>T-TTECH</option>
                        <option>E-PRODUCTION</option>
                        <option>K-PERFORMANCE</option>
                        <option>F-FORMATION</option>
                        <option>P-PrePRODUCTION</option>
                        <option>R-RDV</option>
                        
                      </select>
                    </div>  
                  </div>
                 
                 <div class="form-group">
                  <label for="criticite" class="col-md-2 control-label">Criticité :</label>
                  <div class="col-md-6">
                    <select class="form-control" id="criticite" style="width: 100%;" tabindex="8" aria-hidden="true">
                      <option>C1</option>
                      <option>C2</option>
                      <option>C3</option>
                    </select>
                  </div>  
                </div>
                
                <div class="form-group">
                  <label for="pra" class="col-md-2 control-label">Restauration sur perte :</label>
                  <div class="col-md-6">
                    <select class="form-control" id="criticite" style="width: 100%;" tabindex="9" aria-hidden="true">
                      <option>Haute Disponibilité</option>
                      <option>Logiciel</option>
                    </select>
                  </div>  
                </div>
 
                <div class="form-group">
                     <label for="bail" class="col-md-2 control-label">Bail :</label>
                     <div class="col-md-6">
                       <input id="bail" type="text" class="slider form-control" data-slider-ticks="[3,10,30,60,90]" data-slider-ticks-snap-bounds="30" data-slider-id="blue" data-slider-value="1" tabindex="10"/>
                       <span id="bailVal">2</span></span> jours
                     </div>
                </div>
 
 
                </div>
                </form>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button class="btn btn-default" id="cancelCreatedSrv">Cancel</button>
                  <button type="submit" class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-createvm-info" id="btCreateVm" tabindex="11">Créer</button>
                </div>
                <!-- /.box-footer -->
              
              
              
              
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="box box-solid hidden" id="createVmOk">
            <div class="box-body">
              <div class="col-md-12">
                <h2><i class="fa fa-check fa-2x text-success"></i>Creation de machine(s) virtuelle(s) demandée(s)</h2>
              </div>
            </div>
            <div class="box-footer">
                  <button class="btn btn-info pull-right" id="btOk">Ok</button>
                </div>
          </div>
          
          
          
          
          
        </div>
     
      
      
      
      
      
      
      
      </div>


      <div class="modal modal-info fade" id="modal-createvm-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirmation</h4>
              </div>
              <div class="modal-body">
                <p>Confirmez-vous la création de machine(s) virtuelle(s) ?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-outline" id="btCreateVmModalConfirm">Confirmer</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
	include_once '_templates/footer.php';
	include_once '_templates/ctrlSideBar.php';
	include_once '_templates/requiredJs.php';
?> 

<script> 
  $('#server').addClass('active');
  //$('#createVmOk').hide();
   
  $('.selectSearch').select2({
    placeholder: 'Précisez le cadre de la demande'
  });
  
  $('.slider').slider();
  $("#vcpu").on("slide", function(slideEvt) {
    $("#vcpuVal").text(slideEvt.value);
  });
  $("#ram").on("slide", function(slideEvt) {
    $("#ramVal").text(slideEvt.value);
  });
  $("#bail").on("slide", function(slideEvt) {
    $("#bailVal").text(slideEvt.value);
  });
  $("#nbVm").on("slide", function(slideEvt) {
    $("#nbVmVal").text(slideEvt.value);
  });

  $('#cancelCreatedSrv').click(function(){
    window.location.replace("services_server.php");
  });
  
  $('#btCreateVmModalConfirm').click(function(){
    $('#modal-createvm-info').modal('toggle');
    $('#infoCreateVm').hide();
    $('#createVmOk').removeClass('hidden');
  });
  
  $('#btOk').click(function(){
    window.location.replace("suivi_service.php");
  });
  
</script>
</body>
</html>
          