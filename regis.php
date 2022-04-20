<!DOCTYPE HTML>
<html> 
    <head>
        <title> Finding Doctor </title>
        <<meta name="viewport" content="width=device-width, initial-scale=1">>
    </head>
    <body> 
        <form action="./regis.php" class="form" method="POST">
            <h1> Register new account</h1>
            <div class="">
            <?php
            if (isset($success) && $success == true){
                echo '<p color="red"> Your has been created. <a href="./login.php"> Click here</a> to login<p>';
            }   
            else if (isset($error_msg))
                echo '<p color="red">'.$error_msg.'</p>'; 
           ?>
           </div>

           <div class="">
               <input type="text" name="username" value="" placeholder="enter username" autocomplete="off" required />
          </div>
          <div>
              <input type="text" name="email" value="" placehplder="give email" autocomplete="off" required />
          </div>
          <div>
              <input type="password" name="password" value="" placeholder="enter password" autocomplere="off" required />
          </div>
          <p>password must be at least 5 characters and<br /> have a special character, e.g. !#$.,:;()</font></p>
          <div>
              <input type="password" name="confirm_password" value="" placeholder="confirm your password" autocomplete="off" required />
          </div>
        <div class=""> 
            <input class="" type="submit" name="register" value="create account" />
        </div>
         
        <p class="centre"><br  />
        already have an account? <a href="./loginPasien.blade.php"> Login here</a> 
        </form>
    </body>
</html>
