<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    function articles($id){
        return "Halaman Artikel Dengan ID " . $id; 
    }
}
