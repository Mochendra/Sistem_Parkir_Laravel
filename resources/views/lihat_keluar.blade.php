<!doctype html>
@include ('cdn')
<html>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/petugas">Sistem Parkir</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/pmasuk">Petugas Masuk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pruang">Petugas Ruang</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="/pkeluar">Petugas Keluar</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="/keuangan">keuangan</a>
        </li> -->
        <li class="nav-item dropdown">
          <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a> -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">PAW 2023</a>
        </li>
      </ul>
      <form class="d-flex" action="/logout" method="post">
        @csrf

        <button class="btn btn-danger" type="submit">LogOut</button>

      </form>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col s10">
      <div class="card-panel">
        <br />
        <h3>Daftar Nomor</h3>
        <br>
        <br>
        <!-- <a href="/menambah"><button class="btn btn-primary">Tambah Nomor</button></a> <br> -->
        <div class="card-panel white-text blue">
          </br>
          <table class="table table-striped">
            <tr>
              <td>Plat nomor</td>
              <td>Ruang</td>
              <td>Tanggal Masuk</td>
              <td>Jam Masuk</td>
              <td>Status</td>
              <td>Aksi</td>

              <!-- <td>Action</td> -->
            </tr>
            </thead>
            @foreach($data_kendaraan as $usr)
            <tr>
              <td>
                {{$usr->noKendaraan}}
              </td>
              <td>
                {{$usr->ruangParkir}}
              </td>
              <td>
                {{$usr->tanggalMasuk}}
              </td>
              <td>
                {{$usr->jamMasuk}}
              </td>
              @if($usr-> status == 0)
              <td>Belum Masuk</td>
              @else
              <td>Sudah Masuk</td>
              @endif
              <td>
                <!-- <a href="/user/delete/{{$usr->id}}" onclick="return confirm('Admin Yakin ingin menghapusnya?');">
                                    <button class="btn btn-danger">Hapus</button></a>  -->
                <a href="/pkeluar/edit/{{$usr->id}}"><button class="btn btn-secondary">Keluar</button></a>
              </td>

              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>