<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = DB::table('users')->get();
        $password = bcrypt($request->password);
        DB::table('users')->insert(['user_name'=>$request->user_name,
        'nama'=>$request->nama,
        'password'=>$password,
        'mall'=>$request->mall,
        'role'=>$request->role]);
        return redirect('/petugas');
   }
//-----------------------------------------------------------------
public function creating(Request $request)
{
    $user = DB::table('kendaraan')->get();
    $password = bcrypt($request->password);
    DB::table('kendaraan')->insert(['noKendaraan'=>$request->noKendaraan,
    'nomor'=>$request->nomor]);
    return redirect('/');
}
//---------------------------------------------------------------

   public function lihat(){
    $data = DB::table('users')->get();
    return view('lihat_user',['data' => $data]);
    }
    public function tambah(){
    return view('tambah_user');
    }
    public function add_user(Request $request){ 
    $password = bcrypt($request->password);
    DB::table('users')->insert(['user_name'=>$request->user_name,
    'password'=>$password,
    'nama'=>$request->nama,


    'mall'=>$request->mall,
    'role'=>$request->role]);
    return redirect('/petugas');
    }
    public function delete($id){
    DB::table('users')->where('id',$id)->delete();
    return redirect('/petugas');
    }
    public function edit_user($user){
    $data = DB::table('users')->where('id',$user)->get();
    return view('/edit_user', ['data'=>$data]);
    }
    public function edit_user_aksi(Request $request){
    $password = bcrypt($request->password);
    DB::table('users')->where('user_name',$request->user_name)
    ->update(['user_name'=>$request->user_name,
    'password'=>$password,
    'nama'=>$request->nama,

  
    'role'=>$request->role]);
    return redirect('/petugas');
    }
   
//-----------------------------------------------------------------
public function melihat(){
    $data = DB::table('kendaraan')->get();
    return view('lihat_kendaraan',['data' => $data]);
    }
    public function menambah(){
    return view('tambah_kendaraan');
    }
    public function add_kendaraan(Request $request){ 
    $password = bcrypt($request->password);
    DB::table('kendaraan')->insert(['noKendaraan'=>$request->noKendaraan,
    // 'password'=>$password,
    'nomor'=>$request->nomor]);
     return redirect('/');
    }
    // public function deleting($id){
    // DB::table('kendaraan')->where('id',$id)->deleting();
    // return redirect('/');
    // }
    // public function edit_kendaraan($user){
    // $data = DB::table('kendaraan')->where('id',$user)->get();
    // return view('/edit_kendaraan', ['data'=>$data]);
    // }
    // public function edit_kendaraan_aksi(Request $request){
    // $password = bcrypt($request->password);
    // DB::table('kendaraan')->where('noKendaraan',$request->noKendaraan)
    // ->update(['noKendaraan'=>$request->no_Kendaraan,
    // 'password'=>$password,
    // 'nomor'=>$request->nomor,

  
    // 'role'=>$request->role
// ]);
    // return redirect('/');
   // }
//-----------------------------------------------------------------

    

     //-----------------------------------------------------------------pmasuk
     public function creating(Request $request)
     {
         $user = DB::table('kendaraan')->get();
         $password = bcrypt($request->password);
         DB::table('kendaraan')->insert(['noKendaraan'=>$request->noKendaraan,
         'nomor'=>$request->nomor]);
         return redirect('/pmasuk');
    }

     public function melihat(){
        $data = DB::table('kendaraan')->get();
        return view('lihat_kendaraan',['data' => $data]);
        }
        public function menambah(){
        return view('tambah_kendaraan');
        }
        public function add_kendaraan(Request $request){ 
        $password = bcrypt($request->password);
        DB::table('kendaraan')->insert(['noKendaraan'=>$request->noKendaraan,
        // 'password'=>$password,
        'nomor'=>$request->nomor]);
         return redirect('/pmasuk');
        }

        //-----------------------------------------------------------------ruang

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
