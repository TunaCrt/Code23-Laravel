@extends("layouts1.app")
@section("content")
    <div class="container">
        <h1>Blogs</h1>

        @foreach($blogs as $blog)
            <div class="row">
                <div class="col-2">
                    <img src="{{asset("Blogs/Photos/".$blog->photo)}}" height="80">
                </div>
                <div class="col-10">
                    <h2>{{$blog -> title}}</h2>
                    <p>{{$blog -> summary}}</p>
                    <a href="{{route("front.blogs.show",$blog->id)}}" class="btn btn-primary">Detay</a>

                </div>
            </div>
        @endforeach
    </div>
@endsection

