<?php
session_start();
require_once "config/master.php";
date_default_timezone_set('Asia/Manila');

$databaseObj = new Database();
$conn = $databaseObj->getConnection();
$crud = new CRUD($conn);

// submit leksyon 1 Ueobrahon 3
if(isset($_POST['submit_l1_u3'])){

    $student_id = $_SESSION["user_id"];
    $ans_question = "Leksyon 1 - Ueobarahon 3";

    $score = 0;

    $l1_u3_01   = $_POST['l1_u3_01']; 
    $l1_u3_02   = $_POST['l1_u3_02']; 
    $l1_u3_03   = $_POST['l1_u3_03']; 
    $l1_u3_04   = $_POST['l1_u3_04']; 
    $l1_u3_05   = $_POST['l1_u3_05']; 

    if($l1_u3_01 == "MANGHOD"){
        $score++;
    }if( $l1_u3_02 == "ISDA"){
        $score++;
    }if( $l1_u3_03 == "KEYK"){
        $score++;
    }if( $l1_u3_04 == "SILHIG"){
        $score++;
    }if( $l1_u3_05 == "TUEON-AN"){
        $score++;
    }

    $answer = "";
    $answer .= "1. ".$l1_u3_01."<br/> 2. ".$l1_u3_02."<br/> 3. ".$l1_u3_03."<br/> 4. ".$l1_u3_04."<br/> 5. ".$l1_u3_05;

    $dataToInsert = array(
        'ans_answer'    => $answer,
        'ans_question'  => $ans_question,
        'ans_score'     => $score,
        'student_id'    => $student_id
    );
    $insertedId = $crud->create("tbl_answers", $dataToInsert);
    if($insertedId){

        echo "<meta http-equiv='refresh' content='0;url=page6.php'>";
    }

}


// submit leksyon 2 Ueobrahon 1
if(isset($_POST['submit_l2_u1'])){

    $student_id = $_SESSION["user_id"];
    $ans_question = "Leksyon 2 - Ueobarahon 1";
    $score = 0;

    $l2_u1_01   = $_POST['l2_u1_01']; 
    $l2_u1_02   = $_POST['l2_u1_02']; 
    $l2_u1_03   = $_POST['l2_u1_03']; 
    $l2_u1_04   = $_POST['l2_u1_04']; 
    $l2_u1_05   = $_POST['l2_u1_05']; 
    $l2_u1_06   = $_POST['l2_u1_06']; 

    $answer = "";
    $answer .= "1. ".$l2_u1_01."<br/> 2. ".$l2_u1_02."<br/> 3. ".$l2_u1_03."<br/> 4. ".$l2_u1_04."<br/> 5. ".$l2_u1_05."<br/> 6. ".$l2_u1_06;



    $dataToInsert = array(
        'ans_answer'    => $answer,
        'ans_question'  => $ans_question,
        'ans_score'     => 0,
        'student_id'    => $student_id,
    );
    $insertedId = $crud->create("tbl_answers", $dataToInsert);
    if($insertedId){

        echo "<meta http-equiv='refresh' content='0;url=page7.php'>";
    }

}

    // submit leksyon 2 Ueobrahon 2
    if(isset($_POST['submit_l2_u2'])){

    $student_id = $_SESSION["user_id"];
    $ans_question = "Leksyon 2 - Ueobarahon 2";

    $score = 0;

    $l2_u2_01   = $_POST['l2_u2_01']; 
    $l2_u2_02   = $_POST['l2_u2_02']; 
    $l2_u2_03   = $_POST['l2_u2_03']; 
    $l2_u2_04   = $_POST['l2_u2_04']; 
    $l2_u2_05   = $_POST['l2_u2_05']; 
    $l2_u2_06   = $_POST['l2_u2_06']; 
    $l2_u2_07   = $_POST['l2_u2_07']; 
    $l2_u2_08   = $_POST['l2_u2_08']; 
    $l2_u2_09   = $_POST['l2_u2_09']; 
    $l2_u2_10   = $_POST['l2_u2_10']; 
    $l2_u2_11   = $_POST['l2_u2_11']; 
    $l2_u2_12   = $_POST['l2_u2_12']; 

    $answer = "";
    $answer .= "1. ".$l2_u2_01."<br/> 2. ".$l2_u2_02."<br/> 3. ".$l2_u2_03."<br/> 4. ".$l2_u2_04."<br/> 5. ".$l2_u2_05."<br/> 6. ".$l2_u2_06."<br/> 7. ".$l2_u2_07."<br/> 8. ".$l2_u2_08."<br/> 9. ".$l2_u2_09."<br/> 10. ".$l2_u2_10."<br/> 11. ".$l2_u2_11."<br/> 12. ".$l2_u2_12;

    $dataToInsert = array(
        'ans_answer'    => $answer,
        'ans_question'  => $ans_question,
        'ans_score'     => 0,
        'student_id'    => $student_id,
    );
    $insertedId = $crud->create("tbl_answers", $dataToInsert);
    if($insertedId){

        echo "<meta http-equiv='refresh' content='0;url=page9.php'>";
    }

}



// submit leksyon 2 Ueobrahon 3
if(isset($_POST['submit_l2_u3'])){

    $student_id = $_SESSION["user_id"];
    $ans_question = "Leksyon 2 - Ueobarahon 3";
    $score = 0;

    $l2_u3_01   = $_POST['l2_u3_01']; 
    $l2_u3_02   = $_POST['l2_u3_02']; 
    $l2_u3_03   = $_POST['l2_u3_03']; 
    $l2_u3_04   = $_POST['l2_u3_04']; 
    $l2_u3_05   = $_POST['l2_u3_05']; 
    $l2_u3_06   = $_POST['l2_u3_06']; 

    $answer = "";
    $answer .= "1. ".$l2_u3_01."<br/> 2. ".$l2_u3_02."<br/> 3. ".$l2_u3_03."<br/> 4. ".$l2_u3_04."<br/> 5. ".$l2_u3_05."<br/> 6. ".$l2_u3_06;



    $dataToInsert = array(
        'ans_answer'    => $answer,
        'ans_question'  => $ans_question,
        'ans_score'     => 0,
        'student_id'    => $student_id,
    );
    $insertedId = $crud->create("tbl_answers", $dataToInsert);
    if($insertedId){

        echo "<meta http-equiv='refresh' content='0;url=page10.php'>";
    }

}

// submit leksyon 2 Ueobrahon 4
if(isset($_POST['submit_l2_u4'])){

    $student_id = $_SESSION["user_id"];
    $ans_question = "Leksyon 2 - Ueobarahon 4";

    $score = 0;

    $l2_u4_01   = $_POST['l2_u4_01']; 
    $l2_u4_02   = $_POST['l2_u4_02']; 
    $l2_u4_03   = $_POST['l2_u4_03']; 
    $l2_u4_04   = $_POST['l2_u4_04']; 
    $l2_u4_05   = $_POST['l2_u4_05']; 
    $l2_u4_06   = $_POST['l2_u4_06']; 
    $l2_u4_07   = $_POST['l2_u4_07']; 
    $l2_u4_08   = $_POST['l2_u4_08']; 
    $l2_u4_09   = $_POST['l2_u4_09']; 
    $l2_u4_10   = $_POST['l2_u4_10']; 
    $l2_u4_11   = $_POST['l2_u4_11']; 
    $l2_u4_12   = $_POST['l2_u4_12']; 

    $answer = "";
    $answer .= "1. ".$l2_u4_01."<br/> 2. ".$l2_u4_02."<br/> 3. ".$l2_u4_03."<br/> 4. ".$l2_u4_04."<br/> 5. ".$l2_u4_05."<br/> 6. ".$l2_u4_06."<br/> 7. ".$l2_u4_07."<br/> 8. ".$l2_u4_08."<br/> 9. ".$l2_u4_09."<br/> 10. ".$l2_u4_10."<br/> 11. ".$l2_u4_11."<br/> 12. ".$l2_u4_12;

    $dataToInsert = array(
        'ans_answer'    => $answer,
        'ans_question'  => $ans_question,
        'ans_score'     => 0,
        'student_id'    => $student_id,
    );
    $insertedId = $crud->create("tbl_answers", $dataToInsert);
    if($insertedId){

        echo "<meta http-equiv='refresh' content='0;url=page13.php'>";
    }

}



// submit leksyon 1 Ueobrahon 3
if(isset($_POST['submit_l2_u5'])){

    $student_id = $_SESSION["user_id"];
    $ans_question = "Leksyon 2 - Ueobarahon 5";

    $score = 0;

    $l2_u5_01   = $_POST['l2_u5_01']; 
    $l2_u5_02   = $_POST['l2_u5_02']; 
    $l2_u5_03   = $_POST['l2_u5_03']; 
    $l2_u5_04   = $_POST['l2_u5_04']; 
    $l2_u5_05   = $_POST['l2_u5_05']; 

    $answer = "";
    $answer .= "1. ".$l2_u5_01."<br/> 2. ".$l2_u5_02."<br/> 3. ".$l2_u5_03."<br/> 4. ".$l2_u5_04."<br/> 5. ".$l2_u5_05;

    $dataToInsert = array(
        'ans_answer'    => $answer,
        'ans_question'  => $ans_question,
        'ans_score'     => $score,
        'student_id'    => $student_id
    );
    $insertedId = $crud->create("tbl_answers", $dataToInsert);
    if($insertedId){

        echo "<meta http-equiv='refresh' content='0;url=page14.php'>";
    }

}


// submit leksyon 2 Ueobrahon 6
if(isset($_POST['submit_l2_u6'])){

    $student_id = $_SESSION["user_id"];
    $ans_question = "Leksyon 2 - Ueobarahon 6";
    $score = 0;

    $l2_u6_01   = strtoupper($_POST['l2_u6_01']); 
    $l2_u6_02   = strtoupper($_POST['l2_u6_02']); 
    $l2_u6_03   = strtoupper($_POST['l2_u6_03']); 
    $l2_u6_04   = strtoupper($_POST['l2_u6_04']); 
    $l2_u6_05   = strtoupper($_POST['l2_u6_05']); 
    $l2_u6_06   = strtoupper($_POST['l2_u6_06']); 


    if( $l2_u6_01 == 'a' ||  $l2_u6_01 == 'A'){
        $score++;
    }if( $l2_u6_02 == 'c' ||  $l2_u6_02 == 'C'){
        $score++;
    }if( $l2_u6_03 == 'a' ||  $l2_u6_03 == 'A'){
        $score++;
    }if( $l2_u6_04 == 'b' ||  $l2_u6_04 == 'B'){
        $score++;
    }if( $l2_u6_05 == 'b' ||  $l2_u6_05 == 'B'){
        $score++;
    }if( $l2_u6_06 == 'c' ||  $l2_u6_06 == 'C'){
        $score++;
    }

    $answer = "";
    $answer .= "1. ".$l2_u6_01."<br/> 2. ".$l2_u6_02."<br/> 3. ".$l2_u6_03."<br/> 4. ".$l2_u6_04."<br/> 5. ".$l2_u6_05."<br/> 6. ".$l2_u6_06;



    $dataToInsert = array(
        'ans_answer'    => $answer,
        'ans_question'  => $ans_question,
        'ans_score'     => $score,
        'student_id'    => $student_id,
    );
    $insertedId = $crud->create("tbl_answers", $dataToInsert);
    if($insertedId){

        echo "<meta http-equiv='refresh' content='0;url=page15.php'>";
    }

}






// submit leksyon 1 Ueobrahon 8
if(isset($_POST['submit_l2_u8'])){

    $student_id = $_SESSION["user_id"];
    $ans_question = "Leksyon 2 - Ueobarahon 8";

    $score = 0;

    $l2_u8_01   = $_POST['l2_u8_01']; 
    $l2_u8_02   = $_POST['l2_u8_02']; 
    $l2_u8_03   = $_POST['l2_u8_03']; 
    $l2_u8_04   = $_POST['l2_u8_04']; 


    $answer = "";
    $answer .= "1. ".$l2_u8_01."<br/> 2. ".$l2_u8_02."<br/> 3. ".$l2_u8_03."<br/> 4. ".$l2_u8_04;

    $dataToInsert = array(
        'ans_answer'    => $answer,
        'ans_question'  => $ans_question,
        'ans_score'     => $score,
        'student_id'    => $student_id
    );
    $insertedId = $crud->create("tbl_answers", $dataToInsert);
    if($insertedId){

        echo "<meta http-equiv='refresh' content='0;url=page18.php'>";
    }

}




// submit leksyon 3 Ueobrahon 1
if(isset($_POST['submit_l3_u1'])){

    $student_id = $_SESSION["user_id"];
    $ans_question = "Leksyon 3 - Ueobarahon 1";

    $score = 0;

    $l3_u1_01   = $_POST['l3_u1_01']; 

    $answer = "";

    $dataToInsert = array(
        'ans_answer'    => $l3_u1_01,
        'ans_question'  => $ans_question,
        'ans_score'     => $score,
        'student_id'    => $student_id
    );
    $insertedId = $crud->create("tbl_answers", $dataToInsert);
    if($insertedId){

        echo "<meta http-equiv='refresh' content='0;url=page22.php'>";
    }

}
?>