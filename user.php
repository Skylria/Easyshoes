<?php 
session_start();
if ($_SESSION['cargo']!="adm"){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>EasyShoes</title>
    <?php include 'exts/csshrefs.php';?>
  </head>
  <body id="page-top">
    <?php include 'exts/pagetop.php';?>
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Usuários:</h2>
          </div>
        </div>
      </div>
    
    </section>
    <?php include'selects/select_data_user.php'; include 'exts/javascripts.php'; ?>