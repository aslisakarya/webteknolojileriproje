function resetFunction() {
    document.getElementById("iletisimForm").reset();
  }
  var phoneMask = IMask(
    document.getElementById('phone-mask'), {
      mask: '+{90}(000)000-00-00'
    });
    function submitFunction(){
      var e = document.getElementById("iletisim");
  var strUser = e.options[e.selectedIndex].value;
      var x = '';
      // Ad
      if(document.getElementById("name").value == ""){
        x = x+'<div class="alert alert-danger" role="alert">Ad alan boş bırakılamaz !</div>';
      }
      //Soyad
      if(document.getElementById("lastname").value == ""){
        x = x+'<div class="alert alert-danger" role="alert">Soyad alan boş bırakılamaz !</div>';
      }
      //Cinsiyet
      if($('input[name=cinsiyet]:checked').val() == null){
        x = x+'<div class="alert alert-danger" role="alert">Cinsiyet alan boş bırakılamaz !</div>';
      }
      //İletişim Türü
     
      if(strUser == '0'){
        x = x+'<div class="alert alert-danger" role="alert">Tercih Edilen İletişim Türü alan boş bırakılamaz !</div>';
      }
      // Mail
      inputText = document.getElementById('mail');
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if(inputText.value.match(mailformat))
      {
  
      }
      else
      {
        x = x+'<div class="alert alert-danger" role="alert">Lütfen Geçerli Bir Email Giriniz !</div>';
      inputText.focus();
      }
      //Telefon
      if(document.getElementById("phone-mask").value == ""){
        x = x+'<div class="alert alert-danger" role="alert">Telefon alan boş bırakılamaz !</div>';
      }
      //Üniversiteler
      if(document.getElementById("universite").value == ""){
        x = x+'<div class="alert alert-danger" role="alert">Üniversite alan boş bırakılamaz !</div>';
      }
      //Resim
      if(document.getElementById("image").value == ""){
        x = x+'<div class="alert alert-danger" role="alert">Resim alan boş bırakılamaz !</div>';
      }
      //Mesaj
      if(document.getElementById("mesaj").value == ""){
        x = x+'<div class="alert alert-danger" role="alert">Mesajınız alan boş bırakılamaz !</div>';
      }
      //Bildirim
      if(document.getElementById("info").checked == false){
        x = x+'<div class="alert alert-danger" role="alert">Bildirim alanı boş bırakılamaz !</div>';
      }
      
      document.getElementById("error").innerHTML = x;
      if(x == ''){
        document.getElementById('iletisimForm').submit();
      }else{
        return false;
      }
    }