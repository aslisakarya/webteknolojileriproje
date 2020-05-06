<table class="table">
    <tbody>
        <tr>
          <th>Ad</th>
            <td><?php echo $_POST['name']; ?></td>

        </tr>
        <tr>
          <th>Soyad</th>
            <td><?php echo $_POST['lastname']; ?></td>

        </tr>
        <tr>
          <th>Cinsiyet</th>
            <td><?php echo $_POST['cinsiyet']; ?></td>

        </tr>
      <tr>
          <th>Tercih Edilen İletişim Türü</th>
          	<td><?php echo $_POST['iletisim']; ?></td>

        </tr>
        <tr>
          <th>Email</th>
          	<td><?php echo $_POST['mail']; ?></td>

        </tr>
        <tr>

          <th>Telefon</th>
          	<td><?php echo $_POST['phone']; ?></td>

        </tr>
        <tr>
          <th>Üniversite</th>
          	<td><?php echo $_POST['universite']; ?></td>

        </tr>
        <tr>
        <?php 
          $dizin = 'assenst/image/';
          $yuklenecek_dosya = $dizin . basename($_FILES['file']['name']);
          
          echo '<pre>';
          if (move_uploaded_file($_FILES['file']['tmp_name'], $yuklenecek_dosya))
          {
              
          } else {
              echo "Olası dosya yükleme saldırısı!\n";
          }
          ?>
          <th>Resim</th>
          	<td><img style="width:300px;" src="<?php echo $yuklenecek_dosya; ?>" alt=""></td>

        </tr>
        <tr>
          <th>Bildirim Almak İstiyor mu</th>
          	<td><?php echo $_POST['info']; ?></td>

        </tr>
    </tbody>
</table>