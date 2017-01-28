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
                            <h3>{{ $post->title }}</h3>
                            <p>{{ $post->content }}</p>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
@endsection