@extends ('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>{{ $post->title }}</h2>
                    <hr>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
        </div>
@endsection