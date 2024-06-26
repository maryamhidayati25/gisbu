@extends('layout.main')

@section('title', 'Edit Industri')

@section('isi')
<div class="container">
  <div class="row justify-content-center">
    <div class="col col-md-10">
      <h3 class=" text-uppercase">Edit Industri</h3>
      <div class="card">
        <div class="card-body">
          <div class="row g-0">
            <div class="col col-md-6">
              <form action="{{ route('update_indu') }}" method="post">
                @csrf
                <input type="hidden" name="idi" id="idi" value="{{ $industrie->id_user }}">
                <div class="form-group">
                  <label for="nama_indu">Nama Perusahaan</label>
                  <input type="text" class="form-control" id="nama_indu" name="nama_indu"
                    placeholder="Masukkan Nama Perusahaan/Industri Anda ..."
                    value="{{ $industrie->nama ?? old('nama_indu') }}">
                  <span class="text-danger">@error('nama_indu') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="bidang">Bidang</label>
                  <input type="text" class="form-control" id="bidang" name="bidang" placeholder="Bergerak di bidang ..."
                    value="{{ $industrie->bidang ?? old('bidang') }}">
                  <span class="text-danger">@error('bidang') {{ $message }} @enderror</span>
                </div>
                <label for="menjur">Menerima Jurusan</label>
                <div class="form-group">
                  @foreach ($jurusan as $mj)
                  <input type="hidden" name="idj[]" id="idj" value="{{$mj->id}}">
                  <input type="hidden" name="mj[{{$mj->id}}]" id="jt" value="{{$mj->jurusan}}">
                  <div class=" form-check">
                    @php
                    $jt = app('App\Http\Controllers\IndustriesController')->getjt($industrie->id, $mj->jurusan);
                    @endphp
                    @if ($jt == 1)
                    <input type="checkbox" class=" form-check-input" value="{{ $mj->jurusan }}" name="terjur[]" checked>
                    @else
                    <input type="checkbox" class=" form-check-input" value="{{ $mj->jurusan }}" name="terjur[]">
                    @endif
                    <label for="terjur" class=" form-check-label">{{ $mj->jurusan}}</label>
                  </div>
                  @endforeach
                </div>
                <div class="form-group">
                  <label for="provinsi_indu">Provinsi</label>
                  <select class="form-control form-select form-select-md" name="provinsi_indu" id="provinsi_indu"
                    data-dependent="kota">
                    <option value="">Pilih Provinsi</option>
                    <option value="{{ $industrie->provinsi }}" selected>{{ $industrie->provinsi }}</option>
                    @foreach( $provinsi as $data )
                    <option value="{{ $data->provinsi }}">{{ $data->provinsi }}</option>
                    @endforeach
                  </select>
                  <span class="text-danger">@error('provinsi_indu') {{ $message }}
                    @enderror</span>
                </div>
                <div class="form-group">
                  <label for="kota_indu">Kabupaten/Kota</label>
                  <select class="form-control form-select form-select-md" name="kota_indu" id="kota_indu"
                    data-dependent="kota">
                    <option value="">Pilih Kabupaten/Kota</option>
                    <option value="{{ $industrie->kota }}" selected>{{ $industrie->kota }}</option>
                    @foreach( $kota as $data )
                    <option value="{{ $data->jk }} {{ $data->kota }}">{{ $data->kota }}
                      ({{ $data->jk }} {{ $data->kota }})</option>
                    @endforeach
                  </select>
                  <span class="text-danger">@error('kota_indu') {{ $message }}
                    @enderror</span>
                </div>
            </div>
            <div class="col col-md-6">
              <div class="form-group">
                <label for="alamat_indu">Alamat</label>
                <input type="text" class="form-control" id="alamat_indu" name="alamat_indu"
                  placeholder="Masukkan Alamat Anda ..." value="{{ $industrie->alamat ?? old('alamat_indu') }}">
                <span class="text-danger">@error('alamat_indu') {{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                <label for="email_indu">Alamat Email</label>
                <input type="email" class="form-control" id="email_indu" name="email_indu"
                  placeholder="Masukkan Email Anda ..." value="{{ $industrie->email ?? old('email_indu') }}">
                <span class="text-danger">@error('email_indu') {{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                <label for="n_wa_indu">No HP</label>
                <input type="text" class="form-control" id="n_wa_indu" name="n_wa_indu"
                  placeholder="Masukkan No HP Anda ..." value="{{ $industrie->n_wa ?? old('n_wa_indu') }}">
                <span class="text-danger">@error('n_wa_indu') {{ $message }} @enderror</span>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for="latitude">Latitude</label>
                  <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude"
                    value="{{ $industrie->latitude ?? old('latitude')}}">
                  <span class="text-danger">@error('latitude') {{ $message }} @enderror</span>
                </div>
                <div class=" col-sm-6">
                  <label for="longitude">Longitude</label>
                  <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude"
                    value="{{ $industrie->longitude ?? old('longitude')}}">
                  <span class="text-danger">@error('longitude') {{ $message }}
                    @enderror</span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for="nama_ketua">Nama Pimpinan</label>
                  <input type="text" class="form-control" id="nama_ketua" name="nama_ketua" placeholder="Nama Pimpinan"
                    value="{{ $industrie->ketua }}">
                  <span class="text-danger">@error('nama_ketua') {{ $message }}
                    @enderror</span>
                </div>
                <div class="col col-sm-6">
                  <label for="ni_ketua">NIP Pimpinan (Jika Ada)</label>
                  <input type="text" class="form-control" id="ni_ketua" name="ni_ketua" placeholder="NIP (Jika Ada)"
                    value="{{ $industrie->ni_ketua }}">
                  <span class="text-danger">@error('ni_ketua') {{ $message }}
                    @enderror</span>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Edit</button>
          <a href="{{route('kd_industri')}}" class="btn btn-secondary float-right">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  const terjur = document.querySelectorAll('#terjur');

    for(let i=0; i < terjur.length; i++){
    terjur[i].addEventListener('change', function() {
        terjur[i].value = terjur[i].checked ? 1 : 0;
    });
    }
</script>
@endsection