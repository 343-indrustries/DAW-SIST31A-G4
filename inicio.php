<?php
  $page_title = 'Inicio';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>AGROSERVICIOS AGROPETS</h1>
          <br>
          <br>
         <center><img src="libs/css/LOGO-AGRO-SERVICIOS-2015_Color.png" width="700px"></center>
          <br>
          <h1>BIENVENIDO</h1>
     
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
