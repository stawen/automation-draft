<?php
	include_once '_templates/header.php';
	include_once '_templates/menu.php';
?> 
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Pilotage / Services </small>
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
        
        <!--------------------------
        | Stat de la construction   |
        -------------------------->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>VM Projet actives</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
              Détail <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>25</h3>

              <p>Serveurs physiques en construction</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
              Détail <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>22</h3>

              <p>Démantelement en cours</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
              Détail <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>12</h3>

              <p>Echecs</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
              Détail <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        
       <!--------------------------
        | Liste des demandes       |
        --------------------------> 
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Dernières demandes</h3>
         
              <div class="box-tools">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Demandeur</th>
                  <th>Type</th>
                  <th>Date demande</th>
                  <th>Etat</th>
                  <th></th>
                </tr>
                <tr>
                  <td><a href='#'>2185</a></td>
                  <td>John Doe</td>
                  <td>Centos</td>
                  <td>21/09/2017</td>
                  <td><span class="label label-success">Réussi</span></td>
                  <td>3 Machines pour test Rancher + docker</td>
                </tr>
                <tr>
                  <td><a href='#'>2184</a></td>
                  <td>John Doe</td>
                  <td>Centos</td>
                  <td>21/09/2017</td>
                  <td><span class="label label-success">Réussi</span></td>
                  <td>3 Machines pour test Rancher + docker</td>
                </tr>
                <tr>
                  <td><a href='#'>2183</a></td>
                  <td>John Doe</td>
                  <td>Centos</td>
                  <td>21/09/2017</td>
                  <td><span class="label label-success">Réussi</span></td>
                  <td>3 Machines pour test Rancher + docker</td>
                </tr>
                <tr>
                  <td><a href='#'>2182</a></td>
                  <td>Alexander Pierce</td>
                  <td>PDB Oracle</td>
                  <td>21/09/2017</td>
                  <td><span class="label label-warning">Approbation</span></td>
                  <td>Base de test pour Poc BRMS</td>
                </tr>
                <tr>
                  <td><a href='#'>2181</a></td>
                  <td>Bob Doe</td>
                  <td>RedHat 7.2</td>
                  <td>21/09/2017</td>
                  <td><span class="label label-primary">En cours</span></td>
                  <td>.</td>
                </tr>
                <tr>
                  <td><a href='#'>2180</a></td>
                  <td>Mike Doe</td>
                  <td>Alias DNS</td>
                  <td>21/09/2017</td>
                  <td><span class="label label-danger">Erreur</span></td>
                  <td></td>
                </tr>
                <tr>
                  <td><a href='#'>2179</a></td>
                  <td>Mike Doe</td>
                  <td>Alias DNS</td>
                  <td>21/09/2017</td>
                  <td><span class="label label-danger">Erreur</span></td>
                  <td></td>
                </tr>
                <tr>
                  <td><a href='#'>2178</a></td>
                  <td>Mike Doe</td>
                  <td>Alias DNS</td>
                  <td>21/09/2017</td>
                  <td><span class="label label-danger">Erreur</span></td>
                  <td></td>
                </tr>
              </table>
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

 

