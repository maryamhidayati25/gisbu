<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" -->
    <!-- integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->

  <title>Print Pengajuan</title>
</head>

<body>
  <div class=" container-fluid">
    <div class="row">
      <div class="col-12">
        <table align="center">
          <thead>
            <tr>
              <td align="center"><img src="{{ $gambar }}" width="100" height="100">
              </td>
              <td width="80%">
                <center>
                  <font size="5">PEMERINTAH PROVINSI JAWA TIMUR</font><br>
                  <font size="5">DINAS PENDIDIKAN</font><br>
                  <font size="5"><b>SMK BAHRUL ULUM SURABAYA</b></font><br>
                  <font>Jl. Banyu Urip Kidul Molin IIB/69, Banyu Urip, Kec. Sawahan, Kota Surabaya Prov. Jawa Timur</font><br>
                  <font>Website: https://smkbahrululumsurabaya.sch.id/. e-mail: smk.bahrululum@gmail.com</font><br>
                  <font>Kode pos 60255</font>
                </center>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class=" border-bottom border-bottom-dark border-darken-4 shadow-lg" width="100%"
                  style="background-color: #000000; height: 10px">
                </div>
              </td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Nomor</td>
              <?php 
                try{
                  echo '<td>: 423.6/'.$ajuan->id.'/CDW.XI</td>';
                }catch (Exception $e) {
                  echo '<td>: 423.6/'.date('dmy-Hi').'/CDW.XI</td>';
                }
              ?>
            </tr>
            <tr>
              <td>Lampiran</td>
              <td>: 1 Lembar</td>
            </tr>
            <tr>
              <td>Perihal</td>
              <td>: Permohonan Tempat Praktek Kerja Industri</td>
            </tr>
            <tr>
              <td colspan="2" height="20"></td>
            </tr>
            <tr>
              <td colspan="2">Kepada Yth.</td>
            </tr>
            <tr>
              <td colspan="2">Pimpinan {{$industri->nama}}</td>
            </tr>
            <tr>
              <td colspan="2">di</td>
            </tr>
            <tr>
              <td colspan="2">Tempat</td>
            </tr>
            <tr>
              <td colspan="2" height="20"></td>
            </tr>
            <tr>
              <td colspan="2">Dengan hormat,</td>
            </tr>
            <tr>
              <td colspan="2">
                <p class=" text-justify">
                  Dalam rangka pelaksanakan Praktek Kerja Industri (PRAKERIN) bagi siswa siswi SMK BAHRUL ULUM Surabaya tahun
                  pelajaran 2024/2025, diperlukan kerja sama dengan Dunia Usaha/Industri dan Dunia Kerja
                  terkait.<br>
                  Dengan ini Kami mengajukan permohonan kepada Bapak/Ibu selaku Pimpinan DUDIKA untuk dapat bekerja sama
                  menjadi institusi rekanan sekolah Kami, yakni sebagai
                  tempat pelaksanakan Prakerin bagi siswa siswi Kami.<br>
                  Adapun rencana pelaksanakan Praktek Kerja Industri tersebut waktunya akan dilaksanakan pada
                  tanggal <b>{{date('d/m/Y', strtotime($sch->pkl_mulai))}} -
                    {{date('d/m/Y', strtotime($sch->pkl_sampai))}}.</b><br>
                  Demikian Permohonan ini Kami buat. Atas perhatian dan kerja samanya, Kami ucapkan terimakasih.
                </p>
              </td>
            </tr>
            <tr>
              <td colspan="2" height="50"></td>
            </tr>
          </tbody>
        </table>
        <table align="right">
          <thead>
            <tr>
              <td align="center">Surabaya, {{date('d-m-Y')}}</td>
            </tr>
            <tr>
              <td colspan="2" height="50"></td>
            </tr>
            <tr>
              <td align="center"><u>{{$sch->kesek}}</u></td>
            </tr>
            <tr>
              <td align="center">NIP: {{$sch->ni_kesek}}</td>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <table align="center">
          <thead>
            <tr>
              <td colspan="2">
                <center>
                  <font size="6">SURAT PERNYATAAN</font>
                </center>
              </td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="2" height="20"></td>
            </tr>
            <tr>
              <td colspan="2">Yang bertandatangan di bawah ini:</td>
            </tr>
            <tr>
              <td colspan="2" height="10"></td>
            </tr>
            <tr>
              <td>Nama Industri<sup></sup></td>
              <td>: ...</td>
            </tr>
            <tr>
              <td>Alamat Lengkap Industri<sup>**</sup></td>
              <td>: ...</td>
            </tr>
            <tr>
              <td>No Telp/Kontak Industri<sup>**</sup></td>
              <td>: ...</td>
            </tr>
            <tr>
              <td colspan="2" height="20"></td>
            </tr>
            <tr>
              <td colspan="2">Dengan ini menyatakan</td>
            </tr>
            <tr>
              <td colspan="2" height="10"></td>
            </tr>
            <tr>
              <td colspan="2" align="center">
                <font size="4">MENERIMA / TIDAK MENERIMA<sup>*</sup></font><br><br>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <p class=" text-justify">
                  Penempatan siswa SMK Bahrul Ulum Surabaya untuk melaksanakan Praktek Kerja Industri di Perusahaan<sup></sup>
                  Kami, sebanyak ... orang. Dimulai dari tanggal <b>{{date('d/m/Y', strtotime($sch->pkl_mulai))}} -
                    {{date('d/m/Y', strtotime($sch->pkl_sampai))}}.</b><br><br>
                  Nama - nama siswanya diantaranya:
                </p>
              </td>
            </tr>
          </tbody>
        </table>
        <table align="center" style="border: 1px solid black; border-collapse: collapse;"
          class=" table table-striped table-bordered">
          <thead>
            <tr>
              <th style="border: 1px solid black; padding:10px;">No</th>
              <th style="border: 1px solid black; padding:10px;">Nama Siswa</th>
              <th style="border: 1px solid black; padding:10px;">Kelas / Jurusan</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($siswa as $s)
            <tr>
              <th style="border: 1px solid black; padding:10px;">{{$loop->iteration}}</th>
              <td style="border: 1px solid black; padding:10px;">{{$s->nama}}</td>
              <td style="border: 1px solid black; padding:10px;">{{$s->kelas}} / {{$s->jurusan}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <table align="right">
          <thead>
            <tr>
              <td height="20"></td>
            </tr>
            <tr>
              <td align="center">Surabaya, ...............</td>
            </tr>
            <tr>
              <td height="20"></td>
            </tr>
            <tr>
              <td align="center"><b>Pimpinan</b></td>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <br><br><br><br><br>
        <table>
          <thead>
            <tr>
              <td></td>
              <td></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Catatan:</td>
              <td><sup>*</sup>) Coret yang tidak perlu</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>

</body>

</html>