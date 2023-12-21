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
  $ans_question = "Leksyon 2 - Ueobarahon 5";
  
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
          <li class="breadcrumb-item active">Pahina 14</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
      <?php if($again == 1){ ?>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <p class="card-title bold">Ueubrahon 5</p>
                  <p class="card-text">Magpili it limang ka grupo it mga bisaea (<b>phrase</b>) halin sa listahan nga makit-an sa ueubrahon 4. Isueat ro imong kaugalingon nga pamisaea gamit ro mga pangngaean</p>
                  <p class="card-text">
                    <form method="post" action ="answer.php" onsubmit="return confirm('I pasa mo eon gd ing sabat?')">
                    1. <input type="text" name="l2_u5_01" style="width:90%;"  placeholder="Imong sabat"><br>
                    2. <input type="text" name="l2_u5_02" style="width:90%;"  placeholder="Imong sabat"><br>
                    3. <input type="text" name="l2_u5_03" style="width:90%;"  placeholder="Imong sabat"><br>
                    4. <input type="text" name="l2_u5_04" style="width:90%;"  placeholder="Imong sabat"><br>
                    5. <input type="text" name="l2_u5_05" style="width:90%;"  placeholder="Imong sabat"><br></p>
                    <div style="text-align:right">
                    <br>
                      <input type="submit" name="submit_l2_u5" value="Ipasa ing sabat" style="background:#4154f1;color:white;border-radius:10px;">
                    </div>
                    </form>
                    <p class="card-title bold">Tun-ag Isugid!</p>
                    <p class="card-text">Basaha ro paragrapo halin sa istorya nga "Paibabaw, Paibabaw ag Paeayo" (Up, Up, and Away).</p>
                    <p class="card-text">&nbsp;&nbsp;&nbsp; Adlaw nga Sabado. Sanday Tatay ag Marlon hay nangin magkaibahan sa bilog sa adlaw. Nagtinikang sanda sa kaeanasan ag mabato nga daeanon hasta nga nakaabot sanda sa kahilamnan. Nalipay gid it duro si Marlon!</p>
                    <p class="card-text">
                      Siin natabo ro istorya?<br>
                      Kan -o ra natabo?<br>
                      Siin ro lugar (<b>setting</b>) it istorya?<br>
                      Ano nga parte it istorya ro nagasugid kon kan-o ag siin natabo ro istorya?
                    </p>
                    <footer class="text-center page">Pahina 14</footer>
                </div>
                <div class="navigation-buttons">
                                <a href="page13.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                                <a href="page15.php"><button class="btn btn-primary float-right">Masunod</button></a>
                </div><!-- End navigation-buttons -->
              </div>
            </div>
          <?php } else { ?>



            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                <h5 class="card-title text-center">Hasabtan eon it <?php echo  $ans['checker'] ?> beses</h5>
                  <h5 class="card-text bold text-center">Leksyon 2 - Ueubrahon 5</h5>
                  <br><br>
                    <div style="text-align:center;">
                      <a href="page14.php?uman=1">
                         <input type="submit" name="submit_l1_u3" value="Sabtan Uman ?" style="background:#4154f1;color:white;border-radius:10px;">
                      </a>
                    </div>
                    <br><br>
                    <footer class="text-center page">Pahina 14</footer>
                </div>
                <div class="navigation-buttons">
                                <a href="page13.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                                <a href="page15.php"><button class="btn btn-primary float-right">Masunod</button></a>
                </div><!-- End navigation-buttons -->
              </div>
            </div>
            <?php } ?>
    </section>

  </main><!-- End #main -->

  
  <?php
  require_once "includes/footer.php";
  ?>
