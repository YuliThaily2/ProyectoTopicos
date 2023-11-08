<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subcategories extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'Category_id',
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function products():HasMany
    {
        return $this->hasMany(Product::class);
    }
}
