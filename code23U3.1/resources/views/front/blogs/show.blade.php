@extends("layouts.app")
@section("content")

    <h1>Blogs</h1>

    @if(isset($blog))
        <div class="row">
            <div class="col-2">
                Photo
            </div>
            <div class="col-10">
                <h2>{{$blog -> title}}</h2>
                <p>{{$blog -> content}}</p>
                <a href="{{route("front.blogs.index",$blog->id)}}" class="btn btn-primary">Geri</a>

            </div>
        </div>
    @endif
@endsection

