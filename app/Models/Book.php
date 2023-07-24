<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = ['name','author','cost','image','rate','publisher','page_size','description','issue','report'];

    use HasFactory;

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

}
