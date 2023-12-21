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
  $ans_question = "Leksyon 2 - Ueobarahon 8";
  
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
          <li class="breadcrumb-item active">Pahina 18</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
      <?php if($again == 1){ ?>
      <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-title bold">Tandaan</div>
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-style">
                        <p class="card-text">
                          Ro hitabo (<b>Plot</b>) hay isaeang ka elemento it istorya<br>
                          May problema ra ag anang solusyon.<br>
                          Ro problema hay nagasugid hanungod sa sitwasyon nga ginapangatubang ku mga tawuhan sa istorya.<br>
                          Ro solusyon hay nagasugid kon paalin ginpangatubang ag ginsulbar ku mga tawuhan sa istorya ro problema.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card-title bold">Ueubrahon 8</div>
                    <p class="card-text">Basaha ro matag-ud nga istorya istorya sa idaeum. Tinguha-i nga makit-an ro problema sa istorya ag ro anang solusyon.</p>
                    <p class="card-text">Paragrapo A</p>
                    <p class="card-text">&nbsp;&nbsp;&nbsp; Ginbisitahan nanday Jenny ag Joyce ro ay lolo nanda nga eanas.</p>
                    <p class="card-text">&nbsp;&nbsp;&nbsp; "Naila gidd a ako sa lugar ngara," hambae ni Jenny. "Makangawa-ngawa ro mga kahoy!" hambae ni Joyce. "Abu-abu ra it bunga. Musyon sa akong paborito nga kahoy," dugang ni Joyce. "Kaabu kara ro anang bunga! Gusto ko nga magbuoe it pilang bilog ugaling, indi ko maabot."</p>
                    <div class="col-lg-12">
                    <div class="card">
                      <div class="card-style">
                        <p class="card-text">
                         
                          <form method="post" action ="answer.php" onsubmit="return confirm('I pasa mo eon gd ing sabat?')">
                          Ano ro problema?<br>
                          1. <input type="text" name="l2_u8_01" style="width:90%;"  placeholder="Imong sabat"><br>
                          2. <input type="text" name="l2_u8_02" style="width:90%;"  placeholder="Imong sabat"><br>
                          Ano ro solusyon?<br>
                          3. <input type="text" name="l2_u8_03" style="width:90%;"  placeholder="Imong sabat"><br>
                          4. <input type="text" name="l2_u8_04" style="width:90%;"  placeholder="Imong sabat"><br>

                          <div style="text-align:right">
                          <br>
                            <input type="submit" name="submit_l2_u8" value="Ipasa ing sabat" style="background:#4154f1;color:white;border-radius:10px;">
                          </div>
                          </form>
                        </p>
                      </div>
                    </div>
                  </div>
                  <footer class="text-center page">Pahina 18</footer>
                </div>
                <div class="navigation-buttons">
                                <a href="page17.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                                <a href="page19.php"><button class="btn btn-primary float-right">Masunod</button></a>
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
                  <h5 class="card-text bold text-center">Leksyon 2 - Ueubrahon 8</h5>
                  <br><br>
                    <div style="text-align:center;">
                      <a href="page18.php?uman=1">
                         <input type="submit" name="submit_l1_u3" value="Sabtan Uman ?" style="background:#4154f1;color:white;border-radius:10px;">
                      </a>
                    </div>
                    <br><br>
                  <footer class="text-center page">Pahina 18</footer>
                </div>
                <div class="navigation-buttons">
                                <a href="page17.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                                <a href="page19.php"><button class="btn btn-primary float-right">Masunod</button></a>
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
