<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindingDoctor</title>
    <link rel="stylesheet" href="/Css/loginPasien.css">
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
    <div class="wrapper fadeInDown" style="padding-bottom: 50px;">
        <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active"> Pasien </h2>
            
        <!-- Icon -->
        <div class="fadeIn first">
            <img src="/Logo/logo1.png" alt="logo" width="150">
        </div>

        <!-- Login -->
        <form action="/loginPasien" method="post" autocomplete="off">
            @csrf
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="username" value="{{ old('email') }}">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" value="{{ old('email') }}">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
        
        </div>     
    </div>
</div>

    @include("sweetalert::alert")

</body>
</html>