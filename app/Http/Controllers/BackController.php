<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackController extends Controller
{
    public function back(){
        $images = Image::all();
        return view('backoff/backOffice', compact('images'));
    }
    public function form(){
        $images = Image::all();
        return view('backoff/form/formcreate', compact('images'));
    }
    public function destroy(Image $images){
        Storage::delete('public/img/' . $images->src);

        $images->delete();
        return redirect()->back();
    }
    public function create(){
        // return view('backoff/backoffice');
    }
    public function store(Request $request){
        // dd($request->file("img"));
        Storage::put('public/img/', $request->file('img'));

        $images = new Image();
        $images->src = $request->file('img')->hashName();
        $images->save();
        return redirect()->route('backoffice');
    }
}
