<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fornecedor extends Model
{
    use HasFactory;
    protected $fillable = ['descricao', 'produto', 'preco', 'cnpj', 'cidade'];

   /* public function categoria(){
        return $this->belongsto(class::categoria)
    }*/
}
