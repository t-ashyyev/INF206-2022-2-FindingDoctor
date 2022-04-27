<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MyDoctorList</title>

    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet">
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/Css/MyDoctorList.css">
    <link rel="icon" href="/Logo/Logo_tittle.png" type="image/x-icon">
  </head>
  <body class="opsi">
    <div class="wrapper fadeInDown">
    <header id="header">
      <div class="wrapper fadeInDown">
      <nav class="navbar navbar-expand-lg nav-box-shadow">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="/Logo/logo1.png" alt="Logo" width="150">
          </a>

          <a href="#" id="btn-collapse">
            <i class="bx bx-menu"></i>
          </a>

          <div class="collapse-nav" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Find Doctor</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Recommendation</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">My Doctor List</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Help</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Feedback</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Logout</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script>
      const collapseBtn = document.querySelector("#btn-collapse");
      collapseBtn.addEventListener("click", () => {
        const collapseNav = document.querySelector(".collapse-nav ul");
        collapseNav.classList.toggle("active");
      });
    </script>
  </body>
</html>