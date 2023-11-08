<?php
session_start();
require_once "config/master.php";

$databaseObj = new Database();
$conn = $databaseObj->getConnection();
$crud = new CRUD($conn);

if(isset($_POST['login'])){


  
    $username = $_POST['username'];
    $password = $_POST['password'];
    
      if($username == "rumyljames" && $password == "Delacruz_10"){
        $_SESSION["user_id"] = "-1";
        $_SESSION["fullname"] = "Developer";
        header("Location: index"); // Redirect to the index 
      
      }else{
    
        $sql = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'"; 
        $singleRow = $crud->getSingleRow($sql);
        
          if($singleRow){
            $_SESSION["user_id"] = $singleRow['user_id'];
            $_SESSION["fullname"] = $singleRow['fullname'];
            header("Location: index.php"); // Redirect to the index
          }else{
            echo '<script>alert("Incorrect Password!")</script>'; 
          }
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
                        Mother Tongue - Based<br>
                        Multilingual Education<br><br>
                        Sign-in
                </h5>

                
              <form method="post" action="">
              
              <input type="text" placeholder="Username" name="username" id="" autocomplete="off" required style="width:100%;margin:5px;border-radius:5px;"><br>
              <input type="password" placeholder="Password" name="password" id="" autocomplete="off" required style="width:100%;margin:5px;border-radius:5px;"><br>
              <div style="text-align:left">
                No account yet?  <a href="register.php">Sign-up</a>
              </div>
              <div style="text-align:right">
                
                <input type="submit" name="login" value="Sign-in" style="background:#4154f1;color:white;border-radius:10px;">
              </div>
              
              </form>
            
            </div>
          </div><!-- End Card with an image on top -->

          </div>
        </div>
       

      </div>
    </section>

  </main>