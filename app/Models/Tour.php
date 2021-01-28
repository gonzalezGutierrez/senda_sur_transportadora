<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'small_description',
        'big_description',
        'available_services',
        'not_available_services',
        'adicional_information',
        'start_date',
        'end_date',
        'number_days_txt',
        'number_days',
        'discount_rate',
        'min_peoples'
    ];

    public function places()
    {
        return $this->belongsToMany(Place::class,'tour_programs','place_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function setSlugAttribute($name)
    {
        $this->attributes['slug'] = Str::slug($name);
    }

    public function scopeGetAll($query)
    {
        return $query->orderBy('start_date')
            ->where('status',0);
    }

    public function scopeGetTourAvailable($query)
    {
        return $query->availables();
    }

    public function scopeAvailables($query)
    {
        return $query->where('status',0);
    }

    public function scopeGetTake($query,$take)
    {
        return $query->take($take);
    }

    public function scopeOrderWith($query,$attr,$order)
    {
        return $query->orderBy($attr,$order);
    }


}
