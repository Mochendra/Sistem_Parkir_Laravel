<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class ruangController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_kendaraan = DB::table('kendaraan')->get();
        return view('ruang',['data_kendaraan' => $data_kendaraan]);
    }

    public function edit_ruang($ruang){
        $data_kendaraan = DB::table('kendaraan')->where('id',$ruang)->get();
        return view('/edit_ruang', ['data_kendaraan'=>$data_kendaraan]);
    }

    public function edit_ruang_aksi(Request $request){
        $password = bcrypt($request->password);
        DB::table('kendaraan')->where('noKendaraan',$request->noKendaraan)
        ->update(['noKendaraan'=>$request->noKendaraan,
        'ruangParkir'=>$request->ruangParkir,
        'status'=>$request->status,
    
      
        ]);
        return redirect('/pruang');
        }


        //-----------------------------------------------------------pkeluar

        public function lihat_keluar(){
            $data_kendaraan = DB::table('kendaraan')->get();
            return view('lihat_keluar',['data_kendaraan' => $data_kendaraan]);
            }

            public function edit_pkeluar($ruang){
                $data_kendaraan = DB::table('kendaraan')->where('id',$ruang )->get();
                return view('/edit_keluar', ['data_kendaraan'=>$data_kendaraan]);
            }
        
            public function edit_pkeluar_aksi(Request $request){
                DB::table('kendaraan')->where('noKendaraan',$request->noKendaraan)
                ->update(['noKendaraan'=>$request->noKendaraan,
                'ruangParkir'=>$request->ruangParkir,
                'status'=>$request->status,
                'bayar'=>$request->bayar
                ]);
                return redirect('/pkeluar');
                }


    // public function melihatin(){
    //     $data = DB::table('kendaraan')->get();
    //     return view('lihat_kendaraan',['data' => $data]);
    //     }
    //     public function menambahin(){
    //     return view('tambah_kendaraan');
    //     }
    //     public function add_kendaraan(Request $request){ 
    //     $password = bcrypt($request->password);
    //     DB::table('kendaraan')->insert(['noKendaraan'=>$request->noKendaraan,
    //     // 'password'=>$password,
    //     'nomor'=>$request->nomor]);
    //      return redirect('/melihat');
    //     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
