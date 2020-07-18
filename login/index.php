<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: http://localhost/baitaplon/admin/dashboard/index.html");
    exit;
}
 
// Include config file
require_once "./../conn.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: ./../../../baitaplon/admin/dashboard/index.html");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <link rel="stylesheet" href="./login.css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post">
    <div id="formWrapper">
      <div id="form">
        <div class="logo">
          <img
            src="./../media/image/logo.png"
            alt=""
            style="max-width: 250px;"
          />
        </div>
        <div class="form-item" <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>>
          <p class="formLabel">Email</p>
          <input
            type="email"
            name="username"
            id="email"
            class="form-style"
            a
            utocomplete="off"
          />
          <span class="help-block" style="color:red"><?php echo $username_err; ?></span>
        </div>
        <div class="form-item <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
          <p class="formLabel">Password</p>
          <input
            type="password"
            name="password"
            id="password"
            class="form-style"
          />
          <span class="help-block" style="color:red"><?php echo $password_err; ?></span>
          <!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
          <p>
            <a href="#"><small>Forgot Password ?</small></a>
          </p>
          <p id="errors"></p>
        </div>
        <div class="form-item">
          <input
            id="btn_submit"
            type="submit"
            class="login pull-right"
            value="Log In"
          />
          <div class="clear-fix"></div>
        </div>
      </div>
    </div>
  </form>
    <script src="./login.js"></script>
  </body>
</html>
