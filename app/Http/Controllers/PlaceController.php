<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\PlaceGalery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PlaceController extends Controller
{

    public function index()
    {
        $places = Place::getAll()->get();
        return view('administracion.places.index', compact('places'));
    }

    public function create()
    {
        $place = new Place();

        return view('administracion.places.create', compact('place'));
    }

    public function store(Request $request)
    {
        try {

            $place = new Place();

            $place->name = $request->name;
            $place->slug = $request->name;
            $place->small_description = $request->small_description;
            $place->big_description = $request->big_description;
            $place->status = $request->status;

            $place->save();

            return redirect('administracion/places/' . $place->id . '/edit');

        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function edit($id)
    {
        $place = Place::with('pictures')->findOrFail($id);

        return view('administracion.places.edit', compact('place'));
    }

    public function uploadBanner(Request $request, $id)
    {
        try {

            $place = Place::findOrFail($id);

            $picture = PlaceGalery::findOrFail($request->picture_id);

            PlaceGalery::where('place_id',$place->id)->update(['status'=>0]);

            $picture->status = 1;
            $picture->save();

            $place->banner = $picture->url_image;
            $place->save();


            return back();


        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function postImage(Request $request,$id)
    {
        try {

            $place = Place::findOrFail($id);

            $file = $request->file('file');
            $path =  public_path() . '/imagenes/places/galery';

            $filename = '/imagenes/places/galery/'.uniqid() .  $place->slug.'.'.$file->getClientOriginalExtension();

            $file->move($path,$filename);

            $placePicture = new PlaceGalery();

            $placePicture->place_id = $place->id;
            $placePicture->url_image = $filename;

            $placePicture->save();

            return response()->json(['success' => true], 200);

        } catch (\Exception $exception) {

        }
    }

    public function update(Request $request , $id){
        try {

            $place = Place::findOrFail($id);

            $place->name = $request->name;
            $place->slug = $request->name;
            $place->small_description = $request->small_description;
            $place->big_description = $request->big_description;
            $place->status = $request->status;

            $place->save();

            return redirect('administracion/places/' . $place->id . '/edit');

        } catch (\Exception $exception) {
            dd($exception);
        }
    }


}
