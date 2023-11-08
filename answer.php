<?php
require_once "config/master.php";

$databaseObj = new Database();
$conn = $databaseObj->getConnection();
$crud = new CRUD($conn);


// submit leksyon 1 Ueobrahon 3
if(isset($_POST['submit_l1_u3'])){

    $student_id = 0;
    $ans_question = "l1_u3";
    $score = 0;

    $l1_u3_01   = $_POST['l1_u3_01']; 
    $l1_u3_02   = $_POST['l1_u3_02']; 
    $l1_u3_03   = $_POST['l1_u3_03']; 
    $l1_u3_04   = $_POST['l1_u3_04']; 
    $l1_u3_05   = $_POST['l1_u3_05']; 

    $answer = "";

    if($l1_u3_01 == "Manghod"){
        $score ++;
        $answer .= $l1_u3_01." - tama, ";
    }else{
        $answer .= $l1_u3_01." - saea, ";
    }

    if($l1_u3_02 == "Isda"){
        $score ++;
        $answer .= $l1_u3_02." - tama, ";
    }else{
        $answer .= $l1_u3_02." - saea, ";
    }

    if($l1_u3_03 == "Keyk"){
        $score ++;
        $answer .= $l1_u3_03." - tama, ";
    }else{
        $answer .= $l1_u3_03." - saea, ";
    }

    if($l1_u3_04 == "Silhig"){
        $score ++;
        $answer .= $l1_u3_04." - tama, ";
    }else{
        $answer .= $l1_u3_04." - saea, ";
    }

    if($l1_u3_05 == "Libro"){
        $score ++;
        $answer .= $l1_u3_05." - tama";
    }else{
        $answer .= $l1_u3_05." - saea";
    }

    $dataToInsert = array(
        'ans_answer'    => $answer,
        'ans_question'  => $ans_question,
        'ans_score'    => $score,
        'student_id'    => $student_id,
    );
    $insertedId = $crud->create("tbl_answers", $dataToInsert);
    if($insertedId){

        echo "<meta http-equiv='refresh' content='0;url=leksyon1.php'>";
    }

}





?>