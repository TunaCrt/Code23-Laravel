@extends("layoutsadmin.app")
@section("content")
    <h3>Blog Güncelle</h3>
    <form method="post" action="{{route("admin.blogs.update")}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" id="id" value="{{ $blog->id }}">
        <div class="row">
            <div class="col-12">
                <label>
                    photo
                    <input type="file" name="photo" id="photo" class="form-control">
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>
                    Title
                    <input type="text" name="title" id="title" class="form-control" value="{{$blog->title}}">
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>
                    Summary
                    <textarea name="summary" id="summary" class="form-control">
                        {{$blog->summary}}
                    </textarea>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>
                    content
                    <textarea name="content" id="content" class="form-control">
                        {{$blog->content}}
                    </textarea>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            </div>
        </div>
    </form>
@endsection

















