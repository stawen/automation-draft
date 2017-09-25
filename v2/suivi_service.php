<?php
	include_once '_templates/header.php';
	include_once '_templates/menu.php';
?> 
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Suivi Services
        <small>Toutes vos demandes depuis Automation </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
       <!--------------------------
        | Your Page Content Here |
        -------------------------->
      
      <div class="row">

        <div class="col-md-7 pull-right">
          <!-- form start -->
            <form class="form-horizontal">
              
                <div class="form-group">
                  
                  <label class="col-sm-2 control-label">Propriétaire :</label>

                  <div class="col-sm-2">
                    <select class="form-control">
                      <option>Moi</option>
                      <option>TeamOtO</option>
                      <option>Tout le monde</option>
                    </select>
                  </div>
                
                  <div class="col-sm-3">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                      <input id="ownerSearch" type="text" class="form-control" placeholder="Propriétaire">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                      <input id="serverSearch" type="text" class="form-control" placeholder="Serveur/Déscription">
                    </div>
                  </div>
                  
                </div>
            </form>
        
        </div>
        <div class="col-md-12">
          <div>
            <!-- /.box-header -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Serveurs</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Demandes</a></li>
              
                  <!-- li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li -->
              
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <table id="serveur" class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Description</th>
                          <th>Propriétaire</th>
                          <th>OS</th>
                          <th>Statut</th>
                          <th>Environnement</th>
                          <th>ID</th>
                          <th>Expiration</th>
                          <th>Déstruction</th>
                          <th>Création</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="detail_srv.php?srv=SL100571">SL100571</a></td>
                          <td>IaaS - test PostGres dans Docker</td>
                          <td>Yohan MARTIN</td>
                          <td>CentOS 7</td>
                          <td><i class="fa fa-check text-success"></i></td>
                          <td>POC</td>
                          <td>2802</td>
                          <td>21/10/2017 - 09h56</td>
                          <td>20/11/2017 - 09h56</td>
                          <td>21/09/2017 - 10h21</td>
                        </tr>
                        <tr>
                          <td><a href="detail_srv.php?srv=SL100569">SL100569</a></td>
                          <td>IaaS - test PostGres dans Docker</td>
                          <td>Yohan MARTIN</td>
                          <td>CentOS 7</td>
                          <td><i class="fa fa-check text-success"></i></td>
                          <td>POC</td>
                          <td>2801</td>
                          <td>21/10/2017 - 09h56</td>
                          <td>20/11/2017 - 09h56</td>
                          <td>21/09/2017 - 10h21</td>
                        </tr>
                        <tr>
                          <td><a href="detail_srv.php?srv=SL100570">SL100570</a></td>
                          <td>IaaS - test PostGres dans Docker</td>
                          <td>Yohan MARTIN</td>
                          <td>CentOS 7</td>
                          <td><i class="fa fa-check text-success"></i></td>
                         <td>POC</td>
                          <td>2812</td>
                          <td>21/10/2017 - 09h56</td>
                          <td>20/11/2017 - 09h56</td>
                          <td>21/09/2017 - 10h21</td>
                        </tr>
                        <tr>
                          <td><a href="detail_srv.php?srv=SL100567">SL100567</a></td>
                          <td>Demo stan pleniere</td>
                          <td>Stanislas DRAUNET</td>
                          <td>CentOS 7</td>
                          <td><i class="fa fa-pause text-danger"></i></td>
                          <td>TTECH</td>
                          <td>2800</td>
                          <td>22/09/2017 - 09h50</td>
                          <td>22/10/2017 - 09h50</td>
                          <td>19/09/2017 - 10h05</td>
                        </tr>
                        <tr>
                          <td><a href="detail_srv.php?srv=SL100871">SL100564</a></td>
                          <td>Demo IaaS Rancher</td>
                          <td>Stanislas DRAUNET</td>
                          <td>CentOS 7</td>
                          <td><i class="fa fa-pause text-danger"></i></td>
                          <td>F-FORMATION</td>
                          <td>2805</td>
                          <td>23/09/2017 - 17h05</td>
                          <td>23/10/2017 - 17h05</td>
                          <td>18/09/2017 - 17h23</td>
                        </tr>
                        <tr>
                          <td><a href="detail_srv.php?srv=SL100871">SL100559</a></td>
                          <td>Syslog-ng ELK</td>
                          <td>Johnny BARRAY</td>
                          <td>CentOS 7</td>
                          <td><i class="fa fa-check text-success"></i></td>
                          <td>E-PRODUCTION</td>
                          <td>2799</td>
                          <td>11/12/2017 - 15h50</td>
                          <td>10/01/2018 - 15h50</td>
                          <td>12/09/2017 - 16h21</td>
                        </tr>
                        
                      </tbody>
                    </table>
                
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <table id="demande" class="table table-hover table-striped">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Demande</th>
                                  <th>Description</th>
                                  <th>Etat</th>
                                  <th>Demandeur</th>
                                  <th>Date demande</th>
                                  
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td><strong>2922</strong></td>
                                  <td>Centos 7</td>
                                  <td></td>
                                  <td><span class="label label-info">En cours</span></td>
                                  <td>Willfrid BARRAT</td>
                                  <td>25/09/2017 16:49</td>
                              </tr>
                              <tr>
                                  <td><a href="detail_srv.php?srv=SL100564"><strong>2921</strong></a></td>
                                  <td>Expirer - SL100564</td>
                                  <td>Le bail des ressources a expiré.</td>
                                  <td><span class="label label-success">Réussi</span></td>
                                  <td>VRO</td>
                                  <td>23/09/2017 17:05</td>
                              </tr>
                              <tr>
                                  <td><a href="detail_srv.php?srv=SL100567"><strong>2917</strong></a></td>
                                  <td>Expirer - SL100567</td>
                                  <td>Le bail des ressources a expiré.</td>
                                  <td><span class="label label-success">Réussi</span></td>
                                  <td>VRO</td>
                                  <td>21/09/2017 09:55</td>
                              </tr>
                              <tr>
                                  <td><a href="detail_srv.php?srv=SL100567"><strong>2916</strong></a></td>
                                  <td>CentOS 7</td>
                                  <td>SL100560</td>
                                  <td><span class="label label-success">Réussi</span></td>
                                  <td>Stanislas DRAUNET</td>
                                  <td>21/09/2017 09:58</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#"><strong>2888</strong></a></td>
                                  <td>Création d'Alias DNS</td>
                                  <td>lb-fqdn-eprod.maif.local</td>
                                  <td><span class="label label-success">Réussi</span></td>
                                  <td>Stanislas DRAUNET</td>
                                  <td>20/09/2017 16:02</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#"><strong>2886</strong></a></td>
                                  <td>CentOS 7</td>
                                  <td></td>
                                  <td><span class="label label-danger">Echec</span></td>
                                  <td>Stanislas DRAUNET</td>
                                  <td>20/09/2017 14:21</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="detail_srv.php?srv=SL100543"><strong>2882</strong></a></td>
                                  <td>CentOS 7</td>
                                  <td>SL100543</td>
                                  <td><span class="label label-success">Réussi</span></td>
                                  <td>Stanislas DRAUNET</td>
                                  <td>19/09/2017 10:06</td>
                              </tr>
                              <tr>
                                  <td>
                                       <a href="#"><strong>2878</strong></a></td>
                                  <td>CentOS 7</td>
                                  <td></td>
                                  <td><span class="label label-danger">Echec</span></td>
                                  <td>Stanislas DRAUNET</td>
                                  <td>18/09/2017 17:31</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="detail_srv.php"><strong>2875</strong></a></td>
                                  <td>CentOS 7</td>
                                  <td>SL100540</td>
                                  <td><span class="label label-success">Réussi</span></td>
                                  <td>Stanislas DRAUNET</td>
                                  <td>18/09/2017 17:24</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#"><strong>2873</strong></a></td>
                                  <td>CentOS 7</td>
                                  <td></td>
                                  <td><span class="label label-danger">Echec</span></td>
                                  <td>Stanislas DRAUNET</td>
                                  <td>18/09/2017 16:57</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#"><strong>2871</strong></a></td>
                                  <td>CentOS 7</td>
                                  <td></td>
                                  <td><span class="label label-danger">Echec</span></td>
                                  <td>Stanislas DRAUNET</td>
                                  <td>18/09/2017 16:19</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#"><strong>2870</strong></a></td>
                                  <td>CentOS 7</td>
                                  <td></td>
                                  <td><span class="label label-danger">Echec</span></td>
                                  <td>Stanislas DRAUNET</td>
                                  <td>18/09/2017 15:51</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#"><strong>2869</strong></a></td>
                                  <td>Détruire</td>
                                  <td>SL100539</td>
                                  <td><span class="label label-success">Réussi</span></td>
                                  <td>Stanislas DRAUNET</td>
                                  <td>18/09/2017 15:38</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#"><strong>2868</strong></a></td>
                                  <td>CentOS 7</td>
                                  <td></td>
                                  <td><span class="label label-danger">Echec</span></td>
                                  <td>Stanislas DRAUNET</td>
                                  <td>18/09/2017 15:35</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#"><strong>2862</strong></a></td>
                                  <td>Ajout Application - SL100559</td>
                                  <td>Docker Engine</td>
                                  <td><span class="label label-success">Réussi</span></td>
                                  <td>TeamOtO</td>
                                  <td>13/09/2017 08:55</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#"><strong>2859</strong></a></td>
                                  <td>CentOS 7</td>
                                  <td>SL100539</td>
                                  <td><span class="label label-success">Réussi</span></td>
                                  <td>Florent GEOFFROY</td>
                                  <td>12/09/2017 16:22</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#"><strong>2858</strong></a></td>
                                  <td>Ajout Application - SL100558</td>
                                  <td>SOCLE</td>
                                  <td><span class="label label-success">Réussi</span></td>
                                  <td>Florent GEOFFROY</td>
                                  <td>12/09/2017 13:08</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#"><strong>2853</strong></a></td>
                                  <td>Création d'Alias DNS</td>
                                  <td>tpnl1.maif.local</td>
                                  <td><span class="label label-success">Réussi</span></td>
                                  <td>Franck LANTOINE</td>
                                  <td>11/09/2017 15:30</td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#"><strong>2852</strong></a></td>
                                  <td>Création d'Alias DNS</td>
                                  <td>fb-lb-auto.maif.local</td>
                                  <td><span class="label label-success">Réussi</span></td>
                                  <td>Franck LANTOINE</td>
                                  <td>11/09/2017 15:30</td>
                              </tr>
                              
                              
                          </tbody>
                      </table>
                  </div>
                  <!-- /.tab-pane -->

                </div>
              <!-- /.tab-content -->
              
            
            </div>
            
          </div>
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

<script> $('#services').addClass('active');</script>
</body>
</html>
          