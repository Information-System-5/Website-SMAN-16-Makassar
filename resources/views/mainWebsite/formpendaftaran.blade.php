<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Form Pendaftaran</div>
      <form>
        <div class="form">
          <div class="input-field">
            <div class="token">
              <label> Token </label>
              <input type="text" class="input" />
            </div>
          </div>

          <div class="input-field">
            <label> Nama Lengkap </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> Kelas </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> Jenis Kelamin </label>
            <div class="radio">
              <input type="radio" name="jenis-kelamin" value="Laki-laki" />
              <label>Laki-laki</label>
              <input type="radio" name="jenis-kelamin" value="Perempuan" />
              <label>Perempuan</label>
            </div>
          </div>

          <div class="input-field">
            <label> Tempat Lahir </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> Tanggal Lahir </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> Alamat Rumah </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> Hobi </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> E-mail </label>
            <input type="email" class="input" />
          </div>

          <div class="input-field">
            <label> No. Telefon (WA) </label>
            <input type="text" class="input" />
          </div>

          <div class="input-field">
            <label> Pengalaman Organisasi </label>
            <textarea class="textarea"></textarea>
          </div>

          <div class="input-field">
            <label> Alasan Masuk Organisasi </label>
            <textarea class="textarea"></textarea>
          </div>

          <div class="input-field">
            <input type="reset" value="clear" />
            <input type="submit" value="Daftar" class="btn" />
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
