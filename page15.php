<?php
  require_once "includes/metaheader.php";
  require_once "includes/header.php";
  require_once "includes/sidebar.php";
  

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
                  <form method="post" action="">
                  <div class="card-title bold">Ueubrahon 6</div>
                  <p class="card-text">Pili-a ro tama nga lugar (<b>setting</b>) para sa masunod nga mga istorya. Isueat ro letra it tama nga sabat sa inyo nga papel.</p>
                  <p class="card-text"><b>1. Pyesta</b><br>
                  <b>Siin ra pwedeng matabo? __________</b><br>
                      a. sa baryo &nbsp;<br>
                      b. sa kantina<br>
                      c. sa baybay <br>
                      <input type="text" name="l2_u6_01" style="width:90%;" required placeholder="Imong sabat"><br>
                  <b>Hin-uno ra pwede nga matabo? __________</b><br>
                      a. Tyempo it Paskwa &nbsp;<br>
                      b. Pagbukas it klase<br>
                      c. bisan hin-uo <br>
                      <input type="text" name="l2_u6_02" style="width:90%;" required placeholder="Imong sabat"><br>
                  </p>
                  <p class="card-text"><b>2. Istorya hanungod sa mga Engkantada (<i>Fairy Tale</i>)</b><br>
                  <b> Siin ra pwedeng matabo? __________</b><br>
                      a. eskuylahan &nbsp;<br>
                      b. palasyo<br>
                      c. zoo <br>
                      <input type="text" name="l2_u6_03" style="width:90%;" required placeholder="Imong sabat"><br>
                  <b>Hin-uno ra pwede nga matabo? __________</b><br>
                      a. nakataliwan eon &nbsp;<br>
                      b. nagakatabo makaron<br>
                      c. matabo paeang <br>
                      <input type="text" name="l2_u6_04" style="width:90%;" required placeholder="Imong sabat"><br>
                  </p>
                  <p class="card-text"><b>3. Paindis-indis o Pakontes it Kanta sa Eskuylahan</b><br>
                    <b>Siin ra pwedeng matabo? __________</b><br>
                      a. sa parti<br>
                      b. sa isaeang ka programa<br>
                      c. sa opisina<br>
                      <input type="text" name="l2_u6_05" style="width:90%;" required placeholder="Imong sabat"><br>
                    <b>Hin-uno ra pwede nga matabo? __________</b><br>
                      a. alas-12 it tungang-gabii<br>
                      b. truadlaw<br>
                      c. pagkatapos it klase 
                      <input type="text" name="l2_u6_06" style="width:90%;" required placeholder="Imong sabat"><br>
                  </p>
                    <div style="text-align:right">
                      <br>
                      <input type="submit" name="submit" value="Submit Answers" style="background:#4154f1;color:white;border-radius:10px;">
                    </div>
                    </form>
                  <footer class="text-center page">15</footer>
                </div>
                <div class="navigation-buttons">
                                <a href="page14.php"><button class="btn btn-primary float-left">Previous</button></a>
                                <a href="page16.php"><button class="btn btn-primary float-right">Next</button></a>
                </div><!-- End navigation-buttons -->
              </div>
            </div>
          </div>
        </div>

    </section>

  </main><!-- End #main -->

  
  <?php
  require_once "includes/footer.php";
  ?>
