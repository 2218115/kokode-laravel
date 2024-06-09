<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    use HasFactory;

    protected $table = 'tb_article';

    protected $fillable = [
        'title',
        'content',
        'id_category',
    ];

    public function category(): HasOne {
        return $this->hasOne(Category::class, 'id', 'id_category');
    }
}
