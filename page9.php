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
          <li class="breadcrumb-item active">Pahina 9</li>
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
                  <div class="card-title text-center bold">Obrahon Naton Raya</div>
                  <div class="card-title bold">Ueubrahon 2</div>
                  <p class="card-text"> &nbsp; &nbsp; &nbsp; Magtan-aw sa imong palibot. Makatao ka baea it mga halibawa it mga pangngaean nga mahuyap (<b>count nouns</b>) ag mga pangngaean nga indi mahuyap (<b>mass nouns</b>)? Isueat ra sa mga nagakaigo nga kolum sa inyong papel.</p>
                  <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Mga Pangngaean nga Mahuyap (Count Nouns)</th>
                    <th scope="col">Mga Pangngaean nga Indi Mahuyap (Mass Nouns)</th>
                  </tr>
                </thead>
                <form method="post" action="">
                <tbody>
                  <tr>
                    <th scope="row"><input type="text" name="l2_u2_01" style="width:100%;" required placeholder="Imong sabat"></th>
                    <td><input type="text" name="l2_u2_07" style="width:100%;" required placeholder="Imong sabat"></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="l2_u2_02" style="width:100%;" required placeholder="Imong sabat"></th>
                    <td><input type="text" name="l2_u2_08" style="width:100%;" required placeholder="Imong sabat"></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="l2_u2_03" style="width:100%;" required placeholder="Imong sabat"></th>
                    <td><input type="text" name="l2_u2_09" style="width:100%;" required placeholder="Imong sabat"></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="l2_u2_04" style="width:100%;" required placeholder="Imong sabat"></th>
                    <td><input type="text" name="l2_u2_10" style="width:100%;" required placeholder="Imong sabat"></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="l2_u2_05" style="width:100%;" required placeholder="Imong sabat"></th>
                    <td><input type="text" name="l2_u2_11" style="width:100%;" required placeholder="Imong sabat"></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="l2_u2_06" style="width:100%;" required placeholder="Imong sabat"></th>
                    <td><input type="text" name="l2_u2_12" style="width:100%;" required placeholder="Imong sabat"></td>
                  </tr>
                </tbody>
              </table>
              <div style="text-align:right">
                <input type="submit" name="submit" value="Submit Answers" style="background:#4154f1;color:white;border-radius:10px;">
              </div>
              </form>
              <footer class="text-center page">9</footer>
              <!-- End Bordered Table -->
                </div>
                <div class="navigation-buttons">
                            <a href="page8.php"><button class="btn btn-primary float-left">Previous</button></a>
                            <a href="page10.php"><button class="btn btn-primary float-right">Next</button></a>
                </div><!-- End navigation-buttons -->
              </div>
            </div>

          </div>

        </div><!-- End main cover -->

    </section>

  </main><!-- End #main -->

  
  <?php
  require_once "includes/footer.php";
  ?>
