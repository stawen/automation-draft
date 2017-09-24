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
          <div class="box box-solid">
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
                     <label for="vcpu" class="col-md-2 control-label">Vcpu :</label>
                     <div class="col-md-6">
                       <input tabindex="4" id="vcpu" type="text" value="1" class="slider form-control" data-slider-min="1" data-slider-max="8"
                             data-slider-step="1" data-slider-value="1" data-slider-orientation="horizontal"
                             data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue">
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
 
 
 
 
 
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-default" id="abordCreatedSrv">Cancel</button>
                  <button type="submit" class="btn btn-info pull-right">Créer</button>
                </div>
                <!-- /.box-footer -->
              </form>
              
              
              
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
     
      
      
      
      
      
      
      
      </div>


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

  $('#abordCreatedSrv').click(function(){
    
  })
</script>
</body>
</html>
          