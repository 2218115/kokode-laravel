<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;


class Category extends Model
{
    use HasFactory;

    protected $table = 'tb_category';
    protected $fillable = [
        'nama',
    ];

    public function articles() : BelongsTo {
        return $this->belongsTo(Article::class);
    }
}
