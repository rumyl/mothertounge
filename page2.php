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
          <li class="breadcrumb-item active">Pahina 2</li>
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
                    <h5 class="card-title">Tun-an ag Isugid</h5>
                    <p class="card-text">Basaha ro dayalugo it daywang ka mga eskuyla.</p>
                    <img src="assets/img/page1.png" class="card-img-bottom" alt="...">
                    <p class="card-text">Ano ro andang ginaistoryahan?</p>
                    <p class="card-text">Kon ikaw ro sambilog sa unga nga naga istorya, ano pa ro ibang impurmasyon nga imong itao?</p>
                    <p class="card-text">Magbuoe it kapareha ag kilaeahon ro kada isaea paagi sa pagsugid it kaparehong mga impurmasyon.</p>
                    <br>
                        <footer class="text-center number">Pahina 2</footer>
                </div>
                    <div class="navigation-buttons">
                        <a href="page1.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                        <a href="page3.php"><button class="btn btn-primary float-right">Masunod</button></a>
                    </div><!-- End navigation-buttons -->
                </div>
            </div>

    </section>

  </main><!-- End #main -->

  
  <?php
  require_once "includes/footer.php";
  ?>
