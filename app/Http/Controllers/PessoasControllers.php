<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Pessoas;

class PessoasControllers extends Controller
{
    public function index(){
       
        return view('teste');
   
    }
}
