<?php
    // Initialize the session
    session_start();

    // Include connection file
    include ("../db/connexion.php");
?>

<?php
    $msg = "";
    if(isset($_POST['submitBtn'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        // Validate credentials
        if($username != "" && $password != "") {
            try {
                // Prepare a select statement
                $query = "select * from `etudiant` where `username`=:username and `password`=:password";
                $stmt = $db->prepare($query);
                // Bind variables to the prepared statement as parameters
                $stmt->bindParam('username', $username, PDO::PARAM_STR);
                $stmt->bindParam('password', $password, PDO::PARAM_STR);
                // Attempt to execute the prepared statement
                $stmt->execute();
                $count = $stmt->rowCount();
                $row   = $stmt->fetch(PDO::FETCH_ASSOC);

                // Check if username and password exists,
                if($count == 1 && !empty($row)) {
                    $id = $row["id"];
                    $username = $row["username"];
                    // Store data in session variables
                    //$_SESSION["sess_loggedin"] = $row['loggedid'];
                    $_SESSION["sess_id"] = $id;
                    $_SESSION["sess_username"] = $username;  
                    // Redirect user to welcome page
                    header("location: welcome.php");
                }

                else {
                    $msg = "Invalid username or password!";
                }
            }

            catch (PDOException $e) {
                echo "Error : ".$e->getMessage();
            }
        }

        else {
            $msg = "Both fields are required!";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
    <section>
        <div class="form-container">
            <h1>Automated Testing</h1>
        
            

            <div class="control">
                <label class="label" for="username">Username</label>
                <input type="text" name="username" id="username" >
            </div>

            <div class="control">
                <label class="label" for="pwd">Password</label>
                <input type="password" name="password" id="password" >
            </div>
    
            <span class="loginMsg"><input type="checkbox"> Remember me</span>

            <div class="control">
                <span class="error2"><?php echo @$msg;?></br></span>
            </div>

            <div class="control">
                <input type="submit" class="btn" name="submitBtn" id="submitBtn" value="Login">
            </div>

            

        
            <span><a href="#" class="forgotpsw">Forgot password ?</a></span>
        </div>
    </section>
    </form>
</body>
</html>