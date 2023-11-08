<?php
session_start();
require_once "config/master.php";

$databaseObj = new Database();
$conn = $databaseObj->getConnection();
$crud = new CRUD($conn);

// submit leksyon 1 Ueobrahon 3
if(isset($_POST['submit_l1_u3'])){

    $student_id = $_SESSION["user_id"];
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


// submit leksyon 1 Ueobrahon 3
if(isset($_POST['submit_l2_u1'])){

    $student_id = $_SESSION["user_id"];
    $ans_question = "l2_u1";
    $score = 0;

    $l2_u1_01   = $_POST['l2_u1_01']; 
    $l2_u1_02   = $_POST['l2_u1_02']; 
    $l2_u1_03   = $_POST['l2_u1_03']; 
    $l2_u1_04   = $_POST['l2_u1_04']; 
    $l2_u1_05   = $_POST['l2_u1_05']; 
    $l2_u1_06   = $_POST['l2_u1_06']; 

    $answer = "";
    $answer .= $l2_u1_01.", ".$l2_u1_02.", ".$l2_u1_03.", ".$l2_u1_04.", ".$l2_u1_05.", ".$l2_u1_06;



    $dataToInsert = array(
        'ans_answer'    => $answer,
        'ans_question'  => $ans_question,
        'ans_score'     => 0,
        'student_id'    => $student_id,
    );
    $insertedId = $crud->create("tbl_answers", $dataToInsert);
    if($insertedId){

        echo "<meta http-equiv='refresh' content='0;url=leksyon2.php'>";
    }

}




?>