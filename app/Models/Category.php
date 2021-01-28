<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function setSlugAttribute($name)
    {
        $this->attributes['slug'] = Str::slug($name);
    }

    public function scopeGetCategories($query)
    {
        return $query->orderBy('id','DESC');
    }


    public static function getPluck()
    {
        return Category::where('status',0)->pluck('name','id');
    }
}
