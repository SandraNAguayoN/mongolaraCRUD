<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function form( $_id = false ){

        if($_id){
            $data = Post::findOrFail($_id);
            return view('post.form', compact('data')); 
        }
        $data=false;
        return view('post.form', compact('data'));
        //return view('post.form');
    }

    public function update(Request $request, $_id){
        //dd($request->title);
        $data = Post::findOrFail($_id);
        $data->product = $request->product;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->brand = $request->brand;
        $data->model = $request->model;
        $data->color = $request->color;
        $data->soldout = $request->soldout;
        $data->available = $request->available;
        $data->save();

        if($data) {
            return redirect()->route('home');
        }else{
            return back();
        }
    }

    public function save(Request $request){
        //dd($request->title);
        $data = new Post($request->all());
        //$data->created_by = \Auth::user()->name; guarda en el atributo created_by el nombre de usuario
        //guarda en el atributo created_by el correo
        $data->created_by = \Auth::user()->email; 
        $data->save();

        if($data) {
            return redirect()->route('home');
        }else{
            return back();
        }
    }

    public function delete($_id){
        $data = Post::destroy($_id);
        if($data){
            return redirect()->route('home');
        } else {
            dd('ERROR: Lo siento, no se pudo eliminar este registro');
        }

    }
}
