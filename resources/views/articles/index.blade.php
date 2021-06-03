@extends ('layout')

@section('content')
    <div id="wrapper">
        <div id="page"
        class="container">
        @forelse ($articles as $article)
            <div class="content">
                <div class="title">
                    <h2>
                        <a href="{{$article->path()}}">{{ $article->title }}</a>
                    </h2>
                </div>
            <p>
                <img src="images/banner.jpg" alt="" class="img-rounded"/>
            </p>

            {!! $article->excerpt !!}
            </div>
            @empty
                <p>
                    No relevant article yet.
                </p>
                @endforelse

        </div>
    </div>
@endsection