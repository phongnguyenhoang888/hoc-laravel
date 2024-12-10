<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index_list(){


        // la dâta tu sql trả về controller xử lý xg trả về view
        $data = DB::table('sinhvien')->get();

        $data = $data->toArray();


        return view('list', compact('data'));
    }

    public  function add(){
        return view('add');
    }

    public function insert(Request $request){
       // $dulieu =$request ->all();
       // dd($dulieu);
       $name = $request->input('name');
       $age = $request->input('age');
       $email =$request->input('email');
       $quoc_tich =$request->input('quoc_tich');
       $ma_sv = $request->input('masv');

       // lưu vào csdl
       DB::table('sinhvien')->insert([
        'ten_sinhvien'=>$name,
        'tuoi'=> $age,
        'email'=>$email,
        'quoc_tich'=>$quoc_tich,
        'ma_sv'=>$ma_sv,
       ]);
         // Chuyển hướng về trang danh sách
         return redirect('/list');

    }

    public function index()
    {
        //
    }

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
