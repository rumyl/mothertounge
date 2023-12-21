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
  $ans_question = "Leksyon 3 - Ueobarahon 1";
  
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
      <h1>LEKSYON 3</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Pahina 22</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
      <?php if($again == 1){ ?>
      <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <br>

              <div class="card-title bold">Leksyon 3 - Ueubrahon 1</div>
                <p class="card-text">Ro mga pamisaea hali sa masunod nga istorya hay <ins>owa</ins> nagapasunod. Kopyaha ag pasunuron ru mga pamisaea suno sa husto nga pagkapasunod ku mga hitabo. Ubrahon ra sa papel.</p>
                <p class="card-text bold">Istorya 1.</p>
                <p class="card-text">
                &nbsp; &nbsp; &nbsp; &nbsp; • Pagkagabii, sumakit ro akon nga tiyan.<br>
                &nbsp; &nbsp; &nbsp; &nbsp; • Nag-uli si nanay it sangka basket nga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prutas halin sa bukid.<br>
                &nbsp; &nbsp; &nbsp; &nbsp; • Kat owa si nanay gatan-aw, ginkaon ro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hilaw nga mangga,gaeangag sampalok.<br>
                &nbsp; &nbsp; &nbsp; &nbsp; • Ginhambaean na ako nga indi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pagkan-on ro nga mga maaslum nga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prutas.<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Nabatyagan ko ro kabueusgon.<br>
                </p>
                <form method="post" action ="answer.php" onsubmit="return confirm('I pasa mo eon gd ing sabat?')">
                <textarea style="width:100%;height:200px;" name="l3_u1_01"> </textarea>
                <div style="text-align:right">
                          <br>
                            <input type="submit" name="submit_l3_u1" value="Ipasa ing sabat" style="background:#4154f1;color:white;border-radius:10px;">
                          </div>
                </form>
              <footer class="text-center number">Pahina 22</footer>
            </div>
            <div class="navigation-buttons">
                                <a href="page21.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                                <a href="page23.php"><button class="btn btn-primary float-right">Masunod</button></a>
            </div><!-- End navigation-buttons -->
          </div>
        </div>
        <?php } else { ?>

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <h5 class="card-title text-center">Hasabtan eon it <?php echo  $ans['checker'] ?> beses</h5>
                  <h5 class="card-text bold text-center">Leksyon 3 - Ueubrahon 1</h5>
                  <br><br>
                    <div style="text-align:center;">
                      <a href="page22.php?uman=1">
                         <input type="submit" name="submit_l1_u3" value="Sabtan Uman ?" style="background:#4154f1;color:white;border-radius:10px;">
                      </a>
                    </div>
                    <br><br>
              <footer class="text-center number">Pahina 22</footer>
            </div>
            <div class="navigation-buttons">
                                <a href="page21.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                                <a href="page23.php"><button class="btn btn-primary float-right">Masunod</button></a>
            </div><!-- End navigation-buttons -->
          </div>
        </div>
        <?php } ?>
    </section>

  </main><!-- End #main -->

  
  <?php
  require_once "includes/footer.php";
  ?>
