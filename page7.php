<?php
  require_once "includes/metaheader.php";
  require_once "includes/header.php";
  require_once "includes/sidebar.php";
  

?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>LEKSYON 2</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Pahina 7</li>
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
                  <h5 class="card-title">Leksyon 2 Ako ag ro Akong Pamilya: Healty Habit</h5>
                  <p class="card-text bold">Tun-an ag Isugid.</p>
                  <div class="card-title bold">Ueubrahon 1</div>
                  <p class="card-text">basaha ro mga pamisaea. Kopyaha ro mga pangngaean sa kada pamisaea. Dayon, isugid kon raya hay pangaean nga mahuyap o pangaean nga indi mahuyap. Isueat sa papel ro imong sabat sa nakaigo nga kolum sa inyong papel.</p>
                  <p class="card-text">1. Ro tubi halin sa busay hay maeamig ag malimpyo.</p>
                  <p class="card-text">2. Nagbutang si Ana it puea nga laso sa anang buhok.</p>
                  <p class="card-text">3. Nagakinahangean si Nay Sally it sangka bote nga mantika para sa anang ginaeaha.</p>
                  <p class="card-text">4. Nagdaea si tatay it mga tinuean-on ag prutas para pandulse.</p>
                  <p class="card-text">5. Nagdaea si nanay it sanga lata nga gatas ag sangka maeukong nga otmil (<b>Oatmeal</b>)</p>

                  <form method="post" action="answer.php">
                  <p class="card-text bold">Pangngaaean nga mahuyap</p>
                  <p class="card-text"><input type="text" name="l2_u1_01" style="width:100%;" required placeholder="Imong sabat"></p>
                  <p class="card-text"><input type="text" name="l2_u1_02" style="width:100%;" required placeholder="Imong sabat"></p>
                  <p class="card-text"><input type="text" name="l2_u1_03" style="width:100%;" required placeholder="Imong sabat"></p>

                  <p class="card-text bold">Pangngaaean nga indi mahuyap</p>
                  <p class="card-text"><input type="text" name="l2_u1_04" style="width:100%;" required placeholder="Imong sabat"></p>
                  <p class="card-text"><input type="text" name="l2_u1_05" style="width:100%;" required placeholder="Imong sabat"></p>
                  <p class="card-text"><input type="text" name="l2_u1_06" style="width:100%;" required placeholder="Imong sabat"></p>
                  <div style="text-align:right">
                    <input type="submit" name="submit_l2_u1" value="Ipasa ing sabat" style="background:#4154f1;color:white;border-radius:10px;">
                  </div>
                  </form>
                  <footer class="text-center page">7</footer>
                </div>
                <div class="navigation-buttons">
                            <a href="page6.php"><button class="btn btn-primary float-left">Previous</button></a>
                            <a href="page8.php"><button class="btn btn-primary float-right">Next</button></a>
                </div><!-- End navigation-buttons -->
              </div>
            </div>

    </section>

  </main><!-- End #main -->

  
  <?php
  require_once "includes/footer.php";
  ?>
