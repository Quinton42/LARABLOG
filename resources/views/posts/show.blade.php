@extends ('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>{{ $post->title }}</h2>
                    <hr>
                    <p>{{ $post->content }}</p>

                    <br>
                    <div class="btn-group" role="group">
                        <a href="{{ route('post.index') }}" type="button" class="btn btn-default">&larr; revenir à la liste des articles </a>
                    </div>
                </div>
            </div>
        </div>
@endsection