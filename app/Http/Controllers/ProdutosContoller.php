<?php

namespace App\Http\Controllers;

use App\Models\produtos;
use Illuminate\Http\Request;

class ProdutosContoller extends Controller
{
    public function index() {
        return produtos::all();
    }

    public function store(Request $req) {
        produtos::create([
            "name" => $req->name,
            "price" => $req->price,
        ]);

        return response(["Ok"], 200);
    }
    public function update(request $req ){

        $produto = Produtos::find($req -> id);

        $produto->name = $req->name;
        $produto->price = $req->price;

        $produto -> save();
        
        return response("tudo Certo", 200);
    }

    public function delete (Request $req){
        $produtos = Produtos::find($req->id);
        $produtos->delete();

        return response("produto apagado", 200);
    }
}
