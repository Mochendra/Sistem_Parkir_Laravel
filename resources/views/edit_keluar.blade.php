@include('cdn')
<div class="container">
    <div class="row">
        <div class="col s10">
            <div class="card-panel">
                <h3>Edit User</h3>

                @foreach($data_kendaraan as $user)
                <form method="get" action="/pkeluar/update">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Plat </span>
                        <input type="text" class="form-control" name="noKendaraan" id="noKendaraan" aria-describedby="addon-wrapping" readonly value="{{$user->noKendaraan}}">
                    </div>
                    <br>

                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Ruang </span>
                        <input type="text" class="form-control" aria-describedby="addon-wrapping" name="ruangParkir" id="ruangParkir" placeholder="{{$user->ruangParkir}}" value="">
                    </div>

                    <div class="input-group mb-3" hidden>
                        <select name="status" id="status" class="form-select">
                            <option value="0">0</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <select name="bayar" id="bayar" class="form-select">
                            <option value="5000">Rp. 5000</option>
                        </select>
                    </div>
            </div>
            <br>
            <button class="btn btn-primary">Edit</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
</div>