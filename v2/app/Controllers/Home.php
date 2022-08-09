<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=[
                'isi' => 'v_home',
            ];
        return view('layout/v_wrapper',$data);
    }
    
    public function layanan()
    {
        $data=[
                'isi' => 'layanan',
            ];
        return view('layout/v_wrapper',$data);
    }
    public function profil()
    {
        $data=[
                'isi' => 'profil',
            ];
        return view('layout/v_wrapper',$data);
    }
}
