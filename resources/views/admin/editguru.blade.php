@extends('layout.main')

@section('title', 'Edit Guru')

@section('isi')
<div class="container">
  <div class="row justify-content-center">
    <div class="col col-md-10">
      <h3>Edit Guru</h3>
      <div class="card">
        <div class="card-body">
          <div class="row g-0">
            <div class="col col-md-6">
              <form action="{{ route('update_guru') }}" method="post">
                @csrf
                <input type="hidden" name="idg" id="idg" value="{{ $teacher->id_user }}">
                <div class="form-group">
                  <label for="ni">Nomor Induk</label>
                  <input type="text" class="form-control" id="ni" name="ni" placeholder="Masukkan Nomor Induk Anda ..."
                    value="{{ $teacher->n_induk ?? old('ni') }}">
                  <span class="text-danger">@error('ni') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="nama_guru">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama_guru" name="nama_guru"
                    placeholder="Masukkan Nama Anda ..." value="{{ $teacher->nama ?? old('nama_guru') }}">
                  <span class="text-danger">@error('nama_guru') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="form-control form-select form-select-md" name="jk_guru" id="jk">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option <?=($teacher->jk == "Laki - laki")?"selected":""?> value="Laki - laki">Laki - laki</option>
                    <option <?=($teacher->jk == "Perempuan")?"selected":""?> value="Perempuan">Perempuan</option>
                  </select>
                  <span class="text-danger">@error('jk') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <select class="form-control form-select form-select-md" name="jurusan_guru" id="jurusan">
                    @foreach( $jurusan as $data )
                    <option <?=($teacher->jurusan == $teacher->jurusan)?"selected":""?> value="{{ $data->jurusan }}">{{ $data->jurusan }}</option>
                    @endforeach
                  </select>
                  <span class="text-danger">@error('jurusan') {{ $message }} @enderror</span>
                </div>
            </div>
            <div class="col col-md-6">
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <select class="form-control form-select form-select-md" name="provinsi_guru" id="provinsi"
                  data-dependent="kota">
                  @foreach( $provinsi as $data )
                  <option <?=($teacher->provinsi == $data->provinsi)?"selected":""?> value="{{ $data->provinsi }}">{{ $data->provinsi }}</option>
                  @endforeach
                </select>
                <span class="text-danger">@error('provinsi') {{ $message }}
                  @enderror</span>
              </div>
              <div class="form-group">
                <label for="kota">Kota</label>
                <select class="form-control form-select form-select-md" name="kota_guru" id="kota" data-dependent="kota">
                  @foreach( $kota as $data )
                  <option <?=($teacher->kota == $data->jk." ".$data->kota)?"selected":""?> value="{{ $data->jk }} {{ $data->kota }}">{{ $data->kota }}
                    ({{ $data->jk }} {{ $data->kota }})</option>
                  @endforeach
                </select>
                <span class="text-danger">@error('kota') {{ $message }}
                  @enderror</span>
              </div>
              <div class="form-group">
                <label for="email_guru">Alamat Email</label>
                <input type="email" class="form-control" id="email_guru" name="email_guru"
                  placeholder="Masukkan Email Anda ..." value="{{ $teacher->email ?? old('email_guru') }}">
                <span class="text-danger">@error('email_guru') {{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                <label for="n_wa_guru">No HP</label>
                <input type="text" class="form-control" id="n_wa_guru" name="n_wa_guru"
                  placeholder="Masukkan No HP Anda ..." value="{{ $teacher->n_wa ?? old('n_wa_guru') }}">
                <span class="text-danger">@error('n_wa_guru') {{ $message }} @enderror</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="alamat_guru">Alamat</label>
            <input type="text" class="form-control" id="alamat_guru" name="alamat_guru"
              placeholder="Masukkan Alamat Anda ..." value="{{ $teacher->alamat ?? old('alamat_guru') }}">
            <span class="text-danger">@error('alamat_guru') {{ $message }} @enderror</span>
          </div>
          <button type="submit" class="btn btn-warning">Edit</button>
          <a href="{{route('kd_guru')}}" class="btn btn-secondary float-right">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection