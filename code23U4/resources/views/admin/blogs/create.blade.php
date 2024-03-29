@extends("layoutsadmin.app")
@section("content")
    <h3>Yeni Blog Ekle</h3>
    <form method="post" action="{{route("admin.blogs.store")}}" enctype="multipart/form-data">
        @csrf
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
                    <input type="text" name="title" id="title" class="form-control">
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>
                    Summary
                    <textarea name="summary" id="summary" class="form-control">

                    </textarea>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>
                    content
                    <textarea name="content" id="content" class="form-control">

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
















