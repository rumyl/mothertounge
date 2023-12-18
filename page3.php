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
          <li class="breadcrumb-item active">Pahina 3</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Main Cover -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Card with an image -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title text-center">Leksyon 1 Ako ag Ro akon Pamilya</h5>
                    <h5 class="card-text bold-color">Tun-an ag Isugid</h5>
                    <h5 class="card-text bold">Ueubrahon 1</h5>
                    <p class="card-text">Ro istorya hay ginakumpunihan it eain-eain nga mga elemento.</p>
                    <p class="card-text">Mag-obra it mapa paagi sa pagsueat it mga impurmasyon hanugod sa istorya nga "Ro Akong Alaga nga Sapat"(The Pet)</p>
                    <h5 class="card-text bold">Mapa it Lugar</h5>
                    <p class="card-text bold-color">Setting Map</p>
                    <img src="assets/img/SM.png" class="card-img-bottom" alt="...">
                    <br><br>
                    <h5 class="card-text bold">Mapa it mga Tawo sa Istorya</h5>
                    <p class="card-text bold-color">Character Map</p>
                    <img src="assets/img/CM.png" class="card-img-bottom" alt="...">
                    <br><br>
                    <footer class="text-center number">3</footer>
                    </div>
                    <div class="navigation-buttons">
                            <a href="page2.php"><button class="btn btn-primary float-left">Previous</button></a>
                            <a href="page4.php"><button class="btn btn-primary float-right">Next</button></a>
                    </div><!-- End navigation-buttons -->
                </div>
            </div>

    </section>

  </main><!-- End #main -->

  
  <?php
  require_once "includes/footer.php";
  ?>
