<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
        <link rel="stylesheet" href="assenst/css/bootstrap.min.css" >
        <link rel="stylesheet" href="assenst/css/main.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">SAKARYA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">HAKKINDA <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ozgecmis.html">ÖZGEÇMİŞ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" id="AA" href="#">LOGİN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sehrim.html">ŞEHRİM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="takimimiz.html">TAKIMIMIZ</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="iletisim.html">İLETİŞİM</a>
                  </li>
                  
            
              </ul>
            </div>
          </nav>
          <div class="container login-container justify-content-center">
              <div class="col-md-4 offset-md-4">
              <?php 
              if($_GET["responce"] == 'true'){ 
              ?> 

              <div class="p-3 mb-2 bg-danger text-white">Giriş Bilgileri Hatalı</div>
              <?php 
              }
              ?>      
              <div id="error"></div>
              <form id="loginForm" method="POST" action="login.php" autocomplete="off">
              <div class="input-group input-group-lg mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-lg">Email</span>
        </div>
        <input type="email" class="form-control" id="mail" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="mail" required>
    </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Şifre</label>
                        <input name="password" type="password" class="form-control" id="password" required>
                        </div>
                        <button onclick="loginFunction()" type="button" class="btn btn-primary">Gönder</button>
                    </form> 
              </div>
                
          </div>
          <script src="assenst\js\jquery-3.4.1.min.js"></script>
         <script src="https://unpkg.com/imask"></script>
         <script src="assenst/js/bootstrap.min.js"></script>
         <script src="assenst/js/main.js"></script>
</body>
</html>