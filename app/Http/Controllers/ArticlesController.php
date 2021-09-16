<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::when($request->filled('category_id'),function ($q) use ($request){
            return $q->where('category_id',$request->category_id);
        })->paginate(10);
        $category = Category::all();
        $user = Auth::user();
        return view('admin.article')->with('article',$articles )->with('category',$category )->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.add-article',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'excerpt' => 'required',
            'category_id' => 'required',
            'featured_photos' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('featured_photos')){
            $imgName=rand(100,1000).'.'.$request->featured_photos->extension();
            $request->featured_photos->move(public_path('uploads'),$imgName);
        }

        $article = new Article();
        $article->name = $request->name;
        $article->excerpt = $request->excerpt;
        $article->category_id = $request->category_id;
        $article->featured_photos = $imgName;
        $article->description = $request->description;
        $article->save();
        return redirect()->route('admin.article')->with(['Msg' => 'Added Succesfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Article $article
     * @return void
     */
    public function show(Article $article)
    {
        $article = Article::find($article);
        return view('magazin.blog-single-alt' , compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $category = Category::get();
        return view('admin.edit-article' , compact('article'))->withCategory($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {

        $request->validate([
            'name' => 'required',
            'excerpt' => 'required',
            'category_id' => 'required',
            'featured_photos' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('featured_photos')){
            $imgName=rand(100,1000).'.'.$request->featured_photos->extension();
            $request->featured_photos->move(public_path('uploads'),$imgName);
        }

        $article->name = $request->name;
        $article->excerpt = $request->excerpt;
        $article->category_id = $request->category_id;
        $article->featured_photos = $imgName;
        $article->description = $request->description;
        $article->save();
        return redirect()->route('admin.article')->with(['Msg' => 'Added Succesfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete($article);
        return redirect()->route('admin.article')->with(['Msg' => 'Delete Succesfully']);
    }


}
