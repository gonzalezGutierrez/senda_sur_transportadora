<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::getCategories()->paginate();
        return view('administracion.categories.index',compact('categories'));
    }

    public function create()
    {
        $category = new Category();
        return view('administracion.categories.create',compact('category'));
    }

    public function store(Request $request)
    {
        try {

            $category = new Category();

            $category->name = $request->name;
            $category->status = $request->status;
            $category->slug   = $request->name;
            $category->description = $request->description;

            $category->save();

            return redirect('/administracion/categories/'.$category->id.'/edit');

        }catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);


        return view('administracion/categories.edit',compact('category'));
    }

    public function update(Request $request, $id) {

        try {

            $category = Category::findOrFail($id);

            $category->name = $request->name;
            $category->status = $request->status;
            $category->slug   = $request->name;
            $category->description = $request->description;

            $category->save();

            return  back();

        }catch (\Exception $exception) {

            dd($exception);

        }


    }

    public function uploadBanner(Request $request,$id)
    {

        try {
            $category = Category::findOrFail($id);

            if ($category->banner != null) {
                File::delete(public_path().$category->banner);
            }

            $file = $request->file('file');
            $path =  public_path() . '/imagenes/categories';

            $filename = '/imagenes/categories/'.uniqid() .  $category->slug.'.'.$file->getClientOriginalExtension();

            $file->move($path,$filename);

            $category->banner = $filename;
            $category->save();

            return response()->json(['success'=>true],200);
        }catch (\Exception $exception) {
            return response()->json($exception);
        }

    }


}
