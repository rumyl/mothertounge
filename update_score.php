<?php
  require_once "config/master.php";


  if(isset($_POST['submit'])){


    $condition = "ans_id = ".$_POST['ans_id'];

    $dataToUpdate = array(
        'ans_score' => $_POST['ans_score']
    );
    

    $update = $crud->update("tbl_answers", $condition, $dataToUpdate);
    if($update){
        echo "<meta http-equiv='refresh' content='0;url=score.php'>";
    }


  }


?>