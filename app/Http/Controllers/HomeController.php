<?php

namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Mahasiswa;

class HomeController extends Controller
{
    public function index():View
    {   
        return view('home');
    }
}
