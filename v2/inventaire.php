<?php
	include_once '_templates/header.php';
	include_once '_templates/menu.php';
?> 
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inventaire Serveurs
      </h1>
      <ol class="breadcrumb">
        <li><a href="accueil-backend.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Inventaire</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">
       <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input id="serverSearch" type="text" class="form-control" placeholder="Nom du serveur">
          </div>
        </div>  
        <div class="col-md-6"></div>
        <div class="col-md-12">
          <div class="box">

            <!-- /.box-header -->
            <div class="box-body">
              <table id="serveur" class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Statuts</th>
                    <th>Description</th>
                    <th>Couloir</th>
                    <th>OS</th>
                    <th>CPU</th>
                    <th>RAM</th>
                    <th>Disque</th>
                    <th>Cluster</th>
                    <th>VCenter</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php?srv=SL100298">SL100298</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-gear text-warning" title="En Préparation"></i></td>
            				<td>SRV DOCKER HOST PROJET IAAS DEMO</td>
            				<td></td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>4</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					<i class="fa fa-server">&nbsp;</i><a href="detail_srv.php?srv=SL100299">SL100299</a> 
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-gear text-warning" title="En Préparation"></i></td>
            				<td>SRV DOCKER HOST PROJET IAAS DEMO</td>
            				<td></td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>4</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php?srv=SL100329">SL100329</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-gear text-warning" title="En Préparation"></i></td>
            				<td>ARGOS - Ansible</td>
            				<td>DEV</td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					<i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100351</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>Docker Rancher Orchestrator - MariaDB</td>
            				<td>PROD</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>4096</td>
            				<td>75</td>
            				<td>VI4022</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100373</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Docker Rancher Orchestrator - Cluster Applicatif</td>
            				<td>PROD</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4023-G</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100374</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Docker Rancher Orchestrator - Cluster Applicatif</td>
            				<td>PROD</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4023-I</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100380</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Argos ELK - Gestion des Logs Technique</td>
            				<td>DEV</td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>4</td>
            				<td>16384</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100385</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Argos ELK - Gestion des Logs Techniques</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>6144</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100392</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Argos ELK - Gestion des Logs Techniques</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>16384</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100393</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Argos ELK - Gestion des Logs Techniques</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>6144</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100394</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Argos ELK - Gestion des Logs Techniques</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>6144</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100395</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Argos ELK - Gestion des Logs Techniques</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>6144</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100396</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Argos ELK - Gestion des Logs Techniques</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>6144</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100397</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Argos ELK - Gestion des Logs Techniques</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>6144</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100398</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Argos ELK - Gestion des Logs Techniques</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>6144</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100399</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Argos ELK - Gestion des Logs Techniques</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>6144</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100400</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Argos ELK - Gestion des Logs Techniques</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>6144</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100417</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>VM pour POC Ansible - MCO 2017 - R002017002</td>
            				<td>DEV</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100418</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>VM pour POC Ansible - MCO 2017 - R002017002</td>
            				<td>DEV</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100419</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>VM pour POC Ansible - MCO 2017 - R002017002</td>
            				<td>DEV</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100444</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>TTECH RANCHER</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>1</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100445</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>TTECH RANCHER</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>1</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100455</a>
            				</td>
            				<td><i class="fa fa-times text-danger" title="Ping KO"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>TEST RANCHER</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>4096</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100483</a>
            				</td>
            				<td><i class="fa fa-times text-danger" title="Ping KO"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>test wil</td>
            				<td></td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>1</td>
            				<td>4096</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100491</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>IDP4 - D - FDII - Identity Provider - PingIdentity - Cluster LAN PProd Tech</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>200</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100492</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>IDP3 - D - FDII - Identity Provider - PingIdentity - Cluster LAN PProd Tech</td>
            				<td>TTECH</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>200</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100493</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>IDP4 - K - FDII - Identity Provider - PingIdentity - Cluster LAN</td>
            				<td>PERF</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>200</td>
            				<td>VI4023-G</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100494</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>IDP3 - K - FDII - Identity Provider - PingIdentity - Cluster LAN</td>
            				<td>PERF</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>200</td>
            				<td>VI4023-I</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100497</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>Remplacement Minify</td>
            				<td>PROD</td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4023-I</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100512</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>IDP1 - D - FDII - Identity Provider - PingIdentity - LAN</td>
            				<td>DEV</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100513</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>IDP2 - I - FDII - Identity Provider - PingIdentity - LAN</td>
            				<td>INT</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>200</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100515</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>IDP1 - E - FDII - Identity Provider - PingIdentity - LAN</td>
            				<td>FORM</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4023-I</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100516</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>IDP6 - E - FDII - Identity Provider - PingIdentity - Cluster LAN</td>
            				<td>PROD</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>200</td>
            				<td>VI4023-G</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100517</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>IDP5 - E - FDII - Identity Provider - PingIdentity - Cluster LAN</td>
            				<td>PROD</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>200</td>
            				<td>VI4023-I</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100518</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>TEST DOCKER</td>
            				<td></td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>1</td>
            				<td>4096</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100523</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>Amélioration exploitabilité serveurs</td>
            				<td>INT</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100524</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>Amélioration exploitabilité serveurs</td>
            				<td>INT</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100525</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>Amélioration exploitabilité serveurs</td>
            				<td>PROD</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4023-G</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100526</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>Amélioration exploitabilité serveurs</td>
            				<td>PROD</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4023-I</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100527</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-check text-success" title="En Service"></i></td>
            				<td>Amélioration exploitabilité serveurs</td>
            				<td>PROD</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4023-G</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100528</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Amélioration exploitabilité serveurs</td>
            				<td>PROD</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>8192</td>
            				<td>75</td>
            				<td>VI4023-I</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100555</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>POC Serveur Neoj4 projet Fraude/Graph BDD</td>
            				<td></td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>4</td>
            				<td>32768</td>
            				<td>250</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100558</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Ansible Recette</td>
            				<td>REC</td>
            				<td><img src="/v2/asset/img/redhat.png" title="Red Hat Enterprise Linux 7 (64-bit)"></td>
            				<td>2</td>
            				<td>4096</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100559</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>Syslog-ng ELK</td>
            				<td></td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>4096</td>
            				<td>75</td>
            				<td>VI4022</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100564</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>demo IaaS-Rancher</td>
            				<td></td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>4096</td>
            				<td>75</td>
            				<td>VI4022</td>
            				<td>SECVC002</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100567</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>demo stan</td>
            				<td></td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>1</td>
            				<td>4096</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100569</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>IaaS - test Postgres dans Docker</td>
            				<td></td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>4096</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100570</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>IaaS - test Postgres dans Docker</td>
            				<td></td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>4096</td>
            				<td>75</td>
            				<td>VI4030-G</td>
            				<td>SECVC004</td>
            			</tr>
            			<tr>
            				<td>
            					 <i class="fa fa-vimeo">&nbsp;</i><a href="detail_srv.php">SL100571</a>
            				</td>
            				<td><i class="fa fa-check text-success" title="Ping OK"></i>  <i class="fa fa-check text-success" title="Inventaire OK"></i><i class="fa fa-coffee text-info" title="Projet"></i></td>
            				<td>IaaS - test Postgres dans Docker</td>
            				<td></td>
            				<td><img src="/v2/asset/img/centos.png" title="CentOS 4/5/6/7 (64-bit)"></td>
            				<td>2</td>
            				<td>4096</td>
            				<td>75</td>
            				<td>VI4030-I</td>
            				<td>SECVC004</td>
            			</tr>
                </tbody>
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
<script> $('#inventaire').addClass('active');</script>

</body>
</html>
          