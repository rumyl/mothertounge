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
    $ans_question = "Leksyon 1 - Ueobarahon 3";
    
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
      <h1>LEKSYON 1</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Pahina 6</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Main Cover -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Card with an image -->
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <?php if($again == 1){ ?>

                  <form method="post" action="answer.php" onsubmit="return confirm('I pasa mo eon gd ing sabat?')">
                  <h5 class="card-title text-center">Obrahon Naton Raya</h5>
                  <h5 class="card-text bold">Leksyon 1 - Ueubrahon 3</h5>
                  <p class="card-text">Kada pamisaea hay nagasaysay hanungod sa pangngaean. Basaha it mayad ro kada isaea ag isueat ro pangngaean nga anang ginasaysay sa papel.</p>
                  <p class="card-text"><b>1.</b> Imaw ag ako hay pareho it nanay ag tatay. Nagaistar kami sa sangka baeay. Imaw hay akon nga ____________?</p>
                  <input type="text" placeholder="Imong sabat" name="l1_u3_01" id="" style="width:100%;"><br><br>
                  <p class="card-text"><b>2.</b> Ginakaon naton ra. May palikpik ag himbis ra. Nagaeangoy ra sa tubi. Raya hay ____________.</p>
                  <input type="text" placeholder="Imong sabat" name="l1_u3_02" id="" style="width:100%;"><br><br>
                  <p class="card-text"><b>3.</b> Pwede ra nga bilog, kwadrado o ibang korti man. Ginapahaum ra ni nanay sa akon nga <b>birthday</b>. Raya hay____________.</p>
                  <input type="text" placeholder="Imong sabat" name="l1_u3_03" id="" style="width:100%;"><br><br>
                  <p class="card-text"><b>4.</b> Ginagamit ko ra kon maglimpyo it baeay. Ginagamit ko man ra sa pagbuoe it mga agiw. Nagabulig ra kakon sa pag-obra ku mga eubrahon sa sueod it baeay. Raya hay ____________.</p>
                  <input type="text" placeholder="Imong sabat" name="l1_u3_04" id="" style="width:100%;"><br><br>
                  <p class="card-text"><b>5.</b> Ginadaea ko ra sa eskuylahan. Ginabasa ko ra ag nagaturo kakon it maabu nga mga butang. Makabuoe man ako kara it abu nga mga idea. Raya hay____________.</p>
                  <input type="text" placeholder="Imong sabat" name="l1_u3_05" id="" style="width:100%;"><br><br>
                  
                  <div style="text-align:right">
                    <input type="submit" name="submit_l1_u3" value="Ipasa ing sabat" style="background:#4154f1;color:white;border-radius:10px;">
                  </div>
                  <footer class="text-center number">Pahina 6</footer>
                  </form>
                  
                  <?php } else { ?>

                   
                  <h5 class="card-title text-center">Hasabtan eon it <?php echo  $ans['checker'] ?> beses</h5>
                  <h5 class="card-text bold text-center">Leksyon 1 - Ueubrahon 3</h5>
                  <br><br>
                    <div style="text-align:center;">
                      <a href="page6.php?uman=1">
                         <input type="submit" name="submit_l1_u3" value="Sabtan Uman ?" style="background:#4154f1;color:white;border-radius:10px;">
                      </a>
                    </div>
                    <br><br>
                    <footer class="text-center number">Pahina 6</footer>
                 
                  <?php } ?>
                </div>
                <div class="navigation-buttons">
                                <a href="page5.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                                <a href="page7.php"><button class="btn btn-primary float-right">Masunod</button></a>
                </div><!-- End navigation-buttons -->
              </div>
            </div>      
          </div>

    </section>

  </main><!-- End #main -->

  
  <?php
  require_once "includes/footer.php";
  ?>
