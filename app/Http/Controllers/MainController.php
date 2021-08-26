<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $articles = new Article;
        $articles = $articles->paginate(2);
        $categories = Category::with('articles')->get();
        return view('magazin.index' , compact('articles'))->with('categories',$categories);
    }

    public function about(){
        $categories = Category::get();
        return view('magazin.about' , compact('categories'));
    }

    public function contact(){
        return view('magazin.contact');
    }

    public function category($id){
        $categories = Category::findOrFail($id);
        return view('magazin.category')->with('categories',$categories );
    }

    public function blog(){
        $categories = Category::get();
        return view('magazin.category' , compact('categories'));
    }

}
