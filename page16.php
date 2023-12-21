<?php
  require_once "includes/metaheader.php";
  require_once "includes/header.php";
  require_once "includes/sidebar.php";
  

?>
<style>
        .crossword {
            display: grid;
            grid-template-columns: repeat(11, 40px);
            grid-template-rows: repeat(12, 40px);
        }

        .cell {
            width: 40px;
            height: 40px;
            border: 1px solid #000;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            font-size: 18px;
            position: relative;
        }

        .cell textarea {
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            resize: none;
            font-family: inherit;
            font-size: inherit;
            text-align: center;
        }

        .cell.horizontal {
            border-bottom: none;
        }

        .cell.vertical {
            border-right: none;
        }
    </style>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>LEKSYON 2</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Pahina 16</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

      <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body"><br>
                <div class="card-title bold">Ueubrahon 7</div>
                  <p class="card-text">Sabtan ro mga kahon it tama nga pagbilinato (<b>spelling</b>) it mga bisaea halin sa istorya nga igadikta it maestro o maestra. Isueat ro sabat sa papel.</p>
                  
                <form method="post" action="">
                <div class="crossword">
                  <div class="cell horizontal" style="border:none;"></div>
                  <div class="cell horizontal" style="border:none;"></div>
                  <div class="cell horizontal" style="border:none;"></div>
                  <div class="cell horizontal">m</div>
                  <div class="cell horizontal" style="border:none;"></div>
                  <div class="cell horizontal" style="border:none;"></div>
                  <div class="cell horizontal" style="border:none;"></div>
                  <div class="cell horizontal" style="border:none;"></div>
                  <div class="cell horizontal" style="border:none;"></div>
                  <div class="cell horizontal" style="border:none;"></div>
                  <div class="cell horizontal" style="border:none;"></div>
                  <div class="cell horizontal" style="border:none;"></div>
                  <div class="cell horizontal" style="border:none;"></div>
                  <div class="cell horizontal" style="border-bottom:solid;">b</div>
                  <div class="cell"><textarea name="l2_u7_01" required></textarea></div>
                  <div class="cell horizontal" style="border-bottom:solid;">y</div>
                  <div class="cell"><textarea name="l2_u7_02" required></textarea></div>
                  <div class="cell horizontal" style="border-bottom:solid;">w</div>
                  <div class="cell" ><textarea name="l2_u7_03" required></textarea></div>
                  <div class="cell horizontal" style="border-bottom:solid;">s</div>
                  <div class="cell horizontal" style="border:none;"></div>
                  <div class="cell horizontal" style="border:none;"></div>

                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border-right:solid;">d</div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>


                  <div class="cell vertical">t</div>
                  <div class="cell vertical"> <textarea name="l2_u7_04" required></textarea></div>
                  <div class="cell vertical">n</div>
                  <div class="cell vertical"><textarea name="l2_u7_05" required></textarea></div>
                  <div class="cell vertical">e</div>
                  <div class="cell vertical"><textarea name="l2_u7_06" required></textarea></div>
                  <div class="cell vertical">n</div>
                  <div class="cell vertical"><textarea name="l2_u7_07" required></textarea></div>
                  <div class="cell vertical" ><textarea name="l2_u7_08" required></textarea></div>
                  <div class="cell vertical" style="border-right:solid;">n</div>
                  <div class="cell vertical" style="border:none;"></div>


                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border-right:solid;">g</div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>


                  <div class="cell vertical">b</div>
                  <div class="cell vertical" ><textarea name="l2_u7_09" required></textarea></div>
                  <div class="cell vertical">e</div>
                  <div class="cell vertical" ><textarea name="l2_u7_10" required></textarea></div>
                  <div class="cell vertical">l</div>
                  <div class="cell vertical" ><textarea name="l2_u7_11" required></textarea></div>
                  <div class="cell vertical">g</div>
                  <div class="cell vertical" ><textarea name="l2_u7_12" required></textarea></div>
                  <div class="cell vertical" ><textarea name="l2_u7_13" required></textarea></div>
                  <div class="cell vertical" ><textarea name="l2_u7_14" required></textarea></div>
                  <div class="cell vertical" style="border-right:solid;">n</div>


                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border-right:solid;" ><textarea name="l2_u7_15" required></textarea></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>

                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border-right:solid;">s</div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>

                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical">k</div>
                  <div class="cell vertical" ><textarea name="l2_u7_16" required></textarea></div>
                  <div class="cell vertical" >r</div>
                  <div class="cell vertical" >s</div>
                  <div class="cell vertical" ><textarea name="l2_u7_17" required></textarea></div>
                  <div class="cell vertical" >d</div>
                  <div class="cell vertical" style="border-right:solid;"><textarea name="l2_u7_18" required></textarea></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>

                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border-right:solid;"><textarea name="l2_u7_19" required></textarea></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>

                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border-right:solid;"><textarea name="l2_u7_20" required></textarea></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>

                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border-right:solid;">m</div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
                  <div class="cell vertical" style="border:none;"></div>
              </div>
                  <div style="text-align:right">
                    <input type="submit" name="submit" value="Ipasa ing sabat" style="background:#4154f1;color:white;border-radius:10px;">
                  </div>
              </form>
                  <footer class="text-center page">Pahina 16</footer>
                </div>
                <div class="navigation-buttons">
                                <a href="page15.php"><button class="btn btn-primary float-left">Nakataliwan</button></a>
                                <a href="page17.php"><button class="btn btn-primary float-right">Masunod</button></a>
                </div><!-- End navigation-buttons -->
              </div>
            </div>

    </section>

  </main><!-- End #main -->
  <script>
        function validateCrossword() {
            const contenteditableCells = document.querySelectorAll('[contenteditable=true]');
            for (let cell of contenteditableCells) {
                if (!cell.textContent.trim()) {
                    alert("All cells must be filled in.");
                    return false;
                }
            }
            return true;
        }
    </script>

  
  <?php
  require_once "includes/footer.php";
  ?>
