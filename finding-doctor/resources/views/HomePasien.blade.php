<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ============= META ============ -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ============ TITLE ============ -->
    <title>FindingDoctor</title>

    <!-- ========== BOX ICONS ========== -->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- ========== BOOTSTRAP ========== -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- ============= CSS ============= -->
    <link rel="stylesheet" href="/Css/HomePasien.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

     <!-- Icon -->
    <link rel="icon" href="/Logo/Logo_tittle.png" type="image/x-icon">
    
    <style>
      * {
          font-family: 'Poppins';
      }
      </style>
      
  </head>
  <body class="opsi">
    <div class="wrapper fadeInDown">
    <!-- ============ HEADER =========== -->
    <header id="header">
      <!-- ============ NAV =========== -->
      <div class="wrapper fadeInDown">
      <nav class="navbar navbar-expand-lg nav-box-shadow">
        <div class="container">
          <a class="navbar-brand" href="/HomePasien">
            <img
              src="/Logo/logo1.png"
              alt="Logo"
              width="150"
            />
          </a>

          <a href="#" id="btn-collapse">
            <i class="bx bx-menu"></i>
          </a>

          <div class="collapse-nav" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="" class="nav-link">Info</a>
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
                <a href="" class="nav-link">Settings</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Help</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Feedback</a>
              </li>
              <li class="nav-item">
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" name="logout" style="margin-left: 4px; outline: none; border: none; background: none;">Logout
                  </button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- ============ MAIN ============ -->
    <main class="opsi">
      <div class="opsi-list">
        <a class="btn" href="#">RECOMMENDATION</a>
        <a class="btn" href="#">MY DOCTOR LIST</a>
        <a class="btn" href="/find-doctor">SEARCH</a>
      </div>
    </main>

    <!-- ============= JS ============ -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>

    <script>
      const collapseBtn = document.querySelector("#btn-collapse");
      collapseBtn.addEventListener("click", () => {
        const collapseNav = document.querySelector(".collapse-nav ul");
        collapseNav.classList.toggle("active");
      });
    </script>

    @include("sweetalert::alert")
  </body>
</html>