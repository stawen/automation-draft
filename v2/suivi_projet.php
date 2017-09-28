<?php
	include_once '_templates/header.php';
	include_once '_templates/menu.php';
?> 
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Suivi des projets
        <small>Recherche et gestion des demandes d'un projet</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="accueil-backend.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">suivi Projet</li>
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
            <input id="projectSearch" type="text" class="form-control" placeholder="Nom du projet | Nom CP | Architecte | etc">
          </div>
        </div>  
        <div class="col-md-6"></div>
        <div class="col-md-12">
          <div class="box">

            <!-- /.box-header -->
            <div class="box-body">
              <table id="project" class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>CP</th>
                    <th>Architecte</th>
                    <th>Création</th>
                    <th>Statuts</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td><a href="detail_projet.php" >D16F021 [Montée de version Eliot]</a></td>
                      <td>CAtherine COUPERY</td>
                      <td>Thierry BALLE</td>
                      <td>2016-06-08</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >D16F027 [Serveurs CE - DocumentAtion]</a></td>
                      <td>CAtherine COUPERY</td>
                      <td></td>
                      <td>2017-07-05</td>
                      <td><i class="fa fa-check-square text-success" title="Terminer"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >GREQO [GREQO]</a></td>
                      <td>Benoit LOUIS</td>
                      <td></td>
                      <td>2016-07-26</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >LogepAl [RemplAcement serveur LogepAl]</a></td>
                      <td>Philippe RENAUD</td>
                      <td></td>
                      <td>2016-04-25</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002015015-IAAS [Conso Middle SP02 - IAAS]</a></td>
                      <td>Florent GEOFFROY</td>
                      <td>Bruno POMMEREL</td>
                      <td>2016-12-22</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002015079 - ESE [Evolution du Socle Economique]</a></td>
                      <td>CAtherine GONTHIER</td>
                      <td>Didier ANGELI</td>
                      <td>2016-06-14</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002016005 [ESE LOT8 Nouvelle InfrA GED SAE]</a></td>
                      <td>CAtherine GONTHIER</td>
                      <td>Didier ANGELI</td>
                      <td>2017-01-16</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002016006-SEFAS [SEFAS - MCO Editique CentrAle]</a></td>
                      <td>Gilles MOUREAUX</td>
                      <td>Didier ANGELI</td>
                      <td>2016-06-07</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002016006-SIEE [SEFAS - MCO Editique LocAle]</a></td>
                      <td>Gilles MOUREAUX</td>
                      <td>Didier ANGELI</td>
                      <td>2017-01-17</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002016010-ARGO [ARGOS - Maitrise et control de la prod]</a></td>
                      <td>Florent GEOFFROY</td>
                      <td>SébAstien POHU</td>
                      <td>2016-06-21</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002016010-DYNA [ARGOS Dynatrace]</a></td>
                      <td>Florent GEOFFROY</td>
                      <td>SébAstien POHU</td>
                      <td>2016-10-25</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002016036-MDV [Assurex - MCO - Montée de Version]</a></td>
                      <td>Cyril LOPEZ</td>
                      <td>FAbien VITRA</td>
                      <td>2017-02-09</td>
                      <td><i class="fa fa-check-square text-success" title="Terminer"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002016040-DATALAKE [OpenMAnAge]</a></td>
                      <td>AlAin GUILLAUME</td>
                      <td>DAniel JOUANNY</td>
                      <td>2016-08-01</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002016043 [Office 365 ChAntier AuthentificAtion]</a></td>
                      <td>DAmien BLANCHOT</td>
                      <td>SébAstien POHU</td>
                      <td>2016-04-14</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002016064 [AssuretAt (BAscule DI PARNASSE à lA DI MAIF)]</a></td>
                      <td>FAbrice JUBIEN</td>
                      <td>Bruno POMMEREL</td>
                      <td>2016-10-24</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002016073-PAI [IndustriAlisAtion DéclA sinistre en visio (PPOME - PAI)]</a></td>
                      <td>Antoine GACIOCH</td>
                      <td>MArc SABOURIN</td>
                      <td>2017-09-15</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002016085 [EspAce Personnel - JIRA - PDD PAI]</a></td>
                      <td>Antoine GACIOCH / Clément JOLLET</td>
                      <td>MArc SABOURIN</td>
                      <td>2016-10-14</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002017010 [AméliorAtion du poste de trAvAil - SelfcAre Mot de pAsse]</a></td>
                      <td>YAnn CHAUMET</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-07-03</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002017011 [Levee obsolescence du moteur de règles (BRMS)]</a></td>
                      <td>Gilles MOUREAUX</td>
                      <td>SébAstien POHU</td>
                      <td>2017-01-16</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002017024 [FederAtion des Identites Internes]</a></td>
                      <td>StAnislAs DRAUNET - TAnguy RALLON</td>
                      <td>SébAstien POHU</td>
                      <td>2017-06-19</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002017027 [Montée de version HQ_Time 2017]</a></td>
                      <td>Augustin DE GERARD</td>
                      <td>Gilles CANTAREL / Thierry BALLE</td>
                      <td>2017-01-13</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002017033-CH1 [IntégrAtion FrontAux pour AppliAnces NetezzA - MCO]</a></td>
                      <td>Philippe RIVET</td>
                      <td>Gilles CANTAREL</td>
                      <td>2017-03-29</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002017048 [Socle API]</a></td>
                      <td>Julien CLAUZEL</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-02-22</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >P002017066 [GED Richesses HumAines]</a></td>
                      <td>AdriAn CIOCAN</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-07-24</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >PROJET_OPUN_MINIFI [PROJET OPUN - MINIFI - P002017019]</a></td>
                      <td>PAtrick GUENEAU</td>
                      <td>DAniel JOUANY</td>
                      <td>2017-04-18</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002016001-SAM [MCO 1 - SAM DMZ]</a></td>
                      <td>Christophe HIRTZ</td>
                      <td>SébAstien POHU</td>
                      <td>2016-12-20</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002016002SP3-Ch2 [Montée version Service Pilot]</a></td>
                      <td>Gilles MOUREAUX</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2016-04-14</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002016002SP6 [Montée de version Docupost]</a></td>
                      <td>Gilles MOUREAUX</td>
                      <td>Didier ANGELI</td>
                      <td>2016-04-14</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002016003-SP3.2 [PowerAMC]</a></td>
                      <td>Julien CLAUZEL</td>
                      <td>Gilles CANTAREL</td>
                      <td>2016-10-21</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002016003-SP6.2 [MCO 3 PostgreSQL]</a></td>
                      <td>Julien CLAUZEL</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2016-11-22</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002016005-SP02 [IntrAnet Lotus - RemplAcement SWIAW172]</a></td>
                      <td>Reynald NICODEME</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2016-12-15</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017001-SP02 [MCO 1 - RemplAcement-BlueCoAt]</a></td>
                      <td>Christophe HIRTZ</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-04-07</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017001-SP09 [MCO 1 - InfrAstructures centrAles et sécurité RAF 2016 (RAdius)]</a></td>
                      <td>Christophe HIRTZ</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-02-28</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017002-SP01 [MCO 2 - Obsolescence serveur Windows 2008 - WinlogbeAt]</a></td>
                      <td>Gilles MOUREAUX</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-04-04</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017002-SP03-SCOM [MCO 2 - SP03 - SCOM]</a></td>
                      <td>Gilles MOUREAUX</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-07-26</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017002-SP04 [MCO 2 - ExploitAbilité]</a></td>
                      <td>Gilles MOUREAUX</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-07-24</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017002-SP07 [MCO2 - Supervision du Build - ZAbbix]</a></td>
                      <td>Gilles MOUREAUX</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-02-17</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017002-SP08 [MCO 2 - Methernet]</a></td>
                      <td>Gilles MOUREAUX</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-07-05</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017002-SP09 [MCO 2 - RAF 2016 - Docupost]</a></td>
                      <td>Gilles MOUREAUX</td>
                      <td>Didier ANGELI</td>
                      <td>2017-03-16</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017002-SP2 [MCO 2 - SP02 Serveurs AIX]</a></td>
                      <td>Gilles MOUREAUX</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-02-06</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017003-SPx [ElAstic Cloud Entreprise - MCO-3 CH1]</a></td>
                      <td>Julien CLAUZEL/Benoît LOUIS</td>
                      <td>N/A</td>
                      <td>2017-03-15</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017004-SP05 [MCO 4 - SonAr]</a></td>
                      <td>BélindA CASTAIGNOS</td>
                      <td>MArc SABOURIN</td>
                      <td>2017-05-04</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017004-SP06 [MCO 4 - NeoloAd (remplAcement OATS)]</a></td>
                      <td>BélindA CASTAIGNOS</td>
                      <td>SébAstien POHU</td>
                      <td>2017-03-09</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017005-MCO5-OFF365 [R002017005-MCO5 - Office 365]</a></td>
                      <td>DAmien BLANCHOT</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-06-06</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017005-MCO5-SP02 [R002017005 - SP02 - IntrAnet Notes &amp; TATOU (SinequA)]</a></td>
                      <td>ReynAld NICODEME</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-06-01</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                  </tr>
                  <tr>
                      <td><a href="detail_projet.php" >R002017005-MDM [MCO 5 - MDM GAtewAy MAAS360]</a></td>
                      <td>ReynAld NICODEME</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
                      <td>2017-06-28</td>
                      <td><i class="fa fa-play" title="En cours"></i></td>
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
<script> 
$('#projet').addClass('active');

$(function () {
    var o = $('#project').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'pageLength': 15,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true
    });
    $('#project_filter').hide();
    $('#projectSearch').keyup(function(){
      o.search($(this).val()).draw() ;
	})
    
});
</script>

</body>
</html>
          