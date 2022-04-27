<!DOCTYPE html>
<html>
<body>
 
<?php
 

 if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['uname']);
    header('location:HomePasien.blade.php');
}
 

</body>
</html>