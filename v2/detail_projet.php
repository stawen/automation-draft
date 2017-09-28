<?php
	include_once '_templates/header.php';
	include_once '_templates/menu.php';
?> 
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        P002015015 - ARGOS
        <small>Maitrise et control de la prod</small>
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

        <div class="col-md-12">
          <div>
            <!-- /.box-header -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Serveurs</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Détail projet</a></li>
                  <li><a href="#tab_3" data-toggle="tab">DDS</a></li>
                  <li><a href="#tab_4" data-toggle="tab">Recette de conformité</a></li>
              
                  <!-- li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li -->
              
                </ul>
                
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input id="serverProjectSearch" type="text" class="form-control" placeholder="Nom du projet | Nom CP | Architecte | etc">
                      </div>
                    </div> 
                    <table id="serverProject" class="table table-hover table-striped">
                      <thead>
                          <tr>
                              <th>Nom</th>
                              <th>Etat</th>
                              <th>Description</th>
                              <th>Date construction</th>
                              <th>Couloir</th>
                              <th>OS</th>
                              <th>CPU</th>
                              <th>RAM</th>
                              <th>Coût</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td><a href="detail_srv.php?srv=SL100380">SL100380</a></td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>Argos ELK - Gestion des Logs Technique</td>
                              <td>2017-06-15</td>
                              <td>DEV</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>4</td>
                              <td>16384</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td><a href="detail_srv.php?srv=SL100385">SL100385</a></td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
                              <td>Argos ELK - Gestion des Logs Techniques</td>
                              <td>2017-06-15</td>
                              <td>TTECH</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>6144</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td><a href="detail_srv.php?srv=SL100392">SL100392</a></td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-gear text-warning" title="En Prepraration"></i></td>
                              <td>Argos ELK - Gestion des Logs Techniques</td>
                              <td>2017-06-15</td>
                              <td>TTECH</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>16384</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td><a href="detail_srv.php?srv=SL100393">SL100393</a></td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>Argos ELK - Gestion des Logs Techniques</td>
                              <td>2017-06-15</td>
                              <td>TTECH</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>6144</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td><a href="detail_srv.php?srv=SL100394">SL100394</a></td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>Argos ELK - Gestion des Logs Techniques</td>
                              <td>2017-06-15</td>
                              <td>TTECH</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>6144</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td><a href="detail_srv.php?srv=SL100395">SL100395</a></td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>Argos ELK - Gestion des Logs Techniques</td>
                              <td>2017-06-15</td>
                              <td>TTECH</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>6144</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SL100396 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>Argos ELK - Gestion des Logs Techniques</td>
                              <td>2017-06-15</td>
                              <td>TTECH</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>6144</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SL100397 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>Argos ELK - Gestion des Logs Techniques</td>
                              <td>2017-06-15</td>
                              <td>TTECH</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>6144</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SL100398 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>Argos ELK - Gestion des Logs Techniques</td>
                              <td>2017-06-15</td>
                              <td>TTECH</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>6144</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SL100399 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>Argos ELK - Gestion des Logs Techniques</td>
                              <td>2017-06-15</td>
                              <td>TTECH</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>6144</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SL100400 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>Argos ELK - Gestion des Logs Techniques</td>
                              <td>2017-06-15</td>
                              <td>TTECH</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>6144</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLAPP763 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>LGD1 - E - ELK - LoGstash Database</td>
                              <td>2015-11-20</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></img></td>
                              <td>4</td>
                              <td>32768</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLAPP764 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>LGD2 - E - ELK - LoGstash Database</td>
                              <td>2015-11-20</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></img></td>
                              <td>4</td>
                              <td>32768</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLAPP765 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>LGI1 - E - ELK - LoGstash Interface (Kibana)</td>
                              <td>2015-11-20</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></img></td>
                              <td>4</td>
                              <td>32768</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLAPP766 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>LGK1 - E - ELK - LoGstash Kafka</td>
                              <td>2015-11-20</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>16384</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLAPP931 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>LGI1 - D - ELK Ttech</td>
                              <td>2016-06-24</td>
                              <td>TTECH</td>
                              <td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>32768</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLAPP932 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>LGD3 - E - ELK LoGstash Database</td>
                              <td>2016-06-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></img></td>
                              <td>4</td>
                              <td>32768</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLAPP933 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>LGD4 - E - ELK LoGstash Database</td>
                              <td>2016-06-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></img></td>
                              <td>4</td>
                              <td>32768</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLAPP936 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>LGD8 - E - ELK LoGstash Database</td>
                              <td>2016-06-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>32768</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLAPP937 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>LGI2 - E - ELK LoGstash Interface (Kibana)</td>
                              <td>2016-06-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></img></td>
                              <td>4</td>
                              <td>16384</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLAPP942 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>SEX1 - E - EZ-OPTIMA</td>
                              <td>2016-07-13</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>4096</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLAPQ181 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>SYS0 - E - ARGOS KAFKA</td>
                              <td>2017-05-30</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>8192</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLAPQ182 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>SYS0 - E - ARGOS KAFKA</td>
                              <td>2017-05-30</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>8192</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLAPQ183 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>SYS0 - E - ARGOS KAFKA</td>
                              <td>2017-05-30</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>8192</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLEHN001 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>EHN1 - E - ARGOS Elastic Hot Node</td>
                              <td>2017-01-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>65536</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLEHN002 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>EHN2 - E - ARGOS Elastic Hot Node</td>
                              <td>2017-01-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>65536</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLEHN003 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>EHN3 - E - ARGOS Elastic Hot Node</td>
                              <td>2017-01-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>65536</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLEHN004 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>EHN4 - E - ARGOS Elastic Hot Node</td>
                              <td>2017-01-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>65536</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLEMN001 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>SYS0 - E - ARGOS MasterNode</td>
                              <td>2017-02-14</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>8192</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLEMN002 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>SYS0 - E - ARGOS MasterNode</td>
                              <td>2017-02-14</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>8192</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLEMN003 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>SYS0 - E - ARGOS MasterNode</td>
                              <td>2017-02-14</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>2</td>
                              <td>8192</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLEWN001 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>EWN1 - E - ARGOS Elastic Warm Node</td>
                              <td>2017-01-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>65536</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLEWN002 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>EWN2 - E - ARGOS Elastic Warm Node</td>
                              <td>2017-01-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>65536</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLEWN003 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>EWN3 - E - ARGOS Elastic Warm Node</td>
                              <td>2017-01-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>65536</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLEWN004 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>EWN4 - E - ARGOS Elastic Warm Node</td>
                              <td>2017-01-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>65536</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLEWN005 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>EWN5 - E - ARGOS Elastic Warm Node</td>
                              <td>2017-01-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>65536</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLEWN006 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>EWN6 - E - ARGOS Elastic Warm Node</td>
                              <td>2017-01-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>65536</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLKBN001 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>SYS0 - E - ARGOS Kibana</td>
                              <td>2017-02-14</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>4</td>
                              <td>24576</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLMDW001 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>MDW1 - E - ARGOS Middleware</td>
                              <td>2017-01-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>65536</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLMDW003 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>MDW3 - E - ARGOS Middleware</td>
                              <td>2017-01-24</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>8</td>
                              <td>65536</td>
                              <td></td>
                          </tr>
                          <tr>
                              <td>SLMNT001 </td>
                              <td><i class="fa fa-check text-success" title="Ping OK"></i><i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
                              <td>SYS0 - E - ARGOS AlertingNode</td>
                              <td>2017-02-14</td>
                              <td>PROD</td>
                              <td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></img></td>
                              <td>4</td>
                              <td>24576</td>
                              <td></td>
                          </tr>
                      </tbody>
                  </table>

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class='row'> 
                      <div class='col-md-12'>
                        <dl class="dl-horizontal ">
                          <dt>Chef de projet :</dt>
                            <dd><a href="#" id="infoProject-CP" class="Xeditable">Florent GEOFFROY</a></dd>
                          <dt>Architecte :</dt>
                            <dd><a href="#" id="infoProject-Archi" class="Xeditable">Sébastien POHU</a></dd>
                          <dt>Intégrateur Téchnique :</dt>
                            <dd><a href="#" id="infoProject-IT" class="Xeditable">Jean-Gabriel GIRAUDEAU</a></dd>
                          <dt>Intégrateur CSM :</dt>
                            <dd><a href="#" id="infoProject-ITCsm" class="Xeditable"></a></dd>
                          <dt>Intégrateur d'exploit. :</dt>
                            <dd><a href="#" id="infoProject-IE" class="Xeditable">Emmanuel CHAUVET</a></dd>
                          <dt>Référent d'exploitation :</a></dt>
                            <dd><a href="#" id="infoProject-RefE" class="Xeditable"></a></dd>
                          <dt>Fiche projet :</dt>
                            <dd><a href="#" id="infoProject-Date" class="Xeditable">21/06/2016</a></dd>
                          <dt>Commentaire :</dt>
                            <dd><a href="#" id="infoProject-Commentaire" class="Xeditable">Lorem Ipsum dolorem</a></dd>
                          
                        </dl>
                      </div>
                    </div>
                    <div class='row'> 
                      <div class='col-md-12'>
                          <button class="btn btn-default pull-right" id="btinfoProject-change" tabindex="11"><i class="fa fa-edit"></i></button>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    <div class='col-md-12'>
                        <button class="btn btn-xs btn-default pull-right" id="btAddDDS"><i class="fa fa-plus"></i>&nbsp;Ajouter</button>
                    </div>
                    
                    <table class="table table-hover table-striped">
                      <thead>
                          <tr >
                              <th>DDS</th>
                              <th>Résumé</th>
                              <th>Etat</th>
                              <th>Last action</th>
                              <th>UDS assignée</th>
                              <th>User assigné</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>S120624</td>
                            <td>
                                Ajout DS build
                            </td>
                            <td><a class="btn btn-success btn-sm" title="" href="http://assyst-web-prod.maif.local/assystweb/application.do#event/DisplayEvent.do?dispatch=getEvent&amp;checkJukeBoxSettings=true&amp;eventId=5120624&amp;resultSet=" target="_blank" data-toggle="tooltip"
                                    data-placement="top" data-original-title="Cliquer pour ouvrir la DDS S120624"> Terminée (14/10/16-25/10/16)</a></td>
                            <td>
                                2016/10/25
                            </td>
                            <td>
                                CHG-C&amp;I-CC-CSTR
                            </td>
                            <td></td>
                            <td><button type="button" class="btn btn-sm btn-default"><i class="fa fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>S122874</td>
                            <td>
                                Alias DNS Argos ELK
                            </td>
                            <td><a class="btn btn-success btn-sm" title="" href="http://assyst-web-prod.maif.local/assystweb/application.do#event/DisplayEvent.do?dispatch=getEvent&amp;checkJukeBoxSettings=true&amp;eventId=5122874&amp;resultSet=" target="_blank" data-toggle="tooltip"
                                    data-placement="top" data-original-title="Cliquer pour ouvrir la DDS S122874"> Terminée (09/11/16-09/11/16)</a></td>
                            <td>
                                2016/11/09
                            </td>
                            <td>
                                CHG-PTRT-CDS-RES
                            </td>
                            <td></td>
                            <td><button type="button" class="btn btn-sm btn-default"><i class="fa fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>S128735</td>
                            <td>
                                Config SLAPP931 (ARGOS)
                            </td>
                            <td><a class="btn btn-success btn-sm" title="" href="http://assyst-web-prod.maif.local/assystweb/application.do#event/DisplayEvent.do?dispatch=getEvent&amp;checkJukeBoxSettings=true&amp;eventId=5128735&amp;resultSet=" target="_blank" data-toggle="tooltip"
                                    data-placement="top" data-original-title="Cliquer pour ouvrir la DDS S128735"> Terminée (10/01/17-12/01/17)</a></td>
                            <td>
                                2017/01/12
                            </td>
                            <td>
                                CHG-C&amp;I-CC-CSTR
                            </td>
                            <td></td>
                            <td><button type="button" class="btn btn-sm btn-default"><i class="fa fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>R132495</td>
                            <td>
                                Démantèlement ex Argos
                            </td>
                            <td><a class="btn btn-success btn-sm" title="" href="http://assyst-web-prod.maif.local/assystweb/application.do#event/DisplayEvent.do?dispatch=getEvent&amp;checkJukeBoxSettings=true&amp;eventId=5132495&amp;resultSet=" target="_blank" data-toggle="tooltip"
                                    data-placement="top" data-original-title="Cliquer pour ouvrir la DDS R132495"> Terminée (13/02/17-24/05/17)</a></td>
                            <td>
                                2017/05/24
                            </td>
                            <td>
                                CHG-C&amp;I-CC-CSTR
                            </td>
                            <td></td>
                            <td><button type="button" class="btn btn-sm btn-default"><i class="fa fa-trash"></i></button></td>
                        </tr>
                    </tbody>

                    </table>  
                   
                  </div> 
                  
                  <div class="tab-pane" id="tab_4">
                      Ne pas faire, car toute la recette se fera au travers d'automation d'ici Novembre 2017
                  </div>
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

<script>
  $('#projet').addClass('active');
  
  $(function () {
    var o = $('#serverProject').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'pageLength': 15,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true
    });
    $('#serverProject_filter').hide();
    $('#serverProjectSearch').keyup(function(){
      o.search($(this).val()).draw() ;
	})
  
  $(function(){
    $.fn.editable.defaults.url = '/post'; 
    $.fn.editable.defaults.mode = 'inline';
    $('.Xeditable').editable();
    $('.editable').editable('toggleDisabled');
    
    $('#btinfoProject-change').click(function() {
      $(this).toggleClass('btn-default btn-info');
      $('.editable').editable('toggleDisabled');
    });
    
  });  
  
  
});
</script>
</body>
</html>
          