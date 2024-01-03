<?php
require_once "config/master.php";

$databaseObj = new Database();
$conn = $databaseObj->getConnection();
$crud = new CRUD($conn);

if(isset($_POST['register'])){



    $isUnique = $crud->isValueUnique('tbl_users', 'student_no', $_POST['student_no']);
    
    if($isUnique){

        $dataToInsert = array(
        'fullname'      => $_POST['fullname'],
        'student_no'    => $_POST['student_no'],
        'usertype'      => "Student",
        );

        $insertedId = $crud->create("tbl_users", $dataToInsert);
        echo '<script>alert("Registration complete! You can now sign-in")</script>'; 

    }else{
      echo '<script>alert("Student ID already registered!")</script>'; 
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home - Mother Tongue - Based Multilingual Education</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">

        <!-- Main Cover -->
        <div class="col-lg-8">
          <div class="row">

          <!-- Card with an image on top -->
          <div class="card">
            <div class="card-body" style="text-align:center;">
            <img src="assets/img/yunit1.png" style="width:200px;margin-top:20px;" class="card-img-bottom" alt="...">
                 <h5 class="card-title" >
                        Digitizing Mother Tongue Books for Grade 3 Students: Enhancing Multilingual Education at Kalibo Pilot Elementary School<br><br>
                        Sign-up
                </h5>

                
              <form method="post" action="">
              
              <input type="text" placeholder="Fullname" name="fullname" id="" autocomplete="off" required style="width:100%;margin:5px;border-radius:5px;"><br>
              <input type="text" placeholder="Student ID Number" name="student_no" id="" autocomplete="off" required style="width:100%;margin:5px;border-radius:5px;"><br>
              <div style="text-align:left">
                Have an account?  <a href="login.php">Sign-in</a>
              </div>
              <div style="text-align:right">
                
                <input type="submit" name="register" value="Register" style="background:#4154f1;color:white;border-radius:10px;">
              </div>
              
              </form>
            
            </div>
          </div><!-- End Card with an image on top -->

          </div>
        </div>
       

      </div>
    </section>

  </main>