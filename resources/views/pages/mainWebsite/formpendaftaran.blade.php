@extends('layout.mainLayout')

@section('main')
    @if (session('status'))
      <div class="alert alert-success">
        {{session('status')}}
      </div>
    @endif
    <div class="wrapper-pendaftaran">
      <div class="title">Form Pendaftaran</div>
      <form method="post" action="/formpendaftaran">
        @csrf
        <div class="form">
          <div class="input-field">
            <div class="token">
              <label> Token </label>
              <input type="text" class="input" />
            </div>
          </div>
        
          <div class="input-field mb-3">
            <label for="namaLengkap"> Nama Lengkap </label>
            <input type="text" class="input @error('namaLengkap') is-invalid @enderror" name="namaLengkap" id="namaLengkap" autofocus/>
            @error('namaLengkap')
              <div class="invalid-feedback"> {{$message}} </div>
            @enderror
          </div>

          <div class="input-field mb-3">
            <label for="kelas"> Kelas </label>
            <input type="text" class="input @error('kelas') is-invalid @enderror" name="kelas" id="kelas"/>
            @error('kelas')
              <div class="invalid-feedback"> {{$message}} </div>
            @enderror
          </div>

          <div class="input-field">
            <label for="jenisKelamin"> Jenis Kelamin </label>
            <div class="radio">
              <input type="radio" name="jenisKelamin" value="Laki-laki" id="jenisKelamin"/>
              <label>Laki-laki</label>
              <input type="radio" name="jenisKelamin" value="Perempuan" id="jenisKelamin"/>
              <label>Perempuan</label>
            </div>
          </div>

          <div class="input-field">
            <label for="tempatLahir"> Tempat Lahir </label>
            <input type="text" class="input @error('tempatLahir') is-invalid @enderror" name="tempatLahir" id="tempatLahir"/>
          </div>

          <div class="input-field">
            <label for="tanggalLahir"> Tanggal Lahir </label>
            <input type="date" class="input @error('tanggalLahir') is-invalid @enderror" name="tanggalLahir" id="tanggalLahir"/>
          </div>

          <div class="input-field">
            <label for="alamatRumah"> Alamat Rumah </label>
            <input type="text" class="input @error('alamatRumah') is-invalid @enderror" name="alamatRumah" id="alamatRumah"/>
          </div>

          <div class="input-field">
            <label for="hobi"> Hobi </label>
            <input type="text" class="input @error('hobi') is-invalid @enderror" name="hobi" id="hobi"/>
          </div>

          <div class="input-field">
            <label for="email"> E-mail </label>
            <input type="email" class="input @error('email') is-invalid @enderror" name="email" id="email"/>
          </div>

          <div class="input-field">
            <label for="nomorTelepon"> No. Telefon (WA) </label>
            <input type="text" class="input @error('nomorTelepon') is-invalid @enderror" id="nomorTelepon" name="nomorTelepon" />
          </div>

          <div class="input-field">
            <label for="pengalamanOrganisasi"> Pengalaman Organisasi </label>
            <textarea class="textarea @error('pengalamanOrganisasi') is-invalid @enderror" id="pengalamanOrganisasi" name="pengalamanOrganisasi"></textarea>
          </div>

          <div class="input-field">
            <label for="alasanMasukOrganisasi"> Alasan Masuk Organisasi </label>
            <textarea class="textarea @error('alasanMasukOrganisasi') is-invalid @enderror" id="alasanMasukOrganisasi" name="alasanMasukOrganisasi"></textarea>
          </div>

          <div class="input-field">
            <input type="reset" value="clear" />
            <button type="submit" class="btn">Daftar</button>
          </div>
        </div>
      </form>
    </div>
@endsection
