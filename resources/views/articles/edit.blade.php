@extends ('layout')

@section('head')
<link ref="stylesheet" href="{{mix('css/app.css')}}">
@endsection

 @section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            
            <h1 class="heading has -text-weight-bold is-size-4">New Article</h1>

        <form method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method="PUT"
            <div class="field">
                <label class="label" for="title">Title</label>
                
                <div class="control">
                    <input class="input" type="text" name="title" id="title">
                </div>
            </div>
        

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>
                
                <div class="control">
                    <textarea class="textarea" name="excerpt" id ="excerpt"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>
                
                <div class="control">
                    <textarea class="textarea" name="body" id ="body"></textarea>
                </div>
            </div>

            <div class="field is-grouped">
                
                <div class="control">
                    <button class="button is-link" type="submit">Submit</textarea>
                </div>
            </div>

        </form>

        </div>
    </div>

@endsection
