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
  $ans_question = "Leksyon 2 - Ueobarahon 6";
  
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
          <li class="breadcrumb-item active">Pahina 15</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
      <?php if($again == 1){ ?>
      <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <p class="card-title bold">Tandaan!</p>
                  <div class="col-lg-12">
                    <div class="card card-style">
                      <p class="card-text">
                        Ro lugar (<b>setting</b>) it istorya hay nasugid ku:<br>
                        • lugar kon siin natabo ro istorya,<br>
                        • oras kon kan-o natabo ro istorya<br>
                        Ro lugar (<b>setting</b>) it istorya hay nagasabat sa mga pangutana nga siin ag kan-o/hin-uno
                      </p>
                    </div>
                  </div>
                  <form method="post" action ="answer.php" onsubmit="return confirm('I pasa mo eon gd ing sabat?')">
                  <div class="card-title bold">Ueubrahon 6</div>
                  <p class="card-text">Pili-a ro tama nga lugar (<b>setting</b>) para sa masunod nga mga istorya. Isueat ro letra it tama nga sabat sa inyo nga papel.</p>
                  <p class="card-text"><b>1. Pyesta</b><br>
                  <b>Siin ra pwedeng matabo? __________</b><br>
                      a. sa baryo &nbsp;<br>
                      b. sa kantina<br>
                      c. sa baybay <br>
                      <input type="text" autocomplete="off" name="l2_u6_01" style="width:90%;"  placeholder="Imong sabat"><br>
                  <b>Hin-uno ra pwede nga matabo? __________</b><br>
                      a. Tyempo it Paskwa &nbsp;<br>
                      b. Pagbukas it klase<br>
                      c. bisan hin-uo <br>
                      <input type="text" autocomplete="off" name="l2_u6_02" style="width:90%;"  placeholder="Imong sabat"><br>
                  </p>
                  <p class="card-text"><b>2. Istorya hanungod sa mga Engkantada (<i>Fairy Tale</i>)</b><br>
                  <b> Siin ra pwedeng matabo? __________</b><br>
                      a. eskuylahan &nbsp;<br>
                      b. palasyo<br>
                      c. zoo <br>
                      <input type="text" autocomplete="off" name="l2_u6_03" style="width:90%;"  placeholder="Imong sabat"><br>
                  <b>Hin-uno ra pwede nga matabo? __________</b><br>
                      a. nakataliwan eon &nbsp;<br>
                      b. nagakatabo makaron<br>
                      c. matabo paeang <br>
                      <input type="text" autocomplete="off" name="l2_u6_04" style="width:90%;"  placeholder="Imong sabat"><br>
                  </p>
                  <p class="card-text"><b>3. Paindis-indis o Pakontes it Kanta sa Eskuylahan</b><br>
                    <b>Siin ra pwedeng matabo? __________</b><br>
                      a. sa parti<br>
                      b. sa isaeang ka programa<br>
                      c. sa opisina<br>
                      <input type="text" autocomplete="off" name="l2_u6_05" style="width:90%;"  placeholder="Imong sabat"><br>
                    <b>Hin-uno ra pwede nga matabo? __________</b><br>
                      a. alas-12 it tungang-gabii<br>
                      b. truadlaw<br>
                      c. pagkatapos it klase 
                      <input type="text" autocomplete="off" name="l2_u6_06" style="width:90%;"  placeholder="Imong sabat"><br>
                  </p>
                    <div style="text-align:right">
                      <br>
                      <input type="submit" name="submit_l2_u6" value="Ipasa ing sabat" style="background:#4154f1;color:white;border-radius:10px;">
                    </div>
                    </form>
                  <footer class="text-center page">Pahina 15</footer>
                </div>
                <div class="navigation-buttons">
                                <a href="page14.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                                <a href="page16.php"><button class="btn btn-primary float-right">Masunod</button></a>
                </div><!-- End navigation-buttons -->
              </div>
            </div>
          </div>
        </div>



        <?php } else { ?>
          <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                <h5 class="card-title text-center">Hasabtan eon it <?php echo  $ans['checker'] ?> beses</h5>
                  <h5 class="card-text bold text-center">Leksyon 2 - Ueubrahon 6</h5>
                  <br><br>
                    <div style="text-align:center;">
                      <a href="page15.php?uman=1">
                         <input type="submit" name="submit_l1_u3" value="Sabtan Uman ?" style="background:#4154f1;color:white;border-radius:10px;">
                      </a>
                    </div>
                    <br><br>
                  <footer class="text-center page">Pahina 15</footer>
                </div>
                <div class="navigation-buttons">
                                <a href="page14.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                                <a href="page16.php"><button class="btn btn-primary float-right">Masunod</button></a>
                </div><!-- End navigation-buttons -->
              </div>
            </div>
          </div>
        </div>
        <?php } ?>

    </section>

  </main><!-- End #main -->

  
  <?php
  require_once "includes/footer.php";
  ?>
