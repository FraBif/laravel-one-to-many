<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['id', 'name', 'description'];
    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

}
