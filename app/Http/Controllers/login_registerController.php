<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_registerController extends Controller
{
    /**
     * Display a listing of the resource.
     */




    public function get_login(){
        return view('login');
    }
    public function post_login(Request $request){
        $data= $request->all();
        dd($data);
    }


    // register
    public function get_register(){
        return view('register');
    }
    
    public function post_register(Request $request){
        $data = $request->all();
        dd($data);
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
