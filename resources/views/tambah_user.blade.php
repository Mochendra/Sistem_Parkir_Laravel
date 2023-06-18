@include('cdn')
<div class="container">
  <div class="row">
    <div class="col s10">
      <div class="card-panel">
        <h3>Tambah User</h3>

        <form method="get" action="users/add_user">
          {{csrf_field()}}

          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Username</span>
            <input type="text" class="form-control" name="user_name" aria-describedby="addon-wrapping" id="user_name" required />
          </div>
          <br />
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Password</span>
            <input type="password" class="form-control" name="password" aria-describedby="addon-wrapping" id="password" required />
          </div>
          <br />
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Nama</span>
            <input type="text" class="form-control" name="nama" aria-describedby="addon-wrapping" id="nama" required />
          </div>
          <br />
          <br />

          <div class="input-group mb-3">
            <select name="role" id="role" class="form-select">
              <option selected>Pilih tugas bagian...</option>
              <option value="PMasuk">Petugas Masuk</option>
              <option value="PKeluar">Petugas Keluar</option>
              <option value="PRuang">Petugas Ruang</option>
              <option value="Admin"> Admin</option>
            </select>
          </div>

          <div class="input-group mb-3">
            <!-- <select name="kdmall" id="kdmall" class="form-select"> -->
              <!-- <option selected>Pilih Mall...</option>
              <option value="01">Royal Plasa</option>
              <option value="02">Tunjungan Plasa</option>
              <option value="03">Surabaya Plasa</option> -->
            </select>
          </div>

          <br />
          <button class="btn btn-primary">Tambah User</button>
        </form>
      </div>
    </div>
  </div>
</div>