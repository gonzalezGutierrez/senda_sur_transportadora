<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Place;
use App\Models\Tour;
class PagesController extends Controller
{

    public function home()
    {
        //places
        $placesCount    = Place::getPlacesActives()->count();
        $populatePlaces = Place::with('pictures')->getPlacesActives()->getTake(6)->orderWith('id','DESC')->getRandPlaces()->get();

        //paquetes
        $toursCount     = Tour::getTourAvailable()->count();
        $populateTours  = Tour::with('places')->getTourAvailable()->getTake(6)->orderWith('start_date','ASC')->get();
        
        $bannerPlace    = Place::get()->random(1)->first()->banner;

        $bannerTour     = Tour::get()->random(1)->first()->banner;


        return view('pages.home',compact(
            'placesCount',
            'populatePlaces',

            'toursCount',
            'populateTours',

            'bannerPlace',
            'bannerTour'
        ));
    }

}
