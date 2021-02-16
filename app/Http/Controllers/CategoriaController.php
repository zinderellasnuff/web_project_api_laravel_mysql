<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;


class CategoriaController extends Controller
{
    public function getCategoria(){
        return response()->json(Categoria::all(), 200);
    }
}
