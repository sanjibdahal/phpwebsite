<?php 
  session_start();
  $error = false;
  $success = false;
  include 'dbcon.php';
  if (isset($_POST['signup'])) {
    $username= mysqli_real_escape_string($con, $_POST['username']);
    $email= mysqli_real_escape_string($con, $_POST['email']);
    $mobile= mysqli_real_escape_string($con, $_POST['mobile']);
    $password= mysqli_real_escape_string($con, $_POST['password']);
    $cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);
    
    $checkquery = "SELECT * FROM data where email='$email'";
    $cquery = mysqli_query($con, $checkquery);
    
    if (mysqli_num_rows($cquery)>0) {
      $error = "Email already exists.";
    }else {
      if ($password===$cpassword) {
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $sqlquery = "INSERT INTO data VALUES('$username', '$email', '$mobile', '$pass')";
      if(mysqli_query($con, $sqlquery))
      {
        $success = "Account created successfully.";
        //header("location: login.php");
      }else{
        $error="Registration failed.";
      }
      }else {
        $error = "Confirm password didnot match.";
      }
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include_once 'links.php';
  ?>
  <title>Sign up form</title>
</head>

<body>
  
  <nav>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Blogs</a></li>
    </ul>
    <span>
      <button type="button" class="btn btn-success"><a href="index.php">Sign Up</a></button>
      <button type="button" class="btn btn-light"><a href="login.php">Login</a></button>
    </span>
  </nav>
  <div class="formbx">
    <form action="index.php" method="post">
      <h3>Create Account</h3>
      <p>Get started with your free account.</p>

      <div class="google-btn">
        <div class="google-icon-wrapper">
          <img class="google-icon" src="google.png" />
        </div>
        <p class="btn-text"><b>Sign in with Google</b></p>
      </div>

      <div class="fb-btn">
        <div class="fb-icon-wrapper">
          <img class="fb-icon" src="fb.png" />
        </div>
        <p class="btn-text"><b>Sign in with Facebook</b></p>
      </div>
      <div class="or"></div>
<?php
  if ($error) {
    echo "<div class='alertbox alert-danger'>".$error."<button class='close'>
    <i class='fa-solid fa-close'></i>
    </button>
    </div>";
  }
  if ($success) {
    echo "<div class='alertbox alert-success'>".$success."<button class='close'>
    <i class='fa-solid fa-close'></i>
    </button>
    </div>";
  }
?>
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
        <input type="text" placeholder="Username" name="username" aria-label="Username" aria-describedby="addon-wrapping" required>
      </div>
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-envelope"></i></span>
        <input type="text" placeholder="Email Address" name="email" aria-label="Email" aria-describedby="addon-wrapping" required>
      </div>
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-phone"></i></span>
        <input type="text" placeholder="Phone Number" name="mobile" aria-label="Phone" aria-describedby="addon-wrapping" required>
      </div>
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
        <input type="password" placeholder="Password" aria-label="Password" name="password" aria-describedby="addon-wrapping" required>
      </div>
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i> </span>
        <input type="password" placeholder="Confirm Password" name="cpassword" aria-label="Cpassword" aria-describedby="addon-wrapping" required>
      </div>
      <div class="input-group flex-nowrap">
        <input type="submit" value="Create Account" name="signup" class="signupbtn">
      </div>
      <p>Already have an account? <a href="login.php">Login Now</a></p>
    </form>
  </div>

  
</body>

</html>
