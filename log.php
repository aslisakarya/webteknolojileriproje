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
              <form method="POST" action="login.php" autocomplete="off">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Mail</label>
                        <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Şifre</label>
                        <input name="password" type="password" class="form-control" id="password" required>
                        </div>
                        <button onclick="submitFunction()" type="submit" class="btn btn-primary">Gönder</button>
                    </form> 
              </div>
                
          </div>
</body>
</html>