<?php
if($_POST){
    if($_POST["mail"] == 'g191210401@sakarya.edu.tr' && $_POST["password"] == '123'){
        header('Location: http://localhost/html/anasayfa.html');
        echo "Merhaba Dünya";
    }else{

        header('Location: http://localhost/html/log.php?responce=true');
        echo "Giriş Başarısız";

    }
}