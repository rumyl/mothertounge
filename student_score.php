<?php
  require_once "includes/metaheader.php";
  require_once "includes/header.php";
  require_once "includes/sidebar.php";
  require_once "config/master.php";


  //$user_id = $_GET['user_id'];
  //$get = "SELECT * FROM tbl_users WHERE user_id = '$user_id'";

  //$name = $crud->getSingleRow($get);


?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
          <li class="breadcrumb-item active">Scores</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Main Cover -->
        <div class="col-lg-12">
          <div class="row">

          <!-- Card with an image on top -->
          <div class="card">
          <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-title"></div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col" style="text-align:center">Ueobrahon</th>
                            <th scope="col" style="text-align:center">Mga Sabat</th>
                            <th scope="col"  style="text-align:center">Pilang Uman</th>
                            <th scope="col"  style="text-align:center">Score</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
              </div>
            </div>
            <div class="navigation-buttons">
                  <a href="page32.php"><button class="btn btn-primary float-left">Previous</button></a>
            </div><!-- End navigation-buttons -->
            </div>
          </div><!-- End Card with an image on top -->
          </div>
        </div>

        <!-- End main cover -->

      </div>
    </section>

  </main><!-- End #main -->

  <?php
  require_once "includes/footer.php";
  ?>
