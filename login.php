<?php
session_start();
require_once "config/master.php";

$databaseObj = new Database();
$conn = $databaseObj->getConnection();
$crud = new CRUD($conn);

// Check if the user is already logged in via session or persistent login cookie
if (isset($_SESSION["user_id"])) {
    // Redirect to the last visited page or default page for logged-in users
    $lastVisitedPage = isset($_SESSION["last_visited_page"]) ? $_SESSION["last_visited_page"] : "index.php";
    header("Location: $lastVisitedPage");
    exit();
}

// Check if the persistent login cookie exists
if (isset($_COOKIE["remember_me"])) {
    list($user_id, $username) = explode("|", $_COOKIE["remember_me"]);

    // Validate the user credentials (you may want to improve this)
    $sql = "SELECT * FROM tbl_users WHERE user_id = '$user_id' AND username = '$username'";
    $singleRow = $crud->getSingleRow($sql);

    if ($singleRow) {
        $_SESSION["user_id"] = $singleRow['user_id'];
        $_SESSION["fullname"] = $singleRow['fullname'];

        // Redirect to the last visited page or default page for regular users
        $lastVisitedPage = isset($_SESSION["last_visited_page"]) ? $_SESSION["last_visited_page"] : "index.php";
        header("Location: $lastVisitedPage");
        exit();
    }
}

// Process login if the login form is submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin") {
        $_SESSION["user_id"] = "-1";
        $_SESSION["fullname"] = "Administrator";

        // Set a persistent login cookie (you may want to improve this)
        setcookie("remember_me", "-1|admin", time() + (86400 * 30), "/"); // 30 days

        // Redirect to the last visited page or default page for the administrator
        $lastVisitedPage = isset($_SESSION["last_visited_page"]) ? $_SESSION["last_visited_page"] : "admin.php";
        header("Location: $lastVisitedPage");
        exit();
    } else {
        $sql = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
        $singleRow = $crud->getSingleRow($sql);

        if ($singleRow) {
            $_SESSION["user_id"] = $singleRow['user_id'];
            $_SESSION["fullname"] = $singleRow['fullname'];

            // Set a persistent login cookie (you may want to improve this)
            setcookie("remember_me", $singleRow['user_id'] . "|" . $username, time() + (86400 * 30), "/"); // 30 days

            // Redirect to the last visited page or default page for regular users
            $lastVisitedPage = isset($_SESSION["last_visited_page"]) ? $_SESSION["last_visited_page"] : "index.php";
            header("Location: $lastVisitedPage");
            exit();
        } else {
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

  <link href="assets/css/style.css" rel="stylesheet">

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