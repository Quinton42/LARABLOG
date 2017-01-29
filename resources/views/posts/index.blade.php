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
                            <h3>{{ str_limit($post->title, 25) }}</h3>
                            <br>
                            </div>
                            <p>{{ str_limit($post->content, 90) }}</p>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
@endsection