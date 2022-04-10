<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Post;
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
    public function edit(Photo $photo){

        return view('photos.edit', compact('photo'));
    }
    public function update(Photo $photo){
        $data = request()->validate([
            'photo' => 'string',
            'description' => 'string'
        ]);
        $photo->update($data);
        return redirect()->route('photo.show', $photo->id);
    }
    public function destroy(Photo $photo){
        $photo->delete();
        return redirect()->route('photos.index');
    }
}
