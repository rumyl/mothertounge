<?php
  require_once "includes/metaheader.php";
  require_once "includes/header.php";
  require_once "includes/sidebar.php";
  

?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>LEKSYON 1</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Pahina 1</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Main Cover -->
        <div class="col-lg-12">
          <div class="row">

          <!-- Card with an image -->
          <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Yunit 1</h5>
                <p class="card-text text-center">Pagkilaea sa akong Kaugalingon ag Pamilya.</p>
            </div>
            <img src="assets/img/yunit1.png" class="card-img-bottom" alt="...">
            </div><!-- End Card with an image -->

            <div class="navigation-buttons">
                <button class="btn btn-primary float-left" style="cursor: not-allowed !important;opacity:0.5;">Previous</button>
                <a href="page2.php"><button class="btn btn-primary float-right">Next</button></a>
            </div><!-- End navigation-buttons -->


    </section>

  </main><!-- End #main -->

  
  <?php
  require_once "includes/footer.php";
  ?>
