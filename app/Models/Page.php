<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'type',
        'is_active',
        'slug',
    ];

    public function pageItems()
    {
        return $this->hasMany(PageItem::class, 'page_id');
    }

}
