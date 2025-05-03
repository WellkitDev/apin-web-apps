<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable =
    [
        'subcategory_id',
        'article_title',
        'article_img',
        'article_detail',
        'visitors',
        'author_id',
        'meta_share',
        'meta_comment',
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }

    public function tags()
    {
        return $this->hasMany(Tag::class, 'article_id');
    }
}
