<?php 
    session_start();

    if(isset($_SESSION['sess_id']) && $_SESSION['sess_id'] != "") {
        echo '<h1>Welcome '.$_SESSION['sess_username'].'</h1>';
        echo '<h4><a id="logout" href="logout.php">Logout</a></h4>';
    } 
    
    else { 
        header('location:index.php');
    }
?>