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
  $ans_question = "Leksyon 2 - Ueobarahon 3";
  
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
          <li class="breadcrumb-item active">Pahina 10</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

      <div class="col-lg-12">
          <div class="row">

          <?php if($again == 1){ ?>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-title bold">Leksyon 2 - Ueubrahon 3</div>
                  <p class="card-text">&nbsp; &nbsp; &nbsp; Basaha it mayad ro kada pamisaea. Pili-a ro bisaea halin sa kahon nga magakumpleto ku ideya it pamisaea. Dayom, isugid kon ro bisaea hay pangngaean nga mahuyap o pangngaean nga indi mahuyap. Isueat ro imong sabat sa linya.</p>
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-body card-style">
                        <p class="card-text">mga kamatis &nbsp; &nbsp; &nbsp; &nbsp; lusyon &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; kutsara<br>
                        mga mangga &nbsp; &nbsp; &nbsp; kape &nbsp; &nbsp; &nbsp; gatas &nbsp; &nbsp; &nbsp; tubi</p>
                      </div>
                    </div>
                  </div>
                  <form method ="post" action ="answer.php" onsubmit="return confirm('I pasa mo eon gd ing sabat?')">
                  <div class="row">
                    <p class="card-text"><ins>Mga Pangngaen nga indi Mahuyap</ins><br><br> 1. Ro pag-inom it maabu nga <ins>kape</ins> hay makapabugtaw kimo. <input type="text" name="l2_u3_01" style="width:100%;"  placeholder="Imong sabat"></p>
                    <p class="card-text"> 2. gamitan ko it ___________ ro akon nga panit agud indi magmaea. <input type="text" name="l2_u3_02" style="width:100%;"  placeholder="Imong sabat"></p>
                    <p class="card-text"> 3. ro mga Pilipino hay nagakaon nga may ___________ ag tinidor. <input type="text" name="l2_u3_03" style="width:100%;"  placeholder="Imong sabat"></p>
                    <p class="card-text"> 4. Ro pag-inom it sangkabaso ga ___________ sa sang adlaw hay mayad sa imong tue-an. <input type="text" name="l2_u3_04" style="width:100%;"  placeholder="Imong sabat"></p>
                    <p class="card-text"> 5. Kinahangean naton nga mag-inom it waeong ka baso it ___________ hambae it doktor. <input type="text" name="l2_u3_05" style="width:100%;"  placeholder="Imong sabat"></p>
                    <p class="card-text"> 6. Nagakinahangean si nanay it limang ________________ para sa anang ginaeaha. <input type="text" name="l2_u3_06" style="width:100%;"  placeholder="Imong sabat"></p>
                  </div>
                  <div style="text-align:right">
                    <br>
                    <input type="submit" name="submit_l2_u3" value="Ipasa ing sabat" style="background:#4154f1;color:white;border-radius:10px;">
                  </div>
                </form>
                </div>
                <footer class="text-center page">Pahina 10</footer><br>
              </div>
                <div class="navigation-buttons">
                            <a href="page9.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                            <a href="page11.php"><button class="btn btn-primary float-right">Masunod</button></a>
                </div><!-- End navigation-buttons -->
            </div>
            <?php } else { ?>

            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                <h5 class="card-title text-center">Hasabtan eon it <?php echo  $ans['checker'] ?> beses</h5>
                  <h5 class="card-text bold text-center">Leksyon 2 - Ueubrahon 3</h5>
                  <br><br>
                    <div style="text-align:center;">
                      <a href="page10.php?uman=1">
                         <input type="submit" name="submit_l1_u3" value="Sabtan Uman ?" style="background:#4154f1;color:white;border-radius:10px;">
                      </a>
                    </div>
                    <br><br>
                <footer class="text-center page">Pahina 10</footer><br>
              </div>
                <div class="navigation-buttons">
                            <a href="page9.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                            <a href="page11.php"><button class="btn btn-primary float-right">Masunod</button></a>
                </div><!-- End navigation-buttons -->
            </div>
            <?php } ?>
    </section>

  </main><!-- End #main -->

  
  <?php
  require_once "includes/footer.php";
  ?>
