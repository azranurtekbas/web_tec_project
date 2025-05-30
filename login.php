<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />

    <title>Ben Azra</title>
  </head>
  <body>
    <section class="overflow">
    <header>
      <div class="maincontainer">
        <div class="header-wrapper">
          <a href="index.html">
            Ben <br />
            Azra
          </a>
        </div>
      </div>
    </header>

    <section class="about-start login-section">
      <div class="maincontainer">
         <div class="login-form-wrapper">
              <div class="login-form-img">
                    <img src="img/6308172.webp" alt="">
              </div>
           <div class="login-form-main">

            <form action="postLogin.php" method="POST" class="login-form">

                  <h2>Giriş Yap </h2>
                  <label for="form-mail" class="login-form-item">
                    <span>Mail</span>
                    <input type="email" name="email" id="form-mail">
                    
                  </label>

                  <label for="form-password" class="login-form-item">
                    <span>Şifre</span>
                    <input type="password" name="password" id="form-password">
                    <div class="show-password">
                       <i class="fa-solid fa-eye" onclick="showPassword()"></i>
                    </div>
  
               </label>
               <div class="form-buttons ">
            <button class="form-button" type="submit" formnovalidate="formnovalidate">Gonder</button>
            <button class="form-button" type="reset">Sifirla</button>
          </div>
             </form>
            </div>
          </div>
      </div>
          

        <div class="about-canvas">
          <canvas id="canvas"></canvas>
        </div>
     
    </section>

   
    <nav>
      <div class="nav-wrapper">
        <ul class="nav-list">
          <li class="nav-list-item ">
            <a href="index.html">
              <i class="fa-solid fa-house"></i>
            </a>
          </li>
          <li class="nav-list-item">
            <a href="cv.html">
              <i class="fa-solid fa-id-card"></i>
            </a>
          </li>
          <li class="nav-list-item">
            <a href="city.html">
              <i class="fa-solid fa-city"></i>
            </a>
          </li>
          <li class="nav-list-item">
            <a href="team.html">
              <i class="fa-solid fa-basketball fa-lg"></i>
            </a>
          </li>
          <li class="nav-list-item">
            <a href="myinterests.html">
              <i class="fa-solid fa-gamepad"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    </section>
   


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="js/praticles.js"></script>
   <script src="./js/login.js"></script>
  </body>
</html>
