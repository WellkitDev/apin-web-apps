<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'subcategory';
    protected $fillable =
    [
        'subcategory_name',
        'categore_id',
        'slug_sub',
        'sub_order',
        'show_on_menu',
    ];

    public function category()
    {
        return $this->belongsTo(category::class, 'categore_id', 'id');
    }
}
