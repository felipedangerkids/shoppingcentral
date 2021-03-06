<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'segmento', 'delivery', 'telefone', 'whatsapp', 'logo', 'time', 'ifood'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'est_id');
    }

    public function categorias()
    {
        return $this->hasMany(Category::class, 'est_id');
    }
}
