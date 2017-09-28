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
        <div class="col-md-12">
          <div id="detailSrv">
            <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Générale</a></li>
              <li><a href="#tab_2" data-toggle="tab">Produits installés</a></li>
              <li><a href="#tab_3" data-toggle="tab">Historique</a></li>
              <li><a href="#tab_fs" data-toggle="tab">Disque(s) / FS</a></li>
              <li><a href="#tab_4" data-toggle="tab">Rapport Sécu</a></li>
              <li><a href="#tab_5" data-toggle="tab">Ref Infra</a></li>
              
              <!-- li class=""><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li-->
              <li class="pull-right dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fa fa-gear"></i>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="srvRefresh"><i class="fa fa-refresh"></i>Forcer Refresh</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="btChangeConfigSrv"><i class="fa fa-pencil"></i>Modifier Config System</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="btAddApplication"><i class="fa fa-plus"></i>Ajouter application</a></li>
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
                      <dt>Statut :</dt>
                      <dd><span class="text-success"><strong>Power On</strong></span></dd>
                      <dt>Etat VMtools :</dt>
                        <dd><i class="fa fa-check text-success"></i></dd>
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
                      <dt>Stockage alloué :</dt>
                        <dd>75 Go</dd>
                      <dt>Stockage occupé :</dt>
                        <dd>12 Go</dd>  
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
                      <dt>&nbsp;</dt><dd>&nbsp;</dd>
                      <dt>Adresse IP :</dt>
                        <dd>172.23.248.11</dd>
                      <dt>Adresse MAC :</dt>
                        <dd>00:50:56:87:db:3f</dd>
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
                      <dt>&nbsp;</dt><dd>&nbsp;</dd>
                      <dt>&nbsp;</dt><dd>&nbsp;</dd>
                      <dt>&nbsp;</dt><dd>&nbsp;</dd>
                      <dt>Hote ESX :</dt>
                        <dd>HVESX610</dd>
                      <dt>Ressource Pool :</dt>
                        <dd>BUILD/ABONNEMENTS</dd>
                      
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
              				  TeamOtO
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
              				  TeamOtO
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
              				  TeamOtO
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
              <div class="tab-pane" id="tab_fs">
                <table class="table table-hover table-striped">
                  <thead>
                      <tr>
                          <th>Nom disque ou FS</th>
                          <th>Capacité</th>
                          <th>Occupé</th>
                          <th>Libre</th>
                      </tr>
                  </thead>
                  <tbody>    
                      <tr>
                          <td>/ </td>
                          <td> 3.99 Go </td>
                          <td>1.74 Go</td>
                          <td> 2.25 Go</td>
                      </tr>
                      <tr>
                          <td>/admin </td>
                          <td> 0.12 Go </td>
                          <td>0.01 Go</td>
                          <td> 0.11 Go</td>
                      </tr>
                      <tr>
                          <td>/appli </td>
                          <td> 0.06 Go </td>
                          <td>0 Go</td>
                          <td> 0.06 Go</td>
                      </tr>
                      <tr>
                          <td>/appli_tech </td>
                          <td> 0.06 Go </td>
                          <td>0 Go</td>
                          <td> 0.06 Go</td>
                      </tr>
                      <tr>
                          <td>/boot </td>
                          <td> 0.5 Go </td>
                          <td>0.2 Go</td>
                          <td> 0.3 Go</td>
                      </tr>
                      <tr>
                          <td>/data </td>
                          <td> 0.06 Go </td>
                          <td>0 Go</td>
                          <td> 0.06 Go</td>
                      </tr>
                      <tr>
                          <td>/data_sas </td>
                          <td> 0.06 Go </td>
                          <td>0 Go</td>
                          <td> 0.06 Go</td>
                      </tr>
                      <tr>
                          <td>/data_tech </td>
                          <td> 0.06 Go </td>
                          <td>0 Go</td>
                          <td> 0.06 Go</td>
                      </tr>
                      <tr>
                          <td>/data_tech/docker </td>
                          <td> 9.99 Go </td>
                          <td>0.33 Go</td>
                          <td> 9.66 Go</td>
                      </tr>
                      <tr>
                          <td>/data_tech/docker/images/overlay </td>
                          <td> 9.99 Go </td>
                          <td>0.33 Go</td>
                          <td> 9.66 Go</td>
                      </tr>
                      <tr>
                          <td>/home </td>
                          <td> 0.12 Go </td>
                          <td>0 Go</td>
                          <td> 0.12 Go</td>
                      </tr>
                      <tr>
                          <td>/log </td>
                          <td> 0.5 Go </td>
                          <td>0.03 Go</td>
                          <td> 0.47 Go</td>
                      </tr>
                      <tr>
                          <td>/produit </td>
                          <td> 0.06 Go </td>
                          <td>0 Go</td>
                          <td> 0.06 Go</td>
                      </tr>
                      <tr>
                          <td>/tmp </td>
                          <td> 1.49 Go </td>
                          <td>0.03 Go</td>
                          <td> 1.46 Go</td>
                      </tr>
                      <tr>
                          <td>/travail </td>
                          <td> 0.06 Go </td>
                          <td>0 Go</td>
                          <td> 0.06 Go</td>
                      </tr>
                      <tr>
                          <td>/travail/sys0/nmon </td>
                          <td> 0.06 Go </td>
                          <td>0 Go</td>
                          <td> 0.06 Go</td>
                      </tr>
                      <tr>
                          <td>/travail/sys0/systeme </td>
                          <td> 0.12 Go </td>
                          <td>0.01 Go</td>
                          <td> 0.11 Go</td>
                      </tr>
                      <tr>
                          <td>/travail/sys0/users </td>
                          <td> 0.12 Go </td>
                          <td>0 Go</td>
                          <td> 0.12 Go</td>
                      </tr>
                      <tr>
                          <td>/var </td>
                          <td> 1.99 Go </td>
                          <td>0.83 Go</td>
                          <td> 1.16 Go</td>
                      </tr>
                      <tr>
                          <td>/var/tmp </td>
                          <td> 1.99 Go </td>
                          <td>0.83 Go</td>
                          <td> 1.16 Go</td>
                      </tr>
                      <tr>
                          <td><b>Totaux :</b></td>
                          <td>31.4 Go</td>
                          <td>4.34 Go</td>
                          <td>27.06 Go</td>
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
               <pre>
                  ______   ______   ______   ______   ______   ______   ______   ______   ______ 
                 /_____/  /_____/  /_____/  /_____/  /_____/  /_____/  /_____/  /_____/  /_____/ 
                                                                                                 
                                                                                                 
                ________________________________ .___ _______  _____________________    _____    
                \______   \_   _____/\_   _____/ |   |\      \ \_   _____/\______   \  /  _  \   
                 |       _/|    __)_  |    __)   |   |/   |   \ |    __)   |       _/ /  /_\  \  
                 |    |   \|        \ |     \    |   /    |    \|     \    |    |   \/    |    \ 
                 |____|_  /_______  / \___  /    |___\____|__  /\___  /    |____|_  /\____|__  / 
                        \/        \/      \/                 \/     \/            \/         \/  
                                                                                                 
                                                                                                 
                  ______   ______   ______   ______   ______   ______   ______   ______   ______ 
                 /_____/  /_____/  /_____/  /_____/  /_____/  /_____/  /_____/  /_____/  /_____/ 
              </pre>   
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
           </div>
          
          
          <div class="box hidden" id="formChangeConfigSrv">
            <div class="box-header with-border">
              <h3 class="box-title">Modification de la configuration Système de la VM</h3>
            </div>
              <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                     <label for="vcpu" class="col-md-2 control-label">Vcpu :</label>
                     <div class="col-md-6">
                       <!--input tabindex="4" id="vcpu" type="text" value="1" class="slider form-control" data-slider-min="1" data-slider-max="8"
                             data-slider-step="1" data-slider-value="1" data-slider-orientation="horizontal"
                             data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue"-->
                       <input id="vcpu" type="text" class="slider form-control" data-slider-ticks="[1,2,4,6,8]" data-slider-ticks-snap-bounds="2" data-slider-id="blue" data-slider-value="4" tabindex="5"/>     
                       <span id="vcpuVal">4</span> Vcpu
                     </div>
                  </div>
  
                 <div class="form-group">
                     <label for="ram" class="col-md-2 control-label">Ram :</label>
                     <div class="col-md-6">
                       <input tabindex="5" id="ram" type="text" value="1" class="slider form-control" data-slider-min="2" data-slider-max="32"
                             data-slider-step="2" data-slider-value="8" data-slider-orientation="horizontal"
                             data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue">
                       <span id="ramVal">8</span></span> Go
                     </div>
                  </div>
  
                 <div class="form-group">
                    <label for="espaceDisque" class="col-md-2 control-label">Espace disque :</label>
                    <div class="col-md-6">
                      <select class="form-control" id="espaceDisque" style="width: 100%;" tabindex="6" aria-hidden="true">
                        <option>75 Go</option>
                        <option selected>150 Go</option>
                        <option>200 Go</option>
                        <option>300 Go</option>
                        <option>400 Go</option>
                        <option>500 Go</option>
                        
                      </select>
                    </div> 
                  </div>
  
                
                </div>
                </form>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default" id="cancel">Cancel</button>
                <button type="submit" class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-warning" id="btChangeVm" tabindex="11">Modifier</button>
              </div>
              <!-- /.box-footer -->
           </div>  
          
          <div class="box hidden" id="formAddApplication">
            <div class="box-header with-border">
              <h3 class="box-title">Ajout d'application(s)</h3>
            </div>
            <div class="box-body">
              
              <div class="row">
                <div class="col-md-12"><h4>Application(s) installé(es)</h4></div>
                <!-- DEBUT bouton applicatopn -->
                <div class="col-md-2">
            		  <div class="row">
              		  <label class="col-md-12 text-center">
              		    <img src="/v2/asset/img/socle.png" class="img-check profile-user-img img-circle hoverable check-application check">
              		    <input type="checkbox" name="chk1" id="item4" value="val2"  class="hidden" autocomplete="off">
              		  </label>
              		  <div class="col-md-12 text-center">SOCLE V1.0</div>
            		  </div>
            		</div>
            		<!-- FIN bouton application -->
            		<!-- DEBUT bouton applicatopn -->
        				<div class="col-md-2">
            		  <div class="row">
              		  <label class="col-md-12 text-center">
              		    <img src="/v2/asset/img/backup.png" class="img-check profile-user-img img-circle hoverable check-application check">
              		    <input type="checkbox" name="chk1" id="item4" value="val2" class="hidden" autocomplete="off">
              		  </label>
              		  <div class="col-md-12 text-center">SAUVEGARDE</div>
            		  </div>
            		</div>
            		<!-- FIN bouton application -->
            		<!-- DEBUT bouton applicatopn -->
        				<div class="col-md-2">
            		  <div class="row">
              		  <label class="col-md-12 text-center">
              		    <img src="/v2/asset/img/docker.png" class="img-check profile-user-img img-circle hoverable check-application check">
              		    <input type="checkbox" name="chk1" id="item4" value="val2" class="hidden" autocomplete="off">
              		  </label>
              		  <div class="col-md-12 text-center">Docker Engine V1.13</div>
            		  </div>
            		</div>
            		<!-- FIN bouton application -->
            		<div class="col-md-12"><h3>Ajouter</h3></div>
            		<!-- DEBUT bouton applicatopn -->
        				<div class="col-md-2">
            		  <div class="row">
              		  <label class="col-md-12 text-center">
              		    <img src="/v2/asset/img/eode.png" class="img-check profile-user-img img-circle hoverable check-application">
              		    <input type="checkbox" name="chk1" id="item4" value="val2" class="hidden" autocomplete="off">
              		  </label>
              		  <div class="col-md-12 text-center">EODE</div>
            		  </div>
            		</div>
            		<!-- FIN bouton application -->
            		<!-- DEBUT bouton applicatopn -->
        				<div class="col-md-2">
            		  <div class="row">
              		  <label class="col-md-12 text-center">
              		    <img src="/v2/asset/img/ihme.png" class="img-check profile-user-img img-circle hoverable check-application">
              		    <input type="checkbox" name="chk1" id="item4" value="val2" class="hidden" autocomplete="off">
              		  </label>
              		  <div class="col-md-12 text-center">IHME</div>
            		  </div>
            		</div>
            		<!-- FIN bouton application -->
            		<!-- DEBUT bouton applicatopn -->
        				<div class="col-md-2">
            		  <div class="row">
              		  <label class="col-md-12 text-center">
              		    <img src="/v2/asset/img/stp.png" class="img-check profile-user-img img-circle hoverable check-application">
              		    <input type="checkbox" name="chk1" id="item4" value="val2" class="hidden" autocomplete="off">
              		  </label>
              		  <div class="col-md-12 text-center">STP</div>
            		  </div>
            		</div>
            		<!-- FIN bouton application -->
            	</div>
            	<div class="row">
            		
            		<!-- DEBUT bouton applicatopn -->
        				<div class="col-md-2">
            		  <div class="row">
              		  <label class="col-md-12 text-center">
              		    <img src="/v2/asset/img/clientOracle12c.png" class="img-check profile-user-img img-circle hoverable check-application">
              		    <input type="checkbox" name="chk1" id="item4" value="val2" class="hidden" autocomplete="off">
              		  </label>
              		  <div class="col-md-12 text-center">Client Oracle 12c</div>
            		  </div>
            		</div>
            		<!-- FIN bouton application -->

            	</div>
            	<div class="row">
            	
            		<!-- DEBUT bouton applicatopn -->
        				<div class="col-md-2">
            		  <div class="row">
              		  <label class="col-md-12 text-center">
              		    <img src="/v2/asset/img/java.png" class="img-check profile-user-img img-circle hoverable check-application">
              		    <input type="checkbox" name="chk1" id="item4" value="val2" class="hidden" autocomplete="off">
              		  </label>
              		  <div class="col-md-12 text-center">JAVA 7</div>
            		  </div>
            		</div>
            		<!-- FIN bouton application -->
            		<!-- DEBUT bouton applicatopn -->
        				<div class="col-md-2">
            		  <div class="row">
              		  <label class="col-md-12 text-center">
              		    <img src="/v2/asset/img/java.png" class="img-check profile-user-img img-circle hoverable check-application">
              		    <input type="checkbox" name="chk1" id="item4" value="val2" class="hidden" autocomplete="off">
              		  </label>
              		  <div class="col-md-12 text-center">JAVA 8</div>
            		  </div>
            		</div>
            		<!-- FIN bouton application -->
            		
            	
            	</div>
            	<div class="row">
            		
            		<!-- DEBUT bouton applicatopn -->
        				<div class="col-md-2">
            		  <div class="row">
              		  <label class="col-md-12 text-center">
              		    <img src="/v2/asset/img/mariadb.png" class="img-check profile-user-img img-circle hoverable check-application">
              		    <input type="checkbox" name="chk1" id="item4" value="val2" class="hidden" autocomplete="off">
              		  </label>
              		  <div class="col-md-12 text-center">MariaDb</div>
            		  </div>
            		</div>
            		<!-- FIN bouton application -->
            		<!-- DEBUT bouton applicatopn -->
        				<div class="col-md-2">
            		  <div class="row">
              		  <label class="col-md-12 text-center">
              		    <img src="/v2/asset/img/postgresql.png" class="img-check profile-user-img img-circle hoverable check-application">
              		    <input type="checkbox" name="chk1" id="item4" value="val2" class="hidden" autocomplete="off">
              		  </label>
              		  <div class="col-md-12 text-center">PostGreSQL</div>
            		  </div>
            		</div>
            		<!-- FIN bouton application -->
             	</div>
            
            </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default" id="cancel">Cancel</button>
                <button type="submit" class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-warning" tabindex="11">Ajouter</button>
              </div>
              <!-- /.box-footer -->
           </div> 
          
        </div>   
      
      
      
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

<script> 
$('#inventaire').addClass('active');

$('#btChangeConfigSrv').click(function(){
  $('#detailSrv').hide();
  $('#formChangeConfigSrv').removeClass('hidden');
});


$('#btAddApplication').click(function(){
  $('#detailSrv').hide();
  $('#formAddApplication').removeClass('hidden');
});


$('#cancel').click(function(){
   $('#detailSrv').show();
   $('#formChangeConfigSrv').addClass('hidden');
});

$('#srvModalWarningConfirm').click(function(){
   $('#detailSrv').show();
   $('#formChangeConfigSrv').addClass('hidden');
   $('#formAddApplication').addClass('hidden');
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


$(".img-check").click(function(){
		$(this).toggleClass("check");
});

</script>

</body>
</html>
          