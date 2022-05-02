<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fornecedor extends Model
{
    use HasFactory;
    protected $fillable = ['descricao', 'produto', 'preco', 'cnpj', 'cidade'];

   /* public function categoria(){

na migração faze: 
    table->unsunbmentvari("categoria_id")
    table->foregin("categoria_id")
    table->references("id")
    table->on("categoria")
    

após isso fazer na self\this(class<model>)
        return $this->belongsto(class::categoria)
        php artisan make:model Produto --migrate
    }*/
}
