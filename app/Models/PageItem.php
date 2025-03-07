<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageItem extends Model
{
    use HasFactory;
    protected $fillable = ['page_id', 'title', 'slug', 'description', 'image', 'sort_order', 'is_active'];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }
}
