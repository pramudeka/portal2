<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=[
                'isi' => 'v_home',
                'back' => 'main',
                'menu' => 'home',
            ];
        return view('layout/v_wrapper',$data);
    }
    
    public function layanan()
    {
        $data=[
                'isi' => 'layanan',
                'back' => 'none',
                'menu' => 'layanan',
            ];
        return view('layout/v_wrapper',$data);
    }
    public function profil()
    {
        $data=[
                'isi' => 'profil',
                'back' => 'none',
                'menu' => 'profil',
            ];
        return view('layout/v_wrapper',$data);
    }
    public function faq()
    {
        $data=[
                'isi' => 'faq',
                'back' => 'none',
                'menu' => 'faq',
            ];
        return view('layout/v_wrapper',$data);
    }
    public function berita()
    {
        $data=[
                'isi' => 'berita',
                'back' => 'none',
                'menu' => 'berita',
            ];
        return view('layout/v_wrapper',$data);
    }
    public function lapor()
    {
        $data=[
                'isi' => 'lapor',
                'back' => 'none',
                'menu' => 'lapor',
            ];
        return view('layout/v_wrapper',$data);
    }
}
