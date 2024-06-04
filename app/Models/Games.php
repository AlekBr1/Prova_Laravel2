<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;
    protected $fillable=['nome', 'preco' ,'descricao' ,'genero', 'imagem'];

    private string $nome;
    private float $preco;
    private string $descricao;
    private string $genero;
    
    public function getnome() :string{
        return $this->nome;
    }
    
    public function setnome(string $nome){
        $this->nome = $nome;
    }
    public function getpreco() : float{
        return $this->preco;
    }
    
    public function setpreco(float $preco){
        $this->preco = $preco;
    }
    public function getdescricao() : string{
        return $this->descricao;
    }
    
    public function setdescricao(string $descricao){
        $this->descricao = $descricao;
    }
    public function getgenero() : string{
        return $this->genero;
    }
    
    public function setgenero(string $genero){
        $this->genero = $genero;
    }
}
