<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        if (request('tag')){
            $articles= Tag::where('name',request('tag'))->firstorfail()->articles;

            return $articles;

        }
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }
    Public function show(Article $article)
    {
        return view('articles.show',['article'=>$article]);
    }

    public function create()
    {
        return view('articles.create',[
        'tags'=> Tag::all()
        ]);

    }

    public function store()
    {

        Article::create($this->validateArticle());

        return redirect(route('articles.index'));

    }

    
    public function edit(Article $article)
    {
        return view('articles.edit',compact('article'));
    }

    public function update(Article $article)
    {
        $article::update($this->validateArticle());

        return redirect(route($article->path()));
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title'=>'required',
            'excerpt'=>'required',
            'body'=>'required'
        ]);
    }


}