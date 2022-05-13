<!DOCTYPE html>
<html lang="en">
</div>
<button type="onoff" class="available" onclick="onoff(this)" ><div>status</div></button>
</form>
<script>
var buttonstate=0;
function onoff(element)
{
  buttonstate= 1 - buttonstate;
  var blabel, bstyle, bcolor;
  if(buttonstate)
  {
    blabel="available";
    bstyle="green";
    bcolor="lightgreen";
  }
  else
  {
    blabel="not available";
    bstyle="lightgray";
    bcolor="gray";
  }
  var child=element.firstChild;
  child.style.background=bstyle;
  child.style.color=bcolor;
  child.innerHTML=blabel;
}</script>
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
    <link rel="stylesheet" href="/Css/HomeDokter.css" />

   
     <!-- Icon -->
    <link rel="icon" href="/Logo/Logo_tittle.png" type="image/x-icon">
  </head>
  <body class="opsi">
    <div class="wrapper fadeInDown">
    <!-- ============ HEADER =========== -->
    <header id="header">
      <!-- ============ NAV =========== -->
      <div class="wrapper fadeInDown">
      <nav class="navbar navbar-expand-lg nav-box-shadow">
        <div class="container">
          <a class="navbar-brand" href="#">
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
                <a href="" class="nav-link">Settings</a>
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
    
    <button class="available" onclick="onoff(this)"><div>status</div></button>
<script>
var buttonstate=0;
function onoff(element)
{
  buttonstate= 1 - buttonstate;
  var blabel, bstyle, bcolor;
  if(buttonstate)
  {
    blabel="available";
    bstyle="green";
    bcolor="lightgreen";
  }
  else
  {
    blabel="not available";
    bstyle="lightgray";
    bcolor="gray";
  }
  var child=element.firstChild;
  child.style.background=bstyle;
  child.style.color=bcolor;
  child.innerHTML=blabel;
}</script>

    <!-- ============ MAIN ============ -->
    <main class="opsi">
      <div class="opsi-list">
        <a class="btn" href="#">My Profile</a>
      </div>
    </main>

    <!-- ============= JS ============ -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  
    <script>
      const collapseBtn = document.querySelector("#btn-collapse");
      collapseBtn.addEventListener("click", () => {
        const collapseNav = document.querySelector(".collapse-nav ul");
        collapseNav.classList.toggle("active");
      });
    </script>
  </body>
</html>
