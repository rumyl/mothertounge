<?php
  require_once "includes/metaheader.php";
  require_once "includes/header.php";
  require_once "includes/sidebar.php";
  require_once "config/master.php";
  date_default_timezone_set('Asia/Manila');


  $user_id = $_SESSION['user_id'];
  $get = "SELECT * FROM tbl_users WHERE user_id = '$user_id'";

  $name = $crud->getSingleRow($get);


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
                  <div class="card-title"><?php echo $name['fullname'] ?></div>
                  <table class="table table-bordered">
                    <thead>
                        <tr class="nowrap-header">
                            <th scope="col" style="text-align:center; font-size: 14px;">Ueobrahon</th>
                            <th scope="col" style="text-align:center; font-size: 14px;">Sabat</th>
                            <th scope="col" style="text-align:center; font-size: 14px;">Pilang Uman</th>
                            <th scope="col" style="text-align:center; font-size: 14px;">Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT a.ans_id, a.student_id, a.ans_answer, a.ans_question, a.ans_date, a.ans_score
                                    FROM tbl_users u
                                    JOIN tbl_answers a ON u.user_id = a.student_id
                                    WHERE u.user_id ='$user_id'
                                    AND (a.ans_question, a.ans_id) IN (
                                        SELECT ans_question, MAX(ans_id)
                                        FROM tbl_answers
                                        WHERE student_id = '$user_id'
                                        GROUP BY ans_question)
                                    ORDER BY a.ans_question ASC";
                            $records = $crud->read($sql);

                            if ($records !== false) {
                                foreach($records as $record) {
                                    $ans_question = $record['ans_question'];
                                    $check = "SELECT COUNT(*) as checker FROM tbl_answers WHERE ans_question ='$ans_question' AND student_id = '$user_id'";
                                    $ans = $crud->getSingleRow($check);
                        ?>
                        <tr>
                            <td style="text-align:left; vertical-align: middle; font-size: 12px;"><?php echo $record['ans_question'] ?></td>
                            <td style="text-align:left; vertical-align: middle; width:40%; font-size: 12px;"><?php echo $record['ans_answer'] ?></td>
                            <td style="text-align:center; vertical-align: middle; font-size: 12px;"><?php echo $ans['checker'] ." ka beses"?></td>
                            <td style="text-align:center; vertical-align: middle; font-size: 12px;"><?php echo $record['ans_score'] ?>
                              
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
