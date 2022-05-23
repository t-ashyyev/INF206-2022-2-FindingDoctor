<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindingDoctor</title>
    <link rel="stylesheet" href="/Css/Regis.css">
    <link rel="icon" href="/Logo/Logo_tittle.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins';
        }
    </style>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active"> Registrasi </h2>
            
        <!-- Icon -->
        <div class="fadeIn first">
            <img src="/Logo/logo1.png" alt="logo" width="150">
        </div>

        <!-- Registrasi -->
        <form action="/Regis" class="form" method="POST">
            @csrf
            <h1> Register new account</h1>
            <div class="">
            <?php
            if (isset($success) && $success == true){
                echo '<p color="red"> Your has been created. <a href="./loginPasien.blade.php"> Click here</a> to login<p>';
            }   
            else if (isset($error_msg))
                echo '<p color="red">'.$error_msg.'</p>'; 
           ?>
           </div>

           <div class="">
               <input type="text" name="username" value="" placeholder="Enter username" autocomplete="off" required />
          </div>
          
          <div>
              <input type="password" name="password" value="" placeholder="Enter password" autocomplere="off" required />
          </div>
          <p>password must be at least 5 characters and<br /> have a special character, e.g. !#$.,:;()</font></p>
          <div>
              <input type="password" name="confirm_password" value="" placeholder="Confirm your password" autocomplete="off" required />
          </div>
          <div>
            <select name="level" id="level" required>
                <option value="">Choose</option>
                <option value="dokter">Dokter</option>
                <option value="pasien">Pasien</option>
            </select>
        </div>
        <div class=""> 
            <input class="" type="submit" name="register" value="create account" />
        </div>
         
        <p class="centre"><br  />
        already have an account? <a href="./loginPasien"> Login here</a> 
        </form>
        
    </div>

  </div>
</div>
</body>
</html>