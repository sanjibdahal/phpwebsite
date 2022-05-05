<?php
  session_start();
  $error = false;
  
  include 'dbcon.php';
  if (isset($_POST['login'])) 
  {
  $email = $_POST["email"];
  $password = $_POST["password"]; 
  $sql="select * from data where email='$email'"; 
  $result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0)
  {
    $fetch =mysqli_fetch_array($result);
    if(password_verify($password, $fetch["password"])) {
      $_SESSION['logininfo'] = true;
      $_SESSION['username'] = $fetch["username"];
      header("location: portfolio/home.php");
    }else{
      $error = "Password didnot match.";
    }
  }else{
    $error = "Looks like you haven't created account.";
  }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <?php
    include_once 'links.php';
  ?>
  <title>Login form</title>
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
    <form action="login.php" method="post">
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
          echo "<div class='alertbox alert-danger'>".$error."<button class='close'><i class='fa-solid fa-close'></i></button></div>";
        }
      ?>
      
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-envelope"></i></span>
        <input type="text" placeholder="Email Address" name="email" aria-label="Email" aria-describedby="addon-wrapping" required>
      </div>
      
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i> </span>
        <input type="password" placeholder="Enter Password" name="password" aria-label="Password" aria-describedby="addon-wrapping" required>
      </div>
      
      <div class="input-group flex-nowrap">
        <input type="submit" value="Login Now" name="login" class="loginbtn">
      </div>
      
      <p>Don't have an account? <a href="index.php">Sign up</a></p>
      
    </form>
  </div>
</body>

</html>
