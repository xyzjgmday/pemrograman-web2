<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Image;

use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function index()
    {
        $images = Images::all();
        return view('image_gallery', ['images' => $images]);
    }

    public function viewImage($fileImage)
    {
        $filePath = storage_path(env('PATH_IMAGE') . $fileImage);
        return Images::make($filePath)->response();
    }
    public function create()
    {
        return view('image_insert');
    }

    public function store(Request $request)
    {
        $file = $request->file('image_src');
        $ext = $file->getClientOriginalExtension();

        $dateTime = date('Ymd_his');
        $newName = 'image_' . $dateTime . '.' . $ext;

        $file->move(storage_path(env('PATH_IMAGE')), $newName);

        $images = new Images;
        $images->image_title = $request->image_title;
        $images->image_desc = $request->image_desc;
        $images->image_src = $newName;

        $images->save();

        return redirect('image')->with('succes', 'Image have been saved');
    }
}
