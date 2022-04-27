<!DOCTYPE html>
<html>
<body>
 
<?php
 
<<<<<<< HEAD
 if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['uname']);
    header('location:HomePasienphp');
}
 
 
    
=======
    echo "Logged out successfully";
 
    session_start();
    session_destroy();
>>>>>>> 2008107010051
 
?>
 
</body>
</html>