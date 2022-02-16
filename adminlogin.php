<?php
ob_start();
 session_start();
  include_once 'header.php';

   $error = "";

   if(array_key_exists("submit", $_POST)) {
    include("database/db_connection.php");
    if(!$_POST['phone_no']) {
      $error .= "Your phone number is required. <br>";
    }
    if(!$_POST['pwd']) {
      $error .= "Your password is required. <br>";
    }
    if($error != "") {
      $error .= "There was an error";
    } else {
      $query = "SELECT * FROM admins WHERE phone_no = '".mysqli_real_escape_string($conn, $_POST['phone_no'])."'";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($result);
      if(@$row['phone_no'] != $_POST['phone_no']) {
        $error = " There are errors in your form <br>";
        $error .= "Your phone number is wrong try again";
      }
      if(isset($row)) {
        if($_POST['pwd'] === $row['password']) {
 
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['id'] = $row['admin_id'];
          header("Location: admin_module/adminMainPage.php");
        } else {
          $error = " There are errors ";
          $error .= "your password is wrong try again";
        }
      }
    }
   }
 ?>
    
    
<section class="mt-5">
    <div class="container text-center admin-login">
        <div class="row">
        <div class="col-sm-12 login-form">
  <form method="post">
    <h2>Admin Log In <span><i class="bi bi-box-arrow-in-right"></i></span></h2>
    <div class="mb-3 mt-3">
      <label for="u_id"><b>Phone Number</b></label>
      <input type="text" class="form-control mx-auto" id="u_id" placeholder="Enter phone number" name="phone_no" style="width: 100%;" required="">
    </div>
    <div class="mb-3">
      <label for="pwd"><b>Password</b></label>
      <input type="password" class="form-control mx-auto" id="pwd" placeholder="Enter password" name="pwd" style="width: 100%;" required="">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" name="submit" class="btn btn-dark">Log In</button>
     <div class="error"> 
      <?php if($error != "") {
          echo '<div class="alert alert-danger">'.$error.'</div>';
      };
       ?>
    </div>
  </form>
</div>
        </div>
    </div>
</section>

<?php 
 include('footer.php');
 ?>