<?php
  require_once "includes/metaheader.php";
  require_once "includes/header.php";
  require_once "includes/sidebar.php";
?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Home</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">

        <!-- Main Cover -->
        <div class="col-lg-4">
          <div class="row">

          <!-- Card with an image on top -->
          <div class="card">
            <img src="assets/img/cover.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mother Tongue - Based Multilingual Education</h5>
              <p class="card-text">Kagamitan ng Mag-aaral Akeanon.</p>
            </div>
          </div><!-- End Card with an image on top -->

          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title text-center">Table of Contents</div>
              <p class="card-text">Yunit 1: Pagkilaea sa Akong Kaugalingon ag Pamilya</p>
              <p class="card-text"> <a href="page1.php"><b>Pahina 1</b></a> - Leksyon 1: Ako ag Ro akong Pamilya</p>
              <p class="card-text"> <a href="page7.php"><b>Pahina 7</b></a> - Leksyon 2: Ako ag ro Akong Pamilya: Healthy Habit</p>
              <p class="card-text"> <a href="page22.php"><b>Pahina 22</b></a> - Leksyon 3: Mga Butang nga Akong Nasadyahan ag Mga Tawong Akong Nailaan</p>
            </div>
          </div>
        </div>
        <!-- End main cover -->

      </div>
    </section>

  </main><!-- End #main -->

  <?php
  require_once "includes/footer.php";
  ?>
