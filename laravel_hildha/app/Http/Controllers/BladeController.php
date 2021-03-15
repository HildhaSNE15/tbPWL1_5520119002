<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index()
    {
        $fruits = array(
            0 => 'Anggur',
            1 => 'Lengkeng',
            2 => 'Jeruk',
            3 => 'Melon',
        );

        $name = array(
            0 => 'Hildha'
    );

        return view('pages.home',compact('name', 'fruits'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
