<?php
require_once "config/master.php";
require_once "includes/metaheader.php";
require_once "includes/header.php";
require_once "includes/sidebar.php";

$again = 1;

if(isset($_GET['uman'])){

  $again = 1;

}else{

  $student_id = $_SESSION["user_id"];
  $ans_question = "Leksyon 2 - Ueobarahon 4";
  
  $check = "SELECT COUNT(*) as checker FROM tbl_answers WHERE ans_question ='$ans_question' AND student_id = '$student_id'";
  $ans = $crud->getSingleRow($check);
  if ($ans['checker'] == 0){
      $again = 1;
  }else{
      $again = 0;
  }

}


?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>LEKSYON 2</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Pahina 13</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
      <?php if($again == 1){ ?>
      <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-title">Isipon it Mayad!</div>
                  <p class="card-text">Sabtan ro masunod nga pangutana.<br>
                    1. Sin-o ro mga tawo sa istorya?<br>
                    2. Ano ro andang gina-obra sa saeakyan? Ham-an?<br>
                    3. Ano ro gin-obra ot mga unga samtang una sa sueod it saeakyan?</p>
                    <div class="card-title">Tun-an ag isugid!</div>
                    <div class="card-title bold">Ueubrahon 4</div>
                    <p class="card-text">Isueat ro kada pangaean sa nakaigo nga kahon. Ubrahon ra sa eain nga papel.</p>
                      <p class="card-text">a. sangkabote nga mantika<br>
                        b. sangkakaeaha nga biko<br>
                        c. sambilog nga mansanas<br>
                        d. sangkatasa nga asukar<br>
                        e. napueo nga mangga<br>
                        f. sangputos nga palaman<br>
                        g. sambilog nga saging<br>
                        h. sangkagarapon nga asin<br>
                        i. sangkabaso nga <b>juice</b><br>
                        j. tatlong ka kahil</p>
                        <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Mga Pangngaean nga Mahuyap (Count Nouns)</th>
                    <th scope="col">Mga Pangngaean nga Indi Mahuyap (Mass Nouns)</th>
                  </tr>
                </thead>
                <form method="post" action ="answer.php" onsubmit="return confirm('I pasa mo eon gd ing sabat?')">
                <tbody>
                  <tr>
                    <th scope="row"><input type="text" name="l2_u4_01" style="width:100%;"  placeholder="Imong sabat"></th>
                    <td><input type="text" name="l2_u4_07" style="width:100%;"  placeholder="Imong sabat"></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="l2_u4_02" style="width:100%;"  placeholder="Imong sabat"></th>
                    <td><input type="text" name="l2_u4_08" style="width:100%;"  placeholder="Imong sabat"></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="l2_u4_03" style="width:100%;"  placeholder="Imong sabat"></th>
                    <td><input type="text" name="l2_u4_09" style="width:100%;"  placeholder="Imong sabat"></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="l2_u4_04" style="width:100%;"  placeholder="Imong sabat"></th>
                    <td><input type="text" name="l2_u4_10" style="width:100%;"  placeholder="Imong sabat"></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="l2_u4_05" style="width:100%;"  placeholder="Imong sabat"></th>
                    <td><input type="text" name="l2_u4_11" style="width:100%;"  placeholder="Imong sabat"></td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" name="l2_u4_06" style="width:100%;"  placeholder="Imong sabat"></th>
                    <td><input type="text" name="l2_u4_12" style="width:100%;"  placeholder="Imong sabat"></td>
                  </tr>
                </tbody>
                  
              </table>
              <div style="text-align:right">
                    <br>
                    <input type="submit" name="submit_l2_u4" value="Ipasa ing sabat" style="background:#4154f1;color:white;border-radius:10px;">
                  </div>
                </form>
                  <footer class="text-center page">Pahina 13</footer>
                </div>
                <div class="navigation-buttons">
                                <a href="page12.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                                <a href="page14.php"><button class="btn btn-primary float-right">Masunod</button></a>
                </div><!-- End navigation-buttons -->
              </div>
            </div>
            <?php } else { ?>


            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                <h5 class="card-title text-center">Hasabtan eon it <?php echo  $ans['checker'] ?> beses</h5>
                  <h5 class="card-text bold text-center">Leksyon 2 - Ueubrahon 4</h5>
                  <br><br>
                    <div style="text-align:center;">
                      <a href="page13.php?uman=1">
                         <input type="submit" name="submit_l1_u3" value="Sabtan Uman ?" style="background:#4154f1;color:white;border-radius:10px;">
                      </a>
                    </div>
                    <br><br>
                  <footer class="text-center page">Pahina 13</footer>
                </div>
                <div class="navigation-buttons">
                                <a href="page12.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                                <a href="page14.php"><button class="btn btn-primary float-right">Masunod</button></a>
                </div><!-- End navigation-buttons -->
              </div>
            </div>
            <?php } ?>
    </section>

  </main><!-- End #main -->

  
  <?php
  require_once "includes/footer.php";
  ?>
