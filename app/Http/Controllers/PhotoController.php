<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        $photos = Photo::all();
        return view('photos.index', compact('photos'));
    }
    public function create(){
        return view('photos.create');
    }
    public function store(){
        $data = request()->validate([
            'photo' => 'string',
            'description' => 'string'
        ]);
        Photo::create($data);

        return redirect()->route('photos.index');
    }
    public function show(Photo $photo){
        return view('photos.show', compact('photo'));
    }
}
