<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to dashboard page
if (isset($_SESSION['email'])) {
    header('Location: ../../content/ff/index.php');
    exit();
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $email = $password = $niveau = $prof = "";
$username_err = $email_err = $password_err = $niveau_err = $prof_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9-ñ-Ñ_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }

            // Close statement
            mysqli_stmt_close($stmt);
            }
        }
    }
  
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            // Close statement
            mysqli_stmt_close($stmt);
            }
        }
    }

    // Check if the user is a teacher or a student
    if(empty(trim($_POST["prof"]))){
        $prof_err = "error";
    } else{
        $sql = "SELECT id FROM users WHERE prof = ? ";;
        $prof = $_POST["prof"];
    
    }
    
    if(empty(trim($_POST["niveaux"]))){
        $niveau_err = "Please select your level.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE niveaux = ?";
            
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_niveaux);
            // Set parameters
            $param_niveaux = trim($_POST["niveaux"]);        
            /* store result */
            mysqli_stmt_store_result($stmt);
            $niveaux = trim($_POST["niveaux"]);
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 8){
        $password_err = "Password must have at least 8 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

   


    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) ){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, email, password, prof, niveaux) VALUES (?, ?, ?, ?, ?)";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_email, $param_password, $param_prof, $param_niveaux);
            
            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_prof = $prof;
            $param_niveaux = $niveaux;
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                if($_POST["prof"] == "0"){
                    $_SESSION['email'] = $email;
                    header("location: ../../login/spe-select/spe-select.php");
                }elseif($_POST["prof"] == "1"){
                    $_SESSION['email'] = $email;
                    header("location: ../../login/spe-select/spe-select-prof.php");
                } 
            }else{
                echo "Something went wrong. Please try again later.";
            }
            // Close statement
            mysqli_stmt_close($stmt);

        }
    }

    //Close connection
    mysqli_close($link);
}
?>
