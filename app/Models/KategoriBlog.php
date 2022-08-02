<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBlog extends Model
{
    use HasFactory;
    protected $table = 'categoryblog';
    protected $fillable = ['id', 'kategori'];
}
