@extends('layout.mainLayout')

@section('main')
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
@endsection
