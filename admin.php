<?php
  require_once "includes/metaheader.php";
  require_once "includes/header.php";
  require_once "includes/sidebar.php";
  require_once "config/master.php";

?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
          <li class="breadcrumb-item active">Students</li>
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
                  <div class="card-title">Mga Studyante</div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col" style="text-align:center">Pangaean</th>
                            <th scope="col"  style="text-align:center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                            $sql = "SELECT * FROM tbl_users ORDER BY fullname ASC";
                            $records = $crud->read($sql);
                            if ($records !== false) {
                            foreach($records as $record) {

                                $user_id = $record['user_id'];
                                
                            ?>
                                <tr>
                                    <td style="text-align:left;"><?php echo $record['fullname'] ?></td>
                                    <td style="text-align:center;">
                                        <a href="score.php?user_id=<?php echo $user_id; ?>"><button class="btn-view" style="background:#4154f1;color:white;border-radius:10px;">View Score</button></a>
                                    </td>
                                    </tr>
                            <?php 
                            }
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
         
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
