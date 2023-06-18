
@include('cdn')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <h3>Tambah Kendaraan</h3>
                <br>
                <br>
                <form method="get" action="kendaraan/add_kendaraan">
                    {{csrf_field()}}
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Nomor Kendaraan</span>
                        <input type="text" class="form-control" name="noKendaraan" id="noKendaraan" aria-describedby="addon-wrapping" required>
                    </div>
                    <br>
                    <br>
                    <button class="button" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
<div class="col s12">
<div class="card-panel">
<h3>Tambah Kendaraan</h3>
 
<form method="get" action="kendaraan/add_kendaraan">
{{csrf_field()}}
<label style="color:black;font-size:100%" for="desc">Nomor Kendaraan</label>
<div class="input-field">
<input type="text" name="noKendaraan" id="noKendaraan" required> 
</div>
<!-- <label style="color:black;font-size:100%" for="desc">username</label>
<div class="input-field">
<input type="text" name="username" id="username" required> 
</div>
<label style="color:black;font-size:100%" for="desc">password</label>
<div class="input-field">
<input type="password" name="password" id="password" required> 
</div>
<label style="color:black;font-size:100%" for="desc">Nama Lengkap</label>
<div class="input-field">
<input type="text" name="nama" id="nama" required> 
</div>
<label style="color:black;font-size:100%" for="desc">Alamat</label>
<div class="input-field">
<input type="text" name="alamat" id="alamat" required> 
</div>
<label style="color:black;font-size:100%" for="desc">Nomor Telp</label>
<div class="input-field">
<input type="text" name="nomor" id="nomor" required> 
</div>
<label style="color:black;font-size:100%" for="desc">Bagian</label> -->
<br>
<!-- <select name="role" id="role" class="browser-default">
<option value="PMasuk">Petugas Masuk</option>
<option value="PKeluar">Petugas Keluar</option>
<option value="PRuang">Petugas Ruang</option>
</select>
<label style="color:black;font-size:100%" for="desc">MALL</label> 
<select name="kdmall" id="kdmall" class="browser-default">
<option value="01">Royal Plasa</option>
<option value="02">Tunjungan Plasa</option>
<option value="03">Surabaya Plasa</option>
</select> -->
<br>
<button class="btn waves-effect green">Add</button>
</form>
</div>
</div>
</div>
