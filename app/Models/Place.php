<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Place extends Model
{
    use HasFactory;

    protected $table = 'places';

    protected $limit = 100;

    public function pictures()
    {
        return $this->hasMany(PlaceGalery::class,'place_id')->where('status',0);
    }

    public function setSlugAttribute($name)
    {
        $this->attributes['slug'] = Str::slug($name);
    }

    public function scopeGetAll($query)
    {
        return $query->orderBy('id','DESC');
    }


    public static function getPluck()
    {
        return Place::where('status',0)->pluck('name','id');
    }

    public function textLimit()
    {
        if(strlen($this->small_description) > $this->limit){
		    return substr($this->small_description, 0, $this->limite) . '...';
	    }
        return $this->smaill_description;
    }


    public function scopeGetPlacesActives($query)
    {
        return $query->actives();
    }

    public function scopeActives($query)
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

    public function scopeGetRandPlaces($query)
    {
        return $query->inRandomOrder();
    }
}
