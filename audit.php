<?php
  require_once "includes/metaheader.php";
  require_once "includes/header.php";
  require_once "includes/sidebar.php";
  require_once "config/master.php";
  date_default_timezone_set('Asia/Manila');


  $user_id = $_SESSION["user_id"];


?>

<style>
    .nowrap-header th {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis; /* This will add an ellipsis (...) for text overflow */
    }
</style>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Logs</li>
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
                  <div class="card-title">Imong mga record it pag-login</div>
                  <table class="table table-bordered">
                    <thead>
                        <tr class="nowrap-header">
                            <th scope="col" style="text-align:center; font-size: 14px;">Oras it pag login</th>
                            <th scope="col" style="text-align:center; font-size: 14px;">Pilang adlaw/oras eon naka lipas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM tbl_audit WHERE user_id = '$user_id' ORDER BY audit_id DESC";    
                            $records = $crud->read($sql);

                            if ($records !== false) {
                                foreach($records as $record) {

                        ?>
                        <tr>
                            <td style="text-align:left; vertical-align: middle; font-size: 12px;"><?php echo $crud->dateToWords($record['login_time']) ?></td>
                            <td style="text-align:left; vertical-align: middle; width:40%; font-size: 12px;"><?php echo $crud->displayRelativeDate($record['login_time']) ?></td>
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
