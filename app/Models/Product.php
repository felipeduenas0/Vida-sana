<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{

    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'shortDescription',
        'description',
        'howToUse',
        'price',
        'stockAmount',
        'image',
        'category_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
