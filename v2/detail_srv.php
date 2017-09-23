<?php
	include_once '_templates/header.php';
	include_once '_templates/menu.php';
?> 
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo ($_GET['srv']==null)?'SLXXXXXX':$_GET['srv'];  ?>
        
      </h1><small><i class="fa fa-check fa-2x text-success"></i>En Service &nbsp; | &nbsp; <i class="fa fa-vimeo fa-2x"></i>Virtuel</small>
      <ol class="breadcrumb">
        <li><a href="accueil-backend.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li> <a href="inventaire.php">Inventaire</a></li>
        <li class="active">Detail Serveur</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">
       <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Générale</a></li>
              <li><a href="#tab_2" data-toggle="tab">Produits installés</a></li>
              <li><a href="#tab_3" data-toggle="tab">Historique</a></li>
              <li><a href="#tab_4" data-toggle="tab">Rapport Sécu</a></li>
              <li><a href="#tab_5" data-toggle="tab">Ref Infra</a></li>
              
              <!-- li class=""><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li-->
              <li class="pull-right dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fa fa-gear"></i>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="srvRefresh"><i class="fa fa-refresh"></i>Forcer Refresh</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-pencil"></i>Modifier Config System</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-plus"></i>Ajouter application</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="srvReboot" data-toggle="modal" data-target="#modal-warning">
                    <i class="fa fa-undo"></i>Redemarrer</a>
                  </li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="srvStop" data-toggle="modal" data-target="#modal-warning"><i class="fa fa-power-off"></i>Arreter</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="srvSave"><i class="fa fa-link"></i>Faire un Snapshot</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="srvPause" data-toggle="modal" data-target="#modal-warning"><i class="fa fa-pause"></i>Suspendre</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="srvDelete" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-remove"></i>Detruire</a></li>
                </ul>
              </li>
              
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                
                <div class='row'>
                  <div class='col-md-6'>
                    <dl class="dl-horizontal">
                      <dt>Dernier inventaire :</dt>
                      <dd><i class="fa fa-check text-success"></i>22/09/2017</dd>
                      <dt>Test de vie :</dt>
                      <dd><i class="fa fa-check text-success"></i>22/09/2017</dd>
                    </dl>
                  </div>
                  <div class='col-md-6'>
                    <dl class="dl-horizontal">
                      <dt>Etat :</dt>
                      <dd><span class="text-success"><strong>Power On</strong></span></dd>
                    </dl>
                  </div>
                </div>  
                 <div class='row'> 
                  <div class='col-md-6'>
                    <dl class="dl-horizontal ">
                      <dt>Description :</dt>
                        <dd>Docker Rancher Orchestrator - Cluster Applicatif</dd>
                      <dt>Couloir :</dt>
                        <dd>E-PRODUCTION</dd>
                      <dt>OS :</dt>
                        <dd>RedHat</dd>
                      <dt>Version :</dt>
                        <dd>7.2</dd>
                      <dt>&nbsp;</dt><dd>&nbsp;</dd>
                      <dt>CPU :</dt>
                        <dd>2</dd>
                      <dt>RAM :</dt>
                        <dd>8192 Octets</dd>
                      <dt>Stockage :</dt>
                        <dd>75 Go</dd>
                      <dt>&nbsp;</dt><dd>&nbsp;</dd>
                      <dt>Cluster :</dt>
                        <dd>VI4030-G</dd>
                      <dt>VCenter :</dt>
                        <dd>SECVC004</dd>
                      <dt>&nbsp;</dt><dd>&nbsp;</dd>
                      <dt>Criticité :</dt>
                        <dd>C1</dd>
                      <dt>PRA :</dt>
                        <dd>Haute Disponibilité</dd>
                      <dt>xxxxxx :</dt>
                        <dd>Fusce dapibus, tellus ac cursus commodo</dd>
                    </dl>
                  </div>
                  <div class='col-md-6'>
                    <dl class="dl-horizontal ">
                      <dt>Propriétaire :</dt>
                        <dd>Production</dd>
                      <dt>Demandeur Construct. :</dt>
                        <dd>Stanislas DRAUNET</dd>
                      <dt>Construit :</dt>
                        <dd>01/08/2017</dd>  
                      <dt>Livré au CDSO :</dt>
                        <dd>12/08/2017</dd>
                      <dt>&nbsp;</dt><dd>&nbsp;</dd>
                      <dt>Projet Associé :</dt>
                        <dd>P002016011 - Socle API V2</dd>
                      <dt>Code Budget facturation :</dt>
                        <dd>201725148954</dd>
                      <dt>xxxxxx :</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                      <dt>xxxxxx :</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                      <dt>xxxxxx :</dt>
                        <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                        sit amet risus.
                      </dd>
                      <dt>xxxxxx :</dt>
                        <dd>A description list is perfect for defining terms.</dd>
                      <dt>xxxxxx :</dt>
                      <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                      <dt>xxxxxx :</dt>
                      <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                      <dt>xxxxxx :</dt>
                      <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                        sit amet risus.
                      </dd>
                    </dl>
                  </div>
                </div>
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                
                <table class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>Produit</th>
                      <th>Version</th>
                      <th>Date install.</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
              				<td>
              					 Docker Engine
              				</td>
              				<td>
              				  1.19
              				</td>
              				<td>
              				  01/08/2017
              				</td>
              				
              			</tr>
              			<tr>
              				<td>
              					 SOCLE
              				</td>
              				<td>
              				  1.0
              				</td>
              				<td>
              				  01/08/2017
              				</td>
              				
              			</tr>
              			<tr>
              				<td>
              					 SAUVEGARDE
              				</td>
              				<td>
              				  1.2
              				</td>
              				<td>
              				  01/08/2017
              				</td>
              				
              			</tr>
              			<tr>
              				<td>
              					 APP 1
              				</td>
              				<td>
              				  2.26
              				</td>
              				<td>
              				  01/08/2017
              				</td>
              			</tr>
              			<tr>
              				<td>
              					 Fédération des identitées v3.62
              				</td>
              				<td>
              				  3.62
              				</td>
              				<td>
              				  02/08/2017
              				</td>
              			</tr>
              			
                  </tbody>
              </table>
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                
                <table class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Type</th>
                      <th>Etat</th>
                      <th>Qui</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
              				<td>
              					 11/08/2017 - 15h54
              				</td>
              				<td>
              				  Mise en Service
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  CDSO
              				</td>
              				<td>
              				  Prise en compte et gestion de ce serveur
              				</td>
              			</tr>
                    <tr>
              				<td>
              					 10/08/2017 - 09h25
              				</td>
              				<td>
              				  Pour Mise en Service
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  TeamOto
              				</td>
              				<td>
              				  Demande au CDSO de prise en compte
              				</td>
              			</tr>
                    <tr>
              				<td>
              					 10/08/2017 - 09h24
              				</td>
              				<td>
              				  Pour Mise en Service
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  TeamOto
              				</td>
              				<td>
              				  Recette de conformité
              				</td>
              			</tr>
                    <tr>
              				<td>
              					 10/08/2017 - 08h38
              				</td>
              				<td>
              				  Pour Mise en Service
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  Stanislas DRAUNET 
              				</td>
              				<td>
              				  Demande d'execution de la recette de conformité 
              				</td>
              			</tr>
                    <tr>
              				<td>
              					 09/08/2017 - 16h04
              				</td>
              				<td>
              				  Update Configuration
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  VRO
              				</td>
              				<td>
              				  2 Vcpu appliqués
              				</td>
              			</tr>
                    <tr>
              				<td>
              					 09/08/2017 - 17h16
              				</td>
              				<td>
              				  Update Configuration
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  Stanislas DRAUNET 
              				</td>
              				<td>
              				  Demande de 2 Vcpu
              				</td>
              			</tr>
                    <tr>
              				<td>
              					 06/08/2017 - 16h03
              				</td>
              				<td>
              				  Update Configuration
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  VRO 
              				</td>
              				<td>
              				  8 Vcpu appliqués
              				</td>
              			</tr>
                    <tr>
              				<td>
              					 06/08/2017 - 16h02
              				</td>
              				<td>
              				  Update Configuration
              				</td>
              				<td>
              				  <span class="label label-warning">Approbation</span>
              				</td>
              				<td>
              				  WillFrid BARRAT 
              				</td>
              				<td>
              				  Validation Demande de 8 Vcpu
              				</td>
              			</tr>
                    <tr>
              				<td>
              					 06/08/2017 - 15h53
              				</td>
              				<td>
              				  Update Configuration
              				</td>
              				<td>
              				  <span class="label label-warning">Approbation</span>
              				</td>
              				<td>
              				  Stanislas DRAUNET
              				</td>
              				<td>
              				  Demande de 8 Vcpu
              				</td>
              			</tr>
                    
                    
                    <tr>
              				<td>
              					 05/08/2017 - 11h12
              				</td>
              				<td>
              				  Install. Produit (Manuelle)
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  VRO
              				</td>
              				<td>
              				  Fédération des identitées v3.62
              				</td>
              			</tr>
                    <tr>
              				<td>
              					 02/08/2017 - 09h02
              				</td>
              				<td>
              				  Install. Produit (Ansible)
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  VRO
              				</td>
              				<td>
              				  APP 1 v2.26
              				</td>
              			</tr>
                    <tr>
              				<td>
              					 01/08/2017 - 13h46
              				</td>
              				<td>
              				  Construction
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  VRO
              				</td>
              				<td>
              				  Fourniture de <?php echo ($_GET['srv']==null)?'SLXXXXXX':$_GET['srv'];  ?>
              				</td>
              			</tr>
              			<tr>
              				<td>
              					 01/08/2017 - 13h43
              				</td>
              				<td>
              				  Install. Produit (Ansible)
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  VRO
              				</td>
              				<td>
              				  Docker Engine  v1.19
              				</td>
              			</tr>
              			<tr>
              				<td>
              					 01/08/2017 - 13h34
              				</td>
              				<td>
              				  Install. Produit (Ansible)
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  VRO
              				</td>
              				<td>
              				  SOCLE v1.0
              				</td>
              			</tr>
              			<tr>
              				<td>
              					 01/08/2017 - 13h33
              				</td>
              				<td>
              				  Install. Produit (Ansible)
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				 VRO
              				</td>
              				<td>
              				  SAUVEGARDE (NetBackup) v1.2
              				</td>
              			</tr>
              			<tr>
              				<td>
              					 01/08/2017 - 13h32
              				</td>
              				<td>
              				  Install. Produit (Ansible)
              				</td>
              				<td>
              				  <span class="label label-danger">Echec</span>
              				</td>
              				<td>
              				  VRO
              				</td>
              				<td>
              				  APP 1 v2.26
              				</td>
              			</tr>
              			<tr>
              				<td>
              					 01/08/2017 - 13h30
              				</td>
              				<td>
              				  Construction
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  VRO
              				</td>
              				<td>
              				  OS installé
              				</td>
              			</tr>
                    <tr>
              				<td>
              					 01/08/2017 - 13h22
              				</td>
              				<td>
              				  Construction
              				</td>
              				<td>
              				  <span class="label label-success">Réussi</span>
              				</td>
              				<td>
              				  Stanislas DRAUNET
              				</td>
              				<td>
              				  Demande construction d'un Serveur Virtuel Centos (2821)
              				</td>
              			</tr>
              			
              			
                  </tbody>
              </table>
                
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas volutpat, nisi a tristique congue, erat sem rutrum leo, id molestie ex tellus quis purus. Nunc vitae dui elit. Etiam eu leo sit amet turpis faucibus scelerisque ut eget libero. Etiam ac nisl volutpat, volutpat urna quis, dignissim nunc. Vestibulum vehicula urna orci, in viverra nunc venenatis eu. Nunc scelerisque iaculis posuere. Suspendisse potenti. Proin egestas, arcu at iaculis sagittis, nisi arcu dapibus felis, eu pharetra metus eros quis quam. Sed quis elit tincidunt arcu molestie dictum ut vel lorem. Mauris quis rutrum leo, a auctor massa. Sed ut venenatis augue. Sed accumsan tellus vitae mollis rutrum. Duis nec lectus placerat erat sodales imperdiet.

Mauris nec urna turpis. Nullam ac libero mauris. Vestibulum imperdiet, lectus ut efficitur bibendum, leo tellus pharetra velit, pretium varius enim purus in dolor. Donec vel iaculis lacus, ac lacinia metus. Maecenas lacinia mauris ut fermentum pharetra. Praesent vestibulum sollicitudin sem vel pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer et est enim. Sed vehicula risus justo, non eleifend nunc ultrices nec. Sed vitae magna ut mi placerat lobortis. Morbi nisi diam, rutrum non auctor ac, faucibus sed magna. Pellentesque a maximus diam. Suspendisse sit amet bibendum enim, sit amet aliquam diam. Nullam consectetur nec metus sed elementum.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_5">
                id molestie ex tellus quis purus. Nunc vitae dui elit. Etiam eu leo sit amet turpis faucibus scelerisque ut eget libero. 
                Etiam ac nisl volutpat, volutpat urna quis, dignissim nunc. Vestibulum vehicula urna orci, in viverra nunc venenatis eu. 
                Nunc scelerisque iaculis posuere. Suspendisse potenti. Proin egestas, arcu at iaculis sagittis, nisi arcu dapibus felis, 
                eu pharetra metus eros quis quam. Sed quis elit tincidunt arcu molestie dictum ut vel lorem. Mauris quis rutrum leo
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
     
      
      
      
      
      
      
      
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
	include_once '_templates/modalSrvAction.php';
?>
<?php
	include_once '_templates/footer.php';
	include_once '_templates/ctrlSideBar.php';
	include_once '_templates/requiredJs.php';
?>

<script> $('#inventaire').addClass('active');</script>

</body>
</html>
          