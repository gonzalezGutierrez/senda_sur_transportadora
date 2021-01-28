<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use App\Models\Tour;
use App\Models\TourProgram;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TourController extends Controller
{


    public function index()
    {
        $tours = Tour::with('category')->getAll()->paginate(10);
        return view('administracion.tours.index',compact('tours'));
    }

    public function create()
    {

        $tour = new Tour();
        $categories = Category::getPluck();
        $places     = Place::getPluck();
        return view('administracion.tours.create', compact('tour', 'categories','places'));

    }

    public function store(Request $request)
    {

        DB::beginTransaction();

        try {

            $tour = new Tour();

            $tour->name                   = $request->name;
            $tour->slug                   = $request->name;
            $tour->category_id            = $request->category_id;
            $tour->small_description      = $request->small_description;
            $tour->big_description        = $request->big_description;
            $tour->available_services     = $request->available_services;
            $tour->not_available_services = $request->not_available_services;
            $tour->adicional_information  = $request->adicional_information;
            $tour->start_date             = $request->start_date;
            $tour->end_date               = $request->end_date;
            $tour->number_days_txt        = $request->number_days_txt;
            $tour->number_days            = 1;
            $tour->discount_rate          = $request->discount_rate;
            $tour->min_peoples            = $request->min_peoples;

            $tour->save();

            $places = $request->places;

            foreach ($places as $place) {
                $program = new TourProgram();
                $program->place_id = $place;
                $program->tour_id  = $tour->id;
                $program->save();
            }

            DB::commit();

            return redirect('administracion/tours/'.$tour->id.'/edit');

        }catch (\Exception $exception) {
            DB::rollBack();
            dd($exception);
        }

    }

    public function edit($id)
    {

        $tour = Tour::findOrFail($id);

        $categories = Category::getPluck();
        $placesPluck     = Place::getPluck();

        $placesSelect = TourProgram::getPlaces($tour->id)->pluck('place_id');

        $places       = TourProgram::getPlaces($tour->id)->get();

        return view('administracion.tours.edit',compact('tour','categories','placesPluck','placesSelect','places'));

    }

    public function update(Request $request , $id)
    {
        DB::beginTransaction();

        try {

            $tour = Tour::findOrFail($id);

            $tour->name                   = $request->name;
            $tour->slug                   = $request->name;
            $tour->category_id            = $request->category_id;
            $tour->small_description      = $request->small_description;
            $tour->big_description        = $request->big_description;
            $tour->available_services     = $request->available_services;
            $tour->not_available_services = $request->not_available_services;
            $tour->adicional_information  = $request->adicional_information;
            $tour->start_date             = $request->start_date;
            $tour->end_date               = $request->end_date;
            $tour->number_days_txt        = $request->number_days_txt;

            $endDateTour    = Carbon::parse($tour->end_date)->format('d');

            $startDateTour  = Carbon::parse($tour->start_date)->format('d');

            $days           = $endDateTour - $startDateTour + 1;

            $tour->number_days            = $days;
            $tour->discount_rate          = $request->discount_rate;
            $tour->min_peoples            = $request->min_peoples;

            $tour->save();

            DB::commit();

            return redirect('administracion/tours/'.$tour->id.'/edit');

        }catch (\Exception $exception) {
            DB::rollBack();
            dd($exception);
        }
    }

    public function uploadBanner(Request $request ,$id)
    {

        try {

            $tour = Tour::findOrFail($id);

            if ($tour->banner != null) {
                File::delete(public_path().$tour->banner);
            }

            $file = $request->file('file');
            $path =  public_path() . '/imagenes/tours';

            $filename = '/imagenes/tours/'.uniqid() .  $tour->slug.'.'.$file->getClientOriginalExtension();

            $file->move($path,$filename);

            $tour->banner = $filename;
            $tour->save();

            return response()->json(['success' => true], 200);

        }catch (\Exception $exception) {

        }
    }

    public function assignDate(Request $request, $tourId,$programId,$placeId)
    {
        $tour = Tour::findOrFail($tourId);

        $program = TourProgram::findOrFail($programId);

        $program->visit_date = $request->visit_date;
        $program->save();

        return back();
    }


}
