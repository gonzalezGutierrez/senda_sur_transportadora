<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourProgram extends Model
{
    use HasFactory;

    public function places()
    {
        return $this->hasMany(Place::class,'place_id');
    }

    public function scopeGetPlaces($query,$tourId)
    {
        return $query->join('places','tour_programs.place_id','places.id')
            ->where('tour_programs.tour_id',$tourId)
            ->orderBy('tour_programs.visit_date','ASC')
            ->select([
                'tour_programs.place_id',
                'tour_programs.id as programId',
                'places.name',
                'places.banner',
                'tour_programs.visit_date',
                'places.id','tour_programs.id as tour_program_id',
                'places.small_description'
            ]);
    }

    public function getPlacesWithIdtourAndIdPlace($idTour,$idPlace)
    {
        return $this->where('tour_id',$idTour)->where('place_id',$idPlace)->first();
    }

    public function  getNumberDayBetweenDateTour($tour,$dayCurrent)
    {

        $endDateTour    = Carbon::parse($tour->end_date)->format('d');

        $startDateTour  = Carbon::parse($tour->start_date)->format('d');

        $days           = $endDateTour - $startDateTour + 1;

        $dateInitial    = date($tour->start_date);

        $numberDay = 0;
        for($i=0; $i<$days; $i++)
        {

            if ($dateInitial == $dayCurrent) {
                $numberDay = $i;
                break;
            }

            $dateInitial = date('Y-m-d',strtotime($dateInitial."+ 1 days"));

        }

        return $numberDay+1;

    }

}
