@include('cdn')
<div class="container">
    <div class="row">
        <div class="col s10">
            <div class="card-panel">
                <h3>Edit User</h3>

                @foreach($data as $user)
                <form method="get" action="/users/update">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Username </span>
                        <input type="text" class="form-control" name="user_name" id="user_name" aria-describedby="addon-wrapping" readonly value="{{$user->user_name}}" required>
                    </div>
                    <br>

                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Password </span>
                        <input type="Password" class="form-control" aria-describedby="addon-wrapping" name="password" id="pass" required>
                    </div>

                    <br>

                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Nama </span>
                        <input type="text" class="form-control" aria-describedby="addon-wrapping" name="nama" id="nama" value="{{$user->nama}}" required>
                    </div>

                    <br>

                    <div class="input-group mb-3">
                        <select name="role" id="role" class="form-select">
                            <option selected>Pilih tugas bagian...</option>
                            <option value="PMasuk">Petugas Masuk</option>
                            <option value="PKeluar">Petugas Keluar</option>
                            <option value="PRuang">Petugas Ruang</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <br>
                    <button class="btn btn-primary">Edit</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>