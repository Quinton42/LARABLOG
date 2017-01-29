@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h2 class="list-group-item-heading">Articles</h2>

            </div>

            @if(count($posts) == 0)
                Aucun article n'a été publié.
            @else
                @foreach($posts as $post)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">

                            <div class="caption">
                                <div class="page-header info">
                                    <h3>{{ str_limit($post->title, 20) }}</h3>
                                    <br>
                                </div>
                                <p>{{ str_limit($post->content, 90) }}</p>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('post.show', $post->id) }}" type="button" class="btn btn-default">Lire la suite &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3 col-md-5 col-md-offset-4">

            {!! $posts->links() !!}
            </div>

        </div>
    </div>
@endsection