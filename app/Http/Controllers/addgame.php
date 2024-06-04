<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;

class addgame extends Controller
{
    public function AddGame() {
        return view('addgame');
    }
    
    public function savegame(Request $request) {
        $request->validate([
            'nome' => 'required|string|max:50',
            'preco' => 'required|numeric',
            'descricao' => 'required|string',
            'genero' => 'required|string|max:50',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the file upload
        if ($request->hasFile('imagem')) {
            $imageName = time().'.'.$request->imagem->extension();
            $request->imagem->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        } else {
            $imagePath = null;
        }

        Games::create([
            'nome' => $request->input('nome'),
            'preco' => $request->input('preco'),
            'descricao' => $request->input('descricao'),
            'genero' => $request->input('genero'),
            'imagem' => $imagePath,
        ]);

        return view('addgame');
    }

    // public function savegame(){
    //     Games::create([
    //     'nome' => $_POST['nome'],
    //     'preco' => $_POST['preco'],
    //     'descricao' => $_POST['descricao'],
    //     'genero' => $_POST['genero'],
    //     'imagem' => $_POST['imagem']
    //     ]);
    //     return view('addgame');
    // }
}
